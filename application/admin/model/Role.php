<?php
namespace app\admin\model;

use think\Model;

class Role extends Model
{
    protected $table = "sys_role";

    public function user()
    {
        return $this->belongsToMany('UcenterUser','auth','uid','role_id');
    }

    protected function getStatusTextAttr($value,$data)
    {
        $status = [-1=>'已删除',0=>'已禁用',1=>'启用'];
        return $status[$data['status']];
    }

    protected function getStatusClassAttr($value,$data)
    {
        $status = [-1=>'label-danger',0=>'label-warning',1=>'label-success'];
        return $status[$data['status']];
    }

    
}