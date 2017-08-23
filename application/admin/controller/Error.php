<?php
namespace app\admin\controller;

class Error
{
    public function _empty($method)
    {
        return view('public/404');
    }
}
?>