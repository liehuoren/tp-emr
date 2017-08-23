<?php
namespace app\admin\model;

use think\Model;
use app\admin\model\UcenterUser;

class Log extends Model
{
    protected $table = "sys_login_log";

    protected function getLoginTimeAttr($value)
    {
        return date('Y-m-d H:i:s',$value);
    }

    protected function getUserAttr($value,$data)
    {
        $user = UcenterUser::get($data['user_id'],'profile',true);
        $data = $user->visible(['email','profile'=>['nickname','fullname']])->toArray();
        return $data;
    }
}