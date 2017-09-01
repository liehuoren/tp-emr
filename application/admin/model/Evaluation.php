<?php
namespace app\admin\model;

use think\Model;
use think\Db;
use app\admin\model\Centers;
use app\admin\model\District;

class Evaluation extends Model
{
    protected $table = "emr_periodic_evaluation";

    protected $auto = ['update_uid'];

    protected $update = ['update_time'];

    protected $insert = ['create_time','status'=>2];

    protected $autoWriteTimestamp = true;

    protected $type = [
        'content' => 'json',
        'assess_time' => 'timestamp:Y-m-d H:i'
    ];

    public function member()
    {
        return $this->belongsTo('Member','stu_id','id');
    }

    public function memberBase()
    {
        return $this->belongsTo('Member','stu_id','id')->field('id,uuid,name,sex,birthday,avatar,diagnosis');
    }

    protected function setUpdateUidAttr($value)
    {
        return is_login();
    }

    protected function getNameAttr($value,$data)
    {
        return model('Member')->where('id',$data['stu_id'])->cache(true)->value('name');
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