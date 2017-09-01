<?php
namespace app\admin\controller;
use think\Request;
use app\admin\controller\Base;
use app\admin\model\Member;
use app\admin\model\Report;
use app\admin\model\Training;
use app\admin\model\Evaluation;

class Index extends Base
{
    public function index()
    {   
        return view();
        
    }

    public function memberList()
    {
        if(in_array(get_role(),['1','2','3'])){

        }else if(in_array(get_role(),['4','6'])){
            $group_id = Db::table('user_group')->where('uid',is_login())->value('group_id');
            if($group_id){
                $map['update_uid'] = array('in',$group_id);
            }else{
                $map['update_uid'] = array('eq',is_login());
            }
        }else if(in_array(get_role(),['5','7'])){
            $map['update_uid'] = array('eq',is_login());
        }
        $map['status'] = array('in','0,2');
        $request = request()->param();
        $page = ($request['offset']/$request['limit'])+1;
        $list = Member::where($map)->field('id,name,update_time,update_uid,status')->order('update_time desc')->paginate(['page'=>$page,'list_rows' => 10]);
        $list->append(['update_name']);
        return $list;
    }

    public function reportList()
    {
        if(in_array(get_role(),['1','2','3'])){

        }else if(in_array(get_role(),['4','6'])){
            $group_id = Db::table('user_group')->where('uid',is_login())->value('group_id');
            if($group_id){
                $map['update_uid'] = array('in',$group_id);
            }else{
                $map['update_uid'] = array('eq',is_login());
            }
        }else if(in_array(get_role(),['5','7'])){
            $map['update_uid'] = array('eq',is_login());
        }
        $map['status'] = array('in','0,2');
        $request = request()->param();
        $page = ($request['offset']/$request['limit'])+1;
        $list = Report::where($map)->field('id,stu_id,update_time,update_uid,status')->order('update_time desc')->paginate(['page'=>$page,'list_rows' => 10]);
        $list->append(['name','update_name']);
        return $list;
    }

    public function trainingList()
    {
        if(in_array(get_role(),['1','2','3'])){

        }else if(in_array(get_role(),['4','6'])){
            $group_id = Db::table('user_group')->where('uid',is_login())->value('group_id');
            if($group_id){
                $map['update_uid'] = array('in',$group_id);
            }else{
                $map['update_uid'] = array('eq',is_login());
            }
        }else if(in_array(get_role(),['5','7'])){
            $map['update_uid'] = array('eq',is_login());
        }
        $map['status'] = array('in','0,2');
        $request = request()->param();
        $page = ($request['offset']/$request['limit'])+1;
        $list = Training::where($map)->field('id,stu_id,update_time,update_uid,status')->order('update_time desc')->paginate(['page'=>$page,'list_rows' => 10]);
        $list->append(['name','update_name']);
        return $list;
    }

    public function evaluationList()
    {
        if(in_array(get_role(),['1','2','3'])){

        }else if(in_array(get_role(),['4','6'])){
            $group_id = Db::table('user_group')->where('uid',is_login())->value('group_id');
            if($group_id){
                $map['update_uid'] = array('in',$group_id);
            }else{
                $map['update_uid'] = array('eq',is_login());
            }
        }else if(in_array(get_role(),['5','7'])){
            $map['update_uid'] = array('eq',is_login());
        }
        $map['status'] = array('in','0,2');
        $request = request()->param();
        $page = ($request['offset']/$request['limit'])+1;
        $list = Evaluation::where($map)->field('id,stu_id,update_time,update_uid,status')->order('update_time desc')->paginate(['page'=>$page,'list_rows' => 10]);
        $list->append(['name','update_name']);
        return $list;
    }

}
