<?php
namespace app\admin\controller;

use think\Controller;
use app\admin\Model\UcenterUser;
class Base extends Controller
{
    public function _initialize(){
        
        if(!is_login()){
            $this->redirect('admin/admin/login');
        }

        $user = UcenterUser::get(is_login(),'profile',true);

        $userself = $user->hidden(['password'])->toArray();
        $this->assign('userself',$userself);
    }

    public function _empty($method)
    {
        return $this->fetch('public/404');
    }
}
