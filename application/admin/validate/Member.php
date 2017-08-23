<?php
namespace app\admin\validate;

use think\Validate;

class Member extends Validate
{
    protected $regex = [ 'mobile' => '/^(13[0-9]|14[5|7|9]|15[0|1|2|3|5|6|7|8|9]|17[0|1|2|3|5|6|7|8|9]|18[0|1|2|3|5|6|7|8|9])\d{8}$/i'];

    protected $rule = [
        'name' => 'chsAlpha|length:2,25',
        'birthday' => 'require',
        'mobile' => 'regex:mobile',
    ];

    protected $message = [
        'name.chsAlpha' => '学员姓名格式不正确',
        'name.length' => '学员姓名长度必须在2-25位之间',
        'birthday.require' => '出生年月日必须填写',
        'mobile.regex' => '手机号格式不正确'
        
    ];

    protected $scene = [
        
    ];
}
?>