<?php
namespace app\admin\controller;
use app\admin\controller\Base;
use app\admin\model\UcenterUser;
use app\admin\model\Role;
use app\admin\model\User as Users;
use think\Request;
use think\Db;

class User extends Base
{
    public function index($p=1,$status=1,$role=0)
    {

        $list = UcenterUser::with(['profile','roles'])->where('status','>=',-1)->field('id,email,last_login_time,status')->cache(false)->paginate();
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
            $res2 = $user->save(['status'=>$data['status']]);
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

    public function indexGroup()
    {
        $list = Db::table('sys_user_group')->where('status','>',0)->select();
        $list = $list->toArray();
        foreach($list as &$v){
            $v['name'] = Users::where('uid',$v['uid'])->value('fullname');
            $group_id = explode(',', $v['group_id']);
            $group_name = array();
            foreach ($group_id as $vv) {
                $group_name[] = Users::where('uid',$vv)->value('fullname');
            }
            $v['group_name'] = implode(',', $group_name);
        }
        unset($v);

        return view('index-group',['list'=>$list]);
    }

    public function createGroup()
    {
        $list = UcenterUser::with(['profile','roles'])->where('status','>=',0)->field('id,status')->cache(true)->select();
        $lists = $list->visible(['id','profile'=>['fullname'],'roles'=>['id','name']])->toArray();
        return view('create-group',['list'=>$lists]);
    }

    public function saveGroup(Request $request)
    {
        if($request->isPost()){
            $data = $request->param();
            $data['group_id'] = implode(',',$data['group_id']);
            $res = Db::table('sys_user_group')->insert($data);
            if($res){
                $this->success('新建小组成功');
            }else{
                $this->error('新建小组失败');
            }
        }
    }

    public function editGroup($id)
    {
        $user_group = Db::table('sys_user_group')->where('id',$id)->find();

        $list = UcenterUser::with(['profile','roles'])->where('status','>=',0)->field('id,status')->cache(true)->select();
        $lists = $list->visible(['id','profile'=>['fullname'],'roles'=>['id','name']])->toArray();
        return view('edit-group',['list'=>$lists,'user'=>$user_group]);
    }

    public function updateGroup(Request $request,$id)
    {
        if($request->isPost()){
            $data = $request->only(['group_id','status']);
            $data['group_id'] = implode(',',$data['group_id']);
            $res = Db::table('sys_user_group')->where('id',$id)->update($data);
            if($res){
                $this->success('更新小组成功');
            }else{
                $this->error('更新小组失败');
            }
        }
    }

}
