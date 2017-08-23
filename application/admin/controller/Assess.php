<?php
namespace app\admin\controller;
use app\admin\controller\Base;
use app\admin\model\Member;
use think\Request;
use think\Db;

class Assess extends Base
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
        //
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

            //return json($data);

            $data['extends'] = [
                'base' => [
                    'history' => [
                        'checked' => $data['history']['checked'],
                        'other' => isset($data['history']['other'])?$data['history']['other']:0,
                        'other_text' => $data['history_other'],
                    ],
                    'ability' => [
                        'checked' => $data['ability'],
                        'other_text' => $data['ability_other'],
                    ],
                    'main_concern' => $data['main_concern'],
                    'present_speech' => $data['present_speech'],
                    'development' => [
                        'babbling' => $data['babbling'],
                        'first_word' => $data['first_word'],
                        'phrase' => $data['phrase'],
                        'is_stop' => $data['is_stop']
                    ]
                ]
            ];

            $user = new Members;
            $res = $user->allowField(true)->save($data);
            if($res){
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

        $stu = Member::get($id,'training');
        if($stu->training){
            $info = $stu->append(['update_name','status_class'])->toArray(); 
        }else{
            $info = $stu->append(['update_name','status_class'])->toArray();
        }
        
        return view('',['info'=>$info]);
    }

    /**
     * 显示编辑资源表单页.
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * 保存更新的资源
     *
     * @param  \think\Request  $request
     * @param  int  $id
     * @return \think\Response
     */
    public function updateBase(Request $request,$id)
    {
        if($request->isPost()){
            $data = $request->param();
            $report = Reports::get($id);
            $res = $report->save($data);
            if($res){
                $this->success('更新成功');
            }else{
                $this->error('更新失败');
            }
        }
        
    }

    public function updatePlan(Request $request,$id)
    {
        if($request->isPost()){
            $data = $request->param();
            $report = Reports::get($id);
            $plan['training_plan'] = [
                'content_a' => $data['content_a'],
                'content_b' => $data['content_b'],
                'content_c' => $data['content_c'],
                'content_d' => $data['content_d'],
            ];
            $res = $report->save($plan);
            if($res){
                $this->success('更新成功');
            }else{
                $this->error('更新失败');
            }
        }
        
    }

    public function updateBefore(Request $request,$id)
    {
        if($request->isPost()){
            $data = $request->param();
            $report = Reports::get($id);
            $plan['before_info'] = [
                'content_a' => $data['content_a'],
                'content_b' => $data['content_b'],
                'content_c' => $data['content_c'],
                'content_d' => $data['content_d'],
                'content_e' => $data['content_e'],
                'content_f' => $data['content_f'],
            ];
            $res = $report->save($plan);
            if($res){
                $this->success('更新成功');
            }else{
                $this->error('更新失败');
            }
        }
        
    }

    public function updateReportE(Request $request,$id)
    {
        if($request->isAjax()){
            $data['report_e'] = $request->param();
            $report = Reports::get($id);
            $res = $report->save($data);
            if($res){
                return ['status'=>1];
            }else{
                return ['status'=>0,'info'=>'错误'];
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