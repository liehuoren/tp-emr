<?php
namespace app\admin\model;

use think\Model;
use think\Db;

class UcenterUser extends Model
{
    protected $table = 'sys_ucenter_user';

    protected $insert = ['username','email','mobile','password','reg_time','reg_ip','status'=>2,'type'];

    protected $readonly = ['username','reg_time','reg_ip'];

    public function profile()
    {
        return $this->hasOne('User','uid','id');
    }

    public function roles()
    {
        return $this->belongsToMany('Role','auth','role_id','uid');
    }

    protected function setPasswordAttr($value)
    {
        return think_ucenter_md5($value, UC_AUTH_KEY);
    }

    protected function setRegTimeAttr($value)
    {
        return request()->time();
    }

    protected function setRegIpAttr($value)
    {
        return request()->ip();
    }

    protected function getRegTimeAttr($value)
    {
        return date('Y-m-d H:i',$value);
    }

    protected function getLastLoginTimeAttr($value)
    {
        return date('Y-m-d H:i',$value);
    }

    protected function getStatusTextAttr($value,$data)
    {
        $status = [-1=>'已删除',0=>'已禁用',1=>'启用',2=>'未审核'];
        return $status[$data['status']];
    }

    protected function getStatusClassAttr($value,$data)
    {
        $status = [-1=>'label-danger',0=>'label-warning',1=>'label-success',2=>'label-info'];
        return $status[$data['status']];
    }

    public function register($data = [])
    {
        $result = $this->validate(true)->allowField(true)->save($data);
        if ($result) {
            $uid = $data['uid'] = $this->getData('id');
            $res = model('User')->register($data);
            if($res){
                $this->roles()->attach(7);
                return $uid;
            }else{
                $map['id'] = $uid;
                $this->where($map)->delete();
                return false;
            }
        } else {
            return false;
        }
    }

    public function login($username,$email,$mobile,$password,$remember,$type)
    {
        $map = array();
        switch ($type) {
            case 1:
                $map['username'] = $username;
                break;
            case 2:
                $map['email'] = $email;
                break;
            case 3:
                $map['mobile'] = $mobile;
                break;
            case 4:
                $map['id'] = $username;
                break;
            default:
                return 0; //参数错误
        }
        $user = $this->where($map)->find();
        if(!$user){
            return -3;
        }

        if($user['status']==1){
            if (think_ucenter_md5($password, UC_AUTH_KEY) === $user['password']) {
                $this->updateLogin($user['id']); //更新用户登录信息
                $this->updateLog($user['id']);
                model('User')->login($user['id'],$remember==1);
                return $user['id']; //登录成功，返回用户ID
            } else {
                return -2; //密码错误
            }
        }else if($user['status']==2){
            return -4;
        }else{
            return -1;
        }
    }

    protected function updateLogin($uid)
    {
        $data = [
            'last_login_time' => time(),
            'last_login_ip' => request()->ip(),
            'login' => array('exp', '`login`+1'),
        ];
        $this->save($data,['id'=>$uid]);
    }

    protected function updateLog($uid)
    {
        $data = [
            'login_time' => time(),
            'ip' => request()->ip(),
            'user_id' => $uid
        ];
        Db::table('sys_login_log')->insert($data);
    }

    

}