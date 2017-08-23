<?php
namespace app\admin\widget;
use think\Controller;
use app\admin\model\Centers;
class Center extends Controller
{
    public function index($centers_id=0)
    {

        $this->assign('centers_id',$centers_id);
        $centers_list = Centers::all(function($query){
            $query->where('status',1)->field('id,name')->order('sort','asc');
        },true);
        $this->assign('centers_list',$centers_list->toArray());
        
        return $this->fetch('widget/center');
    }
}