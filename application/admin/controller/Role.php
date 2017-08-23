<?php
namespace app\admin\controller;
use think\Request;
use think\Db;
use app\admin\controller\Base;
use app\admin\model\Role as Roles;
class Role extends Base
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
        $list = Roles::all();
        return view('',['list'=>$list->append(['status_text','status_class'])->toArray()]);
    }

    /**
     * 显示创建资源表单页.
     *
     * @return \think\Response
     */
    public function create()
    {
        return view();
    }

    public function createAuth(){
        return view('role/create-auth');
    }

    /**
     * 保存新建的资源
     *
     * @param  \think\Request  $request
     * @return \think\Response
     */
    public function save(Request $request)
    {
        if($request->isPost()){
            $result = Roles::create($request->param()); 
            if($result){
                $this->success('新增成功');
            }else{
                $this->error('新增失败');
            }
        }
    }

    /**
     * 显示指定的资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function read($id)
    {
        //
    }

    /**
     * 显示编辑资源表单页.
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function edit($id)
    {
        $aid = (int)$id;
        $info = Roles::get($aid);
        if($info==null){
            $this->error('不存在该角色');
        }
        $rules = Db::table('sys_role_rule')->select();
        return view('',['info'=>$info->toArray(),'rules'=>$rules->toArray()]);
    }

    /**
     * 保存更新的资源
     *
     * @param  \think\Request  $request
     * @param  int  $id
     * @return \think\Response
     */
    public function update(Request $request, $id)
    {
        if($request->isPost()){
            $role = Roles::get($id);
            $data = $request->param();
            if(!empty($data['rules'])){
                $data['rules'] = implode(',', $data['rules']);
            }
            $result = $role->save($data); 
            if($result){
                $this->success('更新成功');
            }else{
                $this->error('更新失败');
            }
        }
        
    }

    /**
     * 删除指定资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function delete($id)
    {
        //
    }

}
