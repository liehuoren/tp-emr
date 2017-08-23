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
        if(in_array(get_role(),['1'])){

            return view();
        }
        
    }

    public function memberList()
    {
        $map['status'] = array('in','0,2');
        $request = request()->param();
        $page = ($request['offset']/$request['limit'])+1;
        $list = Member::where($map)->field('id,name,update_time,update_uid,status')->order('update_time desc')->paginate(['page'=>$page,'list_rows' => 20]);
        $list = $list->append(['update_name']);
        return $list;
    }

}
