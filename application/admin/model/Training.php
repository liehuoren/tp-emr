<?php
namespace app\admin\model;

use think\Model;
use app\admin\model\Centers;
use app\admin\model\District;

class Training extends Model
{
    protected $table = "emr_training";

    protected $auto = ['update_uid'];

    protected $update = ['update_time'];

    protected $insert = ['create_time','status'=>2];

    protected $autoWriteTimestamp = true;

    protected $type = [
        'content' => 'json',
        'training_time' => 'timestamp:Y-m-d'
        
    ];

    public function member()
    {
        return $this->belongsTo('Member','stu_id','id');
    }

    protected function setUpdateUidAttr($value)
    {
        return is_login();
    }

    protected function getUpdateNameAttr($value,$data)
    {
        return model('User')->where('uid',$data['update_uid'])->cache(true)->value('fullname');
    }

    protected function getCheckNameAttr($value,$data)
    {
        $info = model('User')->where('uid',$data['check_uid'])->cache(true)->value('fullname');
        return $info?$info:'';
    }

    protected function getStatusAttr($value)
    {
        $status = [-1=>'已删除',0=>'审核不通过',1=>'通过审核',2=>'未审核'];
        return $status[$value];
    }

    protected function getStatusClassAttr($value,$data)
    {
        $status = [-1=>'danger',0=>'pink',1=>'success',2=>'warning'];
        return $status[$data['status']];
    }
}