<?php
namespace app\admin\controller;

use think\Request;
use think\Db;
use app\admin\controller\Base;
use app\admin\model\Log;
class Config 
{
    //获取中国省份信息
    public function getProvince(){
        if (Request::instance()->isAjax()){
            $request = Request::instance();
            $pid = $request->post('pid');  //默认的省份id

            if( !empty($pid) ){
                //$map['id'] = $pid;
            }
            $map['level'] = 1;
            $map['upid'] = 0;
            $list = Db::table('emr_district')->where($map)->cache(true)->order('id asc')->select();
            $data = "<option value =''>-省份-</option>";
            foreach ($list as $k => $vo) {
                $data .= "<option ";
                if( $pid == $vo['id'] ){
                    $data .= " selected ";
                }
                $data .= " value ='" . $vo['id'] . "'>" . $vo['name'] . "</option>";
            }
            return $data;
        }
    }

    //获取城市信息
    public function getCity(){
        if (Request::instance()->isAjax()){
            $request = Request::instance();
            $pid = $request->post('pid');
            $cid = $request->post('cid');

            if( empty($pid) ){
                //$map['id'] = $cid;
                $data = "<option value =''>-城市-</option>";
                return $data;
            }
            $map['level'] = 2;
            $map['upid'] = $pid;

            $list = Db::table('emr_district')->where($map)->cache(true)->order('id asc')->select();

            $data = "<option value =''>-城市-</option>";
            foreach ($list as $k => $vo) {
                $data .= "<option ";
                if( $cid == $vo['id'] ){
                    $data .= " selected ";
                }
                $data .= " value ='" . $vo['id'] . "'>" . $vo['name'] . "</option>";
            }
            return $data;
        }
    }

    //获取区县市信息
    public function getDistrict(){
        if (Request::instance()->isAjax()){
            $request = Request::instance();
            $did = $request->post('did');
            $cid = $request->post('cid');

            if( empty($cid) ){
                //$map['id'] = $did;
                $data = "<option value =''>-州县-</option>";
                return $data;
            }
            $map['level'] = 3;
            $map['upid'] = $cid;

            $list = Db::table('emr_district')->where($map)->cache(true)->order('id asc')->select();

            $data = "<option value =''>-州县-</option>";
            foreach ($list as $k => $vo) {
                $data .= "<option ";
                if( $did == $vo['id'] ){
                    $data .= " selected ";
                }
                $data .= " value ='" . $vo['id'] . "'>" . $vo['name'] . "</option>";
            }
            return $data;
        }
    }

    public function log($p=1)
    {
        $list = Log::where('login_time','>','0')->order('id desc')->paginate();
        return view('',['list'=>$list]);
    }
}
?>