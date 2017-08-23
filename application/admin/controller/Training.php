<?php
namespace app\admin\controller;
use app\admin\controller\Base;
use app\admin\model\Member;
use think\Request;
use app\admin\model\Training as trainings;

class Training extends Base
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

        $info = $stu->visible(['id','avatar','name','uuid','sex','birthday'])->toArray();
        return view('',['info'=>$info]);

    }

    public function list($types=1,$id)
    {
        $id = (int)$id;
        $types = (int)$types;
        $stu = Member::get($id,true);
        if(!$stu){
            return null;
        }

        $request = request()->param();
        $page = ($request['offset']/$request['limit'])+1;
        $map['stu_id'] = $id;
        $map['type'] = $types;
        $list = Trainings::where($map)->where('status','>','-1')->order('training_time desc')->paginate(['page'=>$page,'list_rows' => 20]);
        
        
        return $list;
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
            $res = Trainings::create($data);
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
        //
    }

    /**
     * 保存更新的资源
     *
     * @param  \think\Request  $request
     * @param  int  $id
     * @return \think\Response
     */
    public function update(Request $request)
    {
        if($request->isPost()){
            $id = $request->param('pk');
            $name = $request->param('name');
            $value = $request->param('value');
            $training = Trainings::get($id);

            if(substr_count($name,"content")>0){
                $names = explode(".",$name);
                $data['content'][$names[1]] = $value;
            }else{
                $data[$name] =$value;
            }

            $res = $training->save($data);
            
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
        if(!is_array($id)){
            return false;
        }
        $res = Trainings::where('id','in',$id)->update([
            'status' => -1,
            'check_uid' => is_login()
            ]);
        if($res){
            return true;
        }else{
            return false;
        }
    }

    public function setStatus($id,$status=0)
    {
        if(!is_array($id)){
            return false;
        }
        $status = (int)$status;
        if($status<0){
            return false;
        }
        
        $res = Trainings::where('id','in',$id)->update([
            'status' => $status,
            'check_uid' => is_login()
            ]);
        if($res){
            return true;
        }else{
            return false;
        }
    }
}