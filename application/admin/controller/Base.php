<?php
namespace app\admin\controller;

use think\Controller;
use think\Db;
use app\admin\model\Role;

use app\admin\Model\UcenterUser;
class Base extends Controller
{
    public function _initialize(){
        
        if(!is_login()){
            $this->redirect('admin/admin/login');
        }
        
        
        $user = UcenterUser::get(is_login(),'profile,roles');

        $rule = strtolower(request()->module().'/'.request()->controller().'/'.request()->action());

        if(get_role()!=1){
            if(strtolower(request()->controller())!=='config'){
                $role = Role::get(get_role());
                $map['id'] = array('in',$role['rules']);
                $map['status'] = array('eq',1);
                $auth = Db::table('sys_role_rule')->where($map)->cache(false)->column('name');
                $authlist = array();
                foreach ($auth as $k => $v) {
                    $authlist[] = strtolower($v);
                }
                if(!in_array($rule,$authlist)){
                    $this->error("无权访问");
                }
            }
        }
        
        $userself = $user->hidden(['password'])->toArray();
        $this->assign('userself',$userself);
    }

    public function _empty($method)
    {
        return $this->fetch('public/404');
    }
}
