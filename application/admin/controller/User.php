<?php
namespace app\admin\controller;
use app\admin\controller\Base;
use app\admin\model\UcenterUser;
use app\admin\model\Role;
use think\Request;

class User extends Base
{
    public function index($p=1,$status=1,$role=0)
    {

        $list = UcenterUser::with(['profile','roles'])->where('status','>=',-1)->field('id,email,last_login_time,status')->cache(true)->paginate();
        $list->hidden(['roles'=>['description','rules','pivot']])->append(['status_text','status_class']);

        return view('',['list'=>$list]);
    }

    public function edit($id)
    {
        $id = (int)$id;
        $info = UcenterUser::get($id,'profile,roles',true);
        if(!$info){
            $this->error('不存在该用户');
        }
        $role = Role::all();

        $user = $info->hidden(['password','roles'=>['description','rules','pivot']])->toArray();
        return view('',['info'=>$user,'role'=>$role->visible(['id','name'])->toArray()]);
    }

    public function doEdit(Request $request,$id)
    {
        if($request->isPost()){

            $data = $request->param();

            $user = UcenterUser::get($id);
            
            $user->roles()->detach();
            $res = $user->roles()->attach($data['role']);
            $res1 = $user->profile->allowField('true')->save($data);
            if($res||$res1){
                $this->success('更新成功');
            }else{
                $this->error('更新失败');
            }
        }

    }

    public function setting()
    {
        return view();
    }

    public function profile(){
        return view();
    }

    public function profileEdit(Request $request){
        if($request->isPost()){
            $data = $request->param();
            $data['uid'] = is_login();
            $result = $this->validate($data,'User.edit');
            if(true !== $result){
                // 验证失败 输出错误信息
                $this->error($result);
            }

            $user = UcenterUser::get($data['uid']);

            $res = $user->profile->save($data);
            if($res > 0){
                $this->success('更新成功','admin/user/profile');
            }else{
                $this->error('更新失败');
            }
        }
    }

    public function repassword(Request $request){
        if($request->isPost()){
            $data = $request->param();
            $result = $this->validate($data,'UcenterUser.password');
            if(true !== $result){
                // 验证失败 输出错误信息
                $this->error($result);
            }
            $uid = is_login();
            if($data['password']!=$data['repassword']){
                $this->error('两次密码输入不一致');
            }

            $user = UcenterUser::get($uid);
            $password = $user->password;
            if(think_ucenter_md5($data['oldpassword'], UC_AUTH_KEY) !== $password){
                $this->error('原密码不正确');
            }
            $res = $user->allowField(['password'])->save($data);
            if($res > 0){
                $this->success('更新成功','admin/user/profile');
            }else{
                $this->error('更新失败');
            }

        }
    }

}
