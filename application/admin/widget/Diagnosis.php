<?php
namespace app\admin\widget;
use think\Controller;
use think\Db;
class Diagnosis extends Controller
{
    public function index($dia_id=0)
    {
        $list = Db::table('emr_medical_diagnosis')->order('sort asc')->select();
        $this->assign('dia_id',$dia_id);
        $this->assign('diagnosis',$list);
        return $this->fetch('widget/diagnosis');
    }
}