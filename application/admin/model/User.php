<?php
namespace app\admin\model;

use think\Model;
use think\Db;
use think\Cookie;
use app\admin\model\Centers;
use app\admin\model\District;

class User extends Model
{
    protected $table = 'sys_user';

    protected $update = ['nickname','fullname','sex','birthday','avatar','pos_province','pos_city','pos_district','pos_community','address','centers','status'];
    protected $insert = ['uid','nickname','fullname','sex'=>0,'status'=>0];

    public function ucenter()
    {
        return $this->belongsTo('UcenterUser','id','uid');
    }
 
    public function register($data)
    {
        $result = $this->validate(true)->allowField(true)->save($data);
        if($result){
            return true;
        }else{
            return false;
        }
    }

    public function login($uid,$remember=false)
    {
        $user = $this->field(true)->find($uid);
        $role = Db::table('emr_auth')->where('uid',$uid)->value('role_id');
        $auth = array(
            'uid' => $user['uid'],
            'nickname' => $user['nickname'],
            'fullname' => $user['fullname'],
            'role' => $role
        );
        session('user_auth', $auth);
        session('user_auth_sign', data_auth_sign($auth));

        if ($remember) {
            $usertoken = Db::table('sys_user_token')->where('uid',$user['uid'])->find();
            $token = $usertoken['token'];
            if ($usertoken == null) {
                $token = build_auth_key();
                $data['token'] = $token;
                $data['time'] = time();
                $data['uid'] = $user['uid'];
                Db::table('sys_user_token')->insert($data);
            }
        }

        if (!$this->getCookieUid() && $remember) {
            $expire = 3600 * 24 * 7;
            cookie('OX_LOGGED_USER', $this->jiami($this->change() . ".{$user['uid']}.{$token}"), $expire);
        }

        return true;
    }

    private function getCookieUid()
    {

        static $cookie_uid = null;
        if (isset($cookie_uid) && $cookie_uid !== null) {
            return $cookie_uid;
        }
        $cookie = cookie('OX_LOGGED_USER');
        if($cookie==null){
            return false;
        }
        $cookie = explode(".", $this->jiemi($cookie));
        $map['uid'] = $cookie[1]?$cookie[1]:0;
        $user = Db::table('sys_user_token')->where($map)->find();
        $cookie_uid = ($cookie[0] != $this->change()) || ($cookie[2] != $user['token']) ? false : $cookie[1];
        $cookie_uid = $user['time'] - time() >= 3600 * 24 * 7 ? false : $cookie_uid;
        return $cookie_uid;
    }

    private function jiami($txt, $key = null)
    {
        empty($key) && $key = $this->change();

        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789-=_";
        $nh = rand(0, 64);
        $ch = $chars[$nh];
        $mdKey = md5($key . $ch);
        $mdKey = substr($mdKey, $nh % 8, $nh % 8 + 7);
        $txt = base64_encode($txt);
        $tmp = '';
        $i = 0;
        $j = 0;
        $k = 0;
        for ($i = 0; $i < strlen($txt); $i++) {
            $k = $k == strlen($mdKey) ? 0 : $k;
            $j = ($nh + strpos($chars, $txt [$i]) + ord($mdKey[$k++])) % 64;
            $tmp .= $chars[$j];
        }
        return $ch . $tmp;
    }

    /**
     * 解密函数
     * @param string $txt 待解密的字符串
     * @param string $key 解密密钥，默认读取SECURE_CODE配置
     * @return string 解密后的字符串
     */
    private function jiemi($txt, $key = null)
    {
        empty($key) && $key = $this->change();

        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789-=_";
        $ch = $txt[0];
        $nh = strpos($chars, $ch);
        $mdKey = md5($key . $ch);
        $mdKey = substr($mdKey, $nh % 8, $nh % 8 + 7);
        $txt = substr($txt, 1);
        $tmp = '';
        $i = 0;
        $j = 0;
        $k = 0;
        for ($i = 0; $i < strlen($txt); $i++) {
            $k = $k == strlen($mdKey) ? 0 : $k;
            $j = strpos($chars, $txt[$i]) - $nh - ord($mdKey[$k++]);
            while ($j < 0) {
                $j += 64;
            }
            $tmp .= $chars[$j];
        }

        return base64_decode($tmp);
    }

    private function change()
    {
        preg_match_all('/\w/', config('DATA_AUTH_KEY'), $sss);
        $str1 = '';
        foreach ($sss[0] as $v) {
            $str1 .= $v;
        }
        return $str1;
    }

    public function need_login()
    {
        if (!is_login()) {
            if ($uid = $this->getCookieUid()) {
                $this->login($uid);
                return true;
            }
        }
    }

    public function logout()
    {
        session('user_auth', null);
        session('user_auth_sign', null);
        cookie('OX_LOGGED_USER', NULL);
    }

    protected function getAvatarAttr($value,$data)
    {
        if($value==null){
            if($data['sex']==1){
                return "__IMG__/profile/11.png";
            }else{
                return "__IMG__/profile/12.png";
            }
        }else{
            return "__IMG__/profile/11.png";
        }
    }

    protected function getSexAttr($value)
    {
        $status = [0=>'未知',1=>'男',2=>'女'];
        return $status[$value];
    }

    protected function getBirthdayAttr($value)
    {
        if($value!=0){
            return date('Y-m-d',$value);
        }else{
            return '0000-00-00';
        }
    }

    protected function getCentersAttr($value)
    {
        if($value>0){
            $centers = Centers::get($value,true);
            return $centers->visible(['id','name'])->toArray();
        }else{
            $centers = ['id'=>0,'name'=>''];
            return $centers;
        }
    }

    protected function getPosProvinceAttr($value)
    {
        if($value>0){
            $res = District::get($value,true);
            return $res->visible(['id','name'])->toArray();
        }else{
            $res = ['id'=>0,'name'=>''];
            return $res;
        }
    }

    protected function getPosCityAttr($value)
    {
        if($value>0){
            $res = District::get($value,true);
            return $res->visible(['id','name'])->toArray();
        }else{
            $res = ['id'=>0,'name'=>''];
            return $res;
        }
    }

    protected function getPosDistrictAttr($value)
    {
        if($value>0){
            $res = District::get($value,true);
            return $res->visible(['id','name'])->toArray();
        }else{
            $res = ['id'=>0,'name'=>''];
            return $res;
        }
    }

    protected function setBirthdayAttr($value)
    {
        return strtotime($value)!==false?strtotime($value):$value;
    }

    
}