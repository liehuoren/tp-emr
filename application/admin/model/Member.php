<?php
namespace app\admin\model;

use think\Model;
use think\Db;
use app\admin\model\Centers;
use app\admin\model\District;

class Member extends Model
{
    protected $table = "stu_member";

    protected $auto = ['update_uid'];

    protected $update = ['update_time'];

    protected $insert = ['uuid','reg_time','create_time','status'=>2];

    protected $autoWriteTimestamp = true; 

    public function report()
    {
        return $this->hasMany('Report','stu_id','id');
    }

    public function reportBase()
    {
        return $this->hasMany('Report','stu_id','id')->field('id,assess_time,assess_address,t_name,status,update_time,update_uid,check_uid,diagnosis,problem')->order('assess_time desc');
    }

    public function evaluation()
    {
        return $this->hasMany('Evaluation','stu_id','id');
    }

    public function evaluationBase()
    {
        return $this->hasMany('Evaluation','stu_id','id')->order('assess_time desc');
    }

    public function training()
    {
        return $this->hasMany('Training','stu_id','id');
    }

    public function trainingType($type)
    {
        return $this->hasMany('Training','stu_id','id')->where('type',$type);
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

    protected function setExtendsAttr($value,$data)
    {
        return json_encode($value);
    }

    protected function setUuidAttr($value)
    {
        return time().is_login();
    }

    protected function setRegTimeAttr($value)
    {
        return strtotime($value)!==false?strtotime($value):$value;
    }

    protected function setBirthdayAttr($value)
    {
        return strtotime($value)!==false?strtotime($value):$value;
    }

    protected function getExtendsAttr($value,$data)
    {
        return json_decode($value,true);
    }

    protected function getUpdateNameAttr($value,$data)
    {
        return model('User')->where('uid',$data['update_uid'])->cache(true)->value('fullname');
    }

    protected function getCheckNameAttr($value,$data)
    {
        $info = model('User')->where('uid',$data['check_uid'])->cache(true)->value('fullname');
        return $info?$info:'未审核';
    }

    protected function getRegTimeAttr($value)
    {
        return date('Y-m-d',$value);
    }

    protected function getBirthdayAttr($value)
    {
        return date('Y-m-d',$value);
    }

    protected function getSexAttr($value)
    {
        $data = [0=>'未知',1=>'男',2=>'女'];
        return $data[$value];
    }
    protected function getIsPayAttr($value)
    {
        $data = [0=>'未知',1=>'是',2=>'否'];
        return $data[$value];
    }

    protected function getAvatarAttr($value,$data)
    {
        if($value==null){
            if($data['sex']==1){
                return "__IMG__/profile/11.png";
            }else{
                return "__IMG__/profile/12.png";
            }
        }else{
            return "__IMG__/profile/11.png";
        }
    }

    protected function getCentersAttr($value)
    {
        if($value>0){
            $centers = Centers::get($value,true);
            return $centers->visible(['id','name'])->toArray();
        }else{
            $centers = ['id'=>0,'name'=>''];
            return $centers;
        }
    }

    protected function getPosProvinceAttr($value)
    {
        if($value>0){
            $res = District::get($value,true);
            return $res->visible(['id','name'])->toArray();
        }else{
            $res = ['id'=>0,'name'=>''];
            return $res;
        }
    }

    protected function getPosCityAttr($value)
    {
        if($value>0){
            $res = District::get($value,true);
            return $res->visible(['id','name'])->toArray();
        }else{
            $res = ['id'=>0,'name'=>''];
            return $res;
        }
    }

    protected function getPosDistrictAttr($value)
    {
        if($value>0){
            $res = District::get($value,true);
            return $res->visible(['id','name'])->toArray();
        }else{
            $res = ['id'=>0,'name'=>''];
            return $res;
        }
    }

    protected function getStatusAttr($value)
    {
        $status = [-1=>'已删除',0=>'审核不通过',1=>'通过审核',2=>'未审核'];
        return $status[$value];
    }

    protected function getStatusClassAttr($value,$data)
    {
        $status = [-1=>'danger',0=>'pink',1=>'mint',2=>'warning'];
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

    protected function getFirstUnderTextAttr($value,$data)
    {
        $info = Db::table('stu_member_under_way')->where('id',$data['first_under'])->cache(true,1)->value('name');
        return $info;
    }

    protected function getFirstTouchTextAttr($value,$data)
    {
        $info = Db::table('stu_member_touch_way')->where('id',$data['first_touch'])->cache(true,1)->value('name');
        return $info;
    }

    protected function getHistoryTextAttr($value,$data)
    {

        $extends = json_decode($data['extends'],true);
        $map['id'] = array('in',$extends['base']['history']['checked']);
        $res = Db::table('stu_member_extend_history')->where($map)->cache(true)->column('cn_name');
        $info = implode(',', $res);
        if($extends['base']['history']['other']){
            $info .= ','.$extends['base']['history']['other_text'];
        }
        return $info;
    }

    protected function getAbilityTextAttr($value,$data)
    {

        $extends = json_decode($data['extends'],true);
        $map['id'] = array('in',$extends['base']['ability']['checked']);
        $res = Db::table('stu_member_extend_ability')->where($map)->cache(true)->column('cn_name');
        $info = implode(',', $res);
        if($extends['base']['ability']['other_text']){
            $info .= ','.$extends['base']['ability']['other_text'];
        }
        return $info;
    }



}