<?php
namespace app\admin\controller;

use think\Db;
use think\Request;
use app\admin\controller\Base;
use app\admin\model\Member as Members;
class Member extends Base
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index(Request $request,$p=1)
    {
        if($request->isPost()){
            if(!empty($request->param('name'))){
                $map['name'] = $request->param('name');
            }
            if(!empty($request->param('uuid'))){
                $map['uuid'] = $request->param('uuid');
            }
            if(!empty($request->param('mobile'))){
                $map['mobile'] = $request->param('mobile');
            }
            if(!empty($request->param('centers'))){
                $map['centers'] = $request->param('centers');
            } 
            
        }
        $map['status'] = array('egt',-1);
        $list = Members::where($map)->paginate(12);
        $list->append(['status_class','diagnosis_text']);
        return view('',['list'=>$list]);
    }

    /**
     * 显示创建资源表单页.
     *
     * @return \think\Response
     */
    public function create()
    {
        $underway = Db::table('stu_member_under_way')->cache(true)->select();
        $touchway = Db::table('stu_member_touch_way')->cache(true)->select();
        $history = Db::table('stu_member_extend_history')->cache(true)->select();
        $ability = Db::table('stu_member_extend_ability')->cache(true)->select();

        return view('',['underway'=>$underway,'touchway'=>$touchway,'history'=>$history,'ability'=>$ability]);
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
            $data = $request->param();
            $result = $this->validate($data,'Member');
            if(true !== $result){
                // 验证失败 输出错误信息
                $this->error($result);
            }

            $data['extends'] = [
                'base' => [
                    'history' => [
                        'checked' => isset($data['history']['checked'])?$data['history']['checked']:array(),
                        'other' => isset($data['history']['other'])?$data['history']['other']:0,
                        'other_text' => $data['history_other'],
                    ],
                    'ability' => [
                        'checked' => isset($data['ability'])?$data['ability']:array(),
                        'other_text' => $data['ability_other'],
                    ],
                    'main_concern' => $data['main_concern'],
                    'present_speech' => $data['present_speech'],
                    'development' => [
                        'babbling' => $data['babbling'],
                        'first_word' => $data['first_word'],
                        'phrase' => $data['phrase'],
                        'is_stop' => isset($data['is_stop'])?:''
                    ]
                ]
            ];

            $user = new Members;
            $res = $user->allowField(true)->save($data);
            if($res){
                $this->success('新增成功','admin/member/index');
            }else{
                $this->error('新增失败');
            }
        }
        
    }

    /**
     * 显示指定的资源
     *
     * @param  int $id
     * @return \think\Response
     */
    public function read($id=0)
    {
        $id = (int)$id;
        if(!$id){
            $this->error('查无此人');
        }

        $stu = Members::get($id);
        if(!$stu){
            $this->error('暂无此人或无权限查看');
        }
        $underway = Db::table('stu_member_under_way')->cache(true)->select();
        $touchway = Db::table('stu_member_touch_way')->cache(true)->select();
        $history = Db::table('stu_member_extend_history')->cache(true)->select();
        $ability = Db::table('stu_member_extend_ability')->cache(true)->select();

        
        
        $info = $stu->append(['update_name','check_name','status_class','diagnosis_text','problem_text','first_touch_text','first_under_text','history_text','ability_text'])->toArray();
        //dump($info);
        return view('',['info'=>$info,'underway'=>$underway,'touchway'=>$touchway,'history'=>$history,'ability'=>$ability]);
    }

    /**
     * 显示编辑资源表单页.
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function edit($id)
    {
        $id = (int)$id?$id:0;
        $stu = Members::get($id);
        if(!$stu){
            $this->error('查无此人');
        }
        $underway = Db::table('stu_member_under_way')->cache(true)->select();
        $touchway = Db::table('stu_member_touch_way')->cache(true)->select();
        $history = Db::table('stu_member_extend_history')->cache(true)->select();
        $ability = Db::table('stu_member_extend_ability')->cache(true)->select();

        
        $info = $stu->append(['update_name','check_name','status_class'])->toArray();
        return view('',['info'=>$info,'underway'=>$underway,'touchway'=>$touchway,'history'=>$history,'ability'=>$ability]);
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
        $id = (int)$id;
        if($request->isPost()){
            $data = $request->param();
            $result = $this->validate($data,'Member');
            if(true !== $result){
                // 验证失败 输出错误信息
                $this->error($result);
            }

            //return json($data);

            $data['extends'] = [
                'base' => [
                    'history' => [
                        'checked' => isset($data['history']['checked'])?$data['history']['checked']:array(),
                        'other' => isset($data['history']['other'])?$data['history']['other']:0,
                        'other_text' => $data['history_other'],
                    ],
                    'ability' => [
                        'checked' => isset($data['ability'])?$data['ability']:array(),
                        'other_text' => $data['ability_other'],
                    ],
                    'main_concern' => $data['main_concern'],
                    'present_speech' => $data['present_speech'],
                    'development' => [
                        'babbling' => $data['babbling'],
                        'first_word' => $data['first_word'],
                        'phrase' => $data['phrase'],
                        'is_stop' => isset($data['is_stop'])?:''
                    ]
                ]
            ];

            $stu = Members::get($id);
            $res = $stu->allowField(true)->save($data);
            if($res){
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
        $id = (int)$id;
        $stu = Members::get($id);
        $res = $stu->save(['status'=>-1,'check_uid'=>is_login()]);
        if($res){
            $this->success('更新成功');
        }else{
            $this->error('更新失败');
        }
    }

    public function setStatus($id=0,$status=0)
    {
        $id = (int)$id;
        $status = (int)$status;
        if($status<0){
            $this->error('更新失败');
        }

        $stu = Members::get($id);
        
        $res = $stu->save(['status'=>$status,'check_uid'=>is_login()]);
        if($res){
            $this->success('更新成功');
        }else{
            $this->error('更新失败');
        }
    }

}
