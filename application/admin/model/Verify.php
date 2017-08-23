<?php
namespace app\admin\model;

use think\Model;

class Verify extends Model
{
    protected $table = 'sys_verify';

    protected $insert = ['uid', 'create_time'];

    protected function setUidAttr($value)
    {
        return is_login()?is_login():0;
    }

    protected function setCreateTimeAttr($value)
    {
        return time();
    }

    public function sendVerify($account,$type,$scene)
    {
        $map['account'] = $account;
        $map['type'] = $type;
        $this->where($map)->delete();

        $verify = create_rand(6, 'num');

        $result = $this->save([
            'account' => $account,
            'type' => $type,
            'verify' => $verify
        ]);
        if(false===$result){
            return false;
        }else{
            session('verify_time',request()->time());
            switch ($scene) {
                case 0:
                    $title = '注册验证';
                    $content = '欢迎注册启音言语电子病历管理平台账号，您的验证码为：';
                    break;
                case 1:
                    $title = '找回密码';
                    $content = '您正在进行找回密码操作，打死不要告诉别人验证码，您的验证码为：';
                    break;
                default:
                    $title = '注册验证';
                    $content = '欢迎注册启音言语电子病历管理平台账号，您的验证码为：';
                    break;
            }
            if($type=='email'){
                send_mail($account,$title,'启音言语科技',$content.$verify);
            }
            return true;
        }
    }

    public function checkVerify($account,$type,$verify,$uid=0)
    {
        $map = [
            'account' => $account,
            'type' => $type,
            'verify' => $verify,
            'uid' => $uid
        ];
        $result = $this->where($map)->find();

        $maps = [
            'account' => $account,
            'type' => $type
        ];
        $this->where($maps)->delete();
        if($result!=false&&$result['create_time']<time()-900){
            return true;
        }
        return false;
        
    }
}