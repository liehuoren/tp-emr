<?php
namespace app\admin\validate;

use think\Validate;

class User extends Validate
{
    protected $rule = [
        'fullname' => 'chsDash|length:2,25',
        'nickname' => 'chsDash|length:2,25|unique:user',
        
    ];

    protected $message = [
        'fullname.chsDash' => '姓名只能包含汉字、字母和数字',
        'fullname.length' => '姓名的长度必须在2至25位之间',
        'nickname.chsDash' => '昵称只能包含汉字、字母、数字和下划线_及破折号-',
        'nickname.length' => '昵称的长度必须在2至25位之间',
        'nickname.unique' => '昵称已被占用'
    ];

    protected $scene = [
        'edit' => ['fullname','nickname'=>'chsDash|length:2,25|unique:user,nickname^uid'],
    ];
}
?>