<?php
namespace app\admin\controller;

use think\Controller;
use think\Request;
use think\Db;
use app\admin\controller\Base;
use app\admin\model\Member;
use app\admin\model\Evaluation as Evaluations;

class Evaluation extends Base
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index($id)
    {
        $id = (int)$id;
        $stu = Member::get($id,true);
        if(!$stu){
            $this->error('查无此人');
        }

        $reports = $stu->evaluationBase->append(['update_name','check_name'])->toArray();

        $info = $stu->visible(['id','name','uuid','sex','birthday','avatar'])->append(['diagnosis_text'])->toArray();
        return view('',['info'=>$info,'reports'=>$reports]);
    }

    /**
     * 显示创建资源表单页.
     *
     * @return \think\Response
     */
    public function create()
    {
        //
    }

    /**
     * 保存新建的资源
     *
     * @param  \think\Request  $request
     * @return \think\Response
     */
    public function save(Request $request)
    {
        if($request->isAjax()){
            $data = $request->param();
            if(!isset($data['content']['therapy_effect'])){
                $data['content']['therapy_effect'] = '';
            }
            if(!isset($data['content']['home_therapy'])){
                $data['content']['home_therapy'] = '';
            }
            if(!isset($data['content']['feedback'])){
                $data['content']['feedback'] = '';
            }
            $res = Evaluations::create($data);
            if($res){
                return true;
            }else{
                return false;
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
        
        
    }

    /**
     * 显示编辑资源表单页.
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function edit($id)
    {
        $id = (int)$id;
        $report = Evaluations::get($id);
        if(!$report){
            $this->error('查无此人');
        }
        $info = $report->memberBase->append(['diagnosis_text'])->toArray();

        $reports = $report->append(['update_name','check_name'])->toArray();

        return view('',['info'=>$info,'report'=>$reports]);
    }

    /**
     * 保存更新的资源
     *
     * @param  \think\Request  $request
     * @param  int  $id
     * @return \think\Response
     */
    public function update(Request $request,$id)
    {
        if($request->isPost()){
            $data = $request->param();
            $report = Evaluations::get($id);
            $res = $report->save($data);
            if($res){
                return true;
            }else{
                return false;
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

        $report = Evaluations::get($id);
        
        $res = $report->save(['status'=>$status,'check_uid'=>is_login()]);
        if($res){
            $this->success('更新成功');
        }else{
            $this->error('更新失败');
        }
    }
}
