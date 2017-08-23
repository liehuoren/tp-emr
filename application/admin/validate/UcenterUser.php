<?php
namespace app\admin\validate;

use think\Validate;

class UcenterUser extends Validate
{
    protected $regex = [ 'mobile' => '/^(13[0-9]|14[5|7|9]|15[0|1|2|3|5|6|7|8|9]|17[0|1|2|3|5|6|7|8|9]|18[0|1|2|3|5|6|7|8|9])\d{8}$/i'];

    protected $rule = [
        'username' => 'chsAlpha|length:2,25|unique:ucenter_user',
        'email' => 'email|unique:ucenter_user',
        'mobile' => 'regex:mobile|unique:ucenter_user',
        'password' => 'require|length:6,32',
        
    ];

    protected $message = [
        'username.chsAlpha' => '用户名格式不正确',
        'username.length' => '用户名的长度必须在2至25位之间',
        'username.unique' => '用户名已被占用',
        'email' => '邮箱格式不正确',
        'email.unique' => '该邮箱已注册',
        'mobile.regex' => '手机号格式不正确',
        'mobile.unique' => '该手机号已注册',
        'password.require' => '密码必须填写',
        'password.length' => '密码长度必须在6至32位之间'
    ];

    protected $scene = [
        'username' => ['username','password'],
        'email' => ['email','password'],
        'mobile' => ['mobile','password'],
        'repassword' => ['password'],
    ];
}
?>