<?php
namespace app\admin\validate;

use think\Validate;

class Verify extends Validate
{
    protected $rule = [
        'email' => 'email',
        'mobile' => ['regex'=>'/^(13[0-9]|14[5|7|9]|15[0|1|2|3|5|6|7|8|9]|17[0|1|2|3|5|6|7|8|9]|18[0|1|2|3|5|6|7|8|9])\d{8}$/i']
    ];

    protected $message = [
        'email' => '邮箱格式错误',
        'mobile' => '手机号格式错误'
    ];

    protected $scene = [
        'email' => ['email'],
        'mobile' => ['mobile'],
    ];
}
?>