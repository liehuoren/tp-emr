<?php
namespace app\admin\widget;
use think\Controller;
use think\Db;
class Problem extends Controller
{
    public function index($pro_id=0)
    {
        $list = Db::table('emr_speech_problem')->order('sort asc')->select();
        $this->assign('pro_id',$pro_id);
        $this->assign('problem',$list);
        return $this->fetch('widget/problem');
    }
}