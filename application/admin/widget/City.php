<?php
namespace app\admin\widget;
use think\Controller;
class City extends Controller
{
    public function index($pid,$cid,$did)
    {
        if($pid!=null){
            $this->assign([
                'pid'=>$pid['id'],
                'cid'=>$cid['id'],
                'did'=>$did['id']
            ]);
        }else{
            $this->assign([
                'pid'=>0,
                'cid'=>0,
                'did'=>0
            ]);
        }
        return $this->fetch('widget/city');
    }
}