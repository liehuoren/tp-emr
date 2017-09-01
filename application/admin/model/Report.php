<?php
namespace app\admin\model;

use think\Model;
use think\Db;
use app\admin\model\Centers;
use app\admin\model\District;

class Report extends Model
{
    protected $table = "emr_assess_report";

    protected $auto = ['update_uid'];

    protected $update = ['update_time'];

    protected $insert = ['create_time','status'=>2];

    protected $autoWriteTimestamp = true;

    protected $type = [
        'report_a' => 'json',
        'report_b' => 'json',
        'report_c' => 'json',
        'report_d' => 'json',
        'report_e' => 'json',
        'before_info' => 'json',
        'training_plan' => 'json',
        'summary' => 'json',
        'course' => 'json',
        'assess_time' => 'timestamp:Y-m-d H:i'
    ];

    public function member()
    {
        return $this->belongsTo('Member','stu_id','id');
    }

    public function memberBase()
    {
        return $this->belongsTo('Member','stu_id','id')->field('id,uuid,name,sex,birthday,avatar');
    }

    protected function setUpdateUidAttr($value)
    {
        return is_login();
    }

    protected function setDiagnosisAttr($value)
    {
        return implode(',',$value);
    }

    protected function setProblemAttr($value)
    {
        return implode(',',$value);
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

    protected function getDiagnosisTextAttr($value,$data)
    {
        $map['id'] = array('in',$data['diagnosis']);
        $list = Db::table('emr_medical_diagnosis')->where($map)->order('sort asc')->column('cn_name');
        return implode(',', $list);
    }

    protected function getProblemTextAttr($value,$data)
    {
        $map['id'] = array('in',$data['diagnosis']);
        $list = Db::table('emr_speech_problem')->where($map)->order('sort asc')->column('cn_name');
        return implode(',', $list);
    }



    
}