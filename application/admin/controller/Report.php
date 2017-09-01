<?php
namespace app\admin\controller;

use think\Controller;
use think\Request;
use think\Db;
use app\admin\controller\Base;
use app\admin\model\Member;
use app\admin\model\Report as Reports;

class Report extends Base
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index($id)
    {
        $id = (int)$id;
        $stu = Member::get($id,true);
        if(!$stu){
            $this->error('查无此人');
        }

        $reports = $stu->reportBase->append(['update_name','check_name','diagnosis_text','problem_text'])->toArray();

        $stu->visible(['name','uuid','sex','birthday'])->toArray();
        return view('',['info'=>$stu,'reports'=>$reports]);
    }

    /**
     * 显示创建资源表单页.
     *
     * @return \think\Response
     */
    public function create()
    {
        //
    }

    /**
     * 保存新建的资源
     *
     * @param  \think\Request  $request
     * @return \think\Response
     */
    public function save(Request $request)
    {
        if($request->isAjax()){
            $data = $request->param();
            $res = Reports::create($data);
            if($res){
                return true;
            }else{
                return false;
            }
        }
    }

    /**
     * 显示指定的资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function read($id)
    {
        /*$attentionlist = Db::table('emr_assess_template_attention')->order('groups asc,sort asc')->cache(true)->select();
        $sociallist = Db::table('emr_assess_template_social')->order('sort asc')->cache(true)->select(); 
        $stu = Member::get($id,'report');
        if($stu->report){
            $info = $stu->append(['update_name','status_class','report'=>['update_name']])->toArray(); 
        }else{
            $info = $stu->append(['update_name','status_class'])->toArray();
        }
        
        return view('',['info'=>$info,'attentionlist'=>$attentionlist,'sociallist'=>$sociallist]);*/
    }

    /**
     * 显示编辑资源表单页.
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function edit($id)
    {
        $id = (int)$id;
        $report = Reports::get($id,'memberBase',true);
        if(!$report){
            $this->error('查无此人');
        }

        $attentionlist = Db::table('emr_assess_template_attention')->order('groups asc,sort asc')->cache(true)->select();
        $sociallist = Db::table('emr_assess_template_social')->order('sort asc')->cache(true)->select();

        $initials = Db::table('emr_initials')->order('sort asc')->cache(true)->select();
        $finals = Db::table('emr_finals')->order('sort asc')->cache(true)->select();
        $auditory = Db::table('emr_auditory')->order('sort asc')->cache(true)->select();
        $visual = Db::table('emr_visual')->order('sort asc')->cache(true)->select();

        $summary = Db::table('emr_assess_summary')->order('sort asc')->cache(true)->select();

        $expression = Db::table('emr_assess_expression')->order('sort asc')->cache(false)->select();
        $attr = array('ep01','ep02','ep03','ep');
        $ename = '';
        $expressions = array();
        foreach($expression as $k=>$v){

            if(in_array($v['type'],$attr)){
                $ename = 'ep';
            }else{
                $ename = 'cp';
            }
            switch ($v['level']) {
                case 1:
                    $expressions[$ename][$v['type']]['l'][] =$v;
                    break;
                case 2:
                    $expressions[$ename][$v['type']]['m'][] =$v;
                    break;
                case 3:
                    $expressions[$ename][$v['type']]['h'][] =$v;
                    break;
                case 4:
                    $expressions[$ename]['cn_name'] = $v['cn_name'];
                    $expressions[$ename]['en_name'] = $v['en_name'];
                    break;
                case 5:
                    $expressions[$ename][$v['type']]['cn_name'] = $v['cn_name'];
                    $expressions[$ename][$v['type']]['en_name'] = $v['en_name'];
                    break;
                default:
                    # code...
                    break;
            }
            
        }

        $summary = list_to_tree(collection($summary)->toArray());



        $info = $report->append(['update_name','check_name','diagnosis_text','problem_text'])->toArray();

        return view('',['info'=>$info['member_base'],'report'=>$info,'attentionlist'=>$attentionlist,'sociallist'=>$sociallist,'initials'=>$initials,'finals'=>$finals,'auditory'=>$auditory,'visual'=>$visual,'summary'=>$summary,'expressions'=>$expressions]);
    }

    /**
     * 保存更新的资源
     *
     * @param  \think\Request  $request
     * @param  int  $id
     * @return \think\Response
     */
    public function updateBase(Request $request,$id)
    {
        if($request->isPost()){
            $data = $request->param();
            $report = Reports::get($id);
            $res = $report->allowField(true)->save($data);
            if($res){
                return true;
            }else{
                return false;
            }
        }
        
    }

    public function updatePlan(Request $request,$id)
    {
        if($request->isAjax()){
            $data = $request->param();
            $report = Reports::get($id);
            $plan['training_plan'] = $data;
            $res = $report->save($plan);
            if($res){
                return true;
            }else{
                return false;
            }
        }
        
    }

    public function updateBefore(Request $request,$id)
    {
        if($request->isPost()){
            $data = $request->param();
            $report = Reports::get($id);
            $plan['before_info'] = $data;
            $res = $report->save($plan);
            if($res){
                return true;
            }else{
                return false;
            }
        }
        
    }

    public function updateReportA(Request $request,$id)
    {
        if($request->isAjax()){
            $data = $request->param();
            $id = (int)$id;
            $report = Reports::get($id);

            $datas['report_a'] = [
                'om' => [
                    'oral_sensitivity' => isset($data['sensitivity'])?implode(',',$data['sensitivity']):'',
                    'feeding' => [
                        'purees' => [
                            'side' => $data['purees_side'],
                            'front' => $data['purees_front'],
                            'slurping' => $data['purees_slurping'],
                            'unable' => isset($data['purees_unable'])?1:0
                        ],
                        'slow_feed' => [
                            'left' => $data['slow_feed']['left'],
                            'right' => $data['slow_feed']['right'],
                            'unable' => isset($data['slow_feed_unable'])?1:0
                        ],
                        'straw_drinking' => [
                            'milk_bottle' => $data['milk_bottle'],
                            'breast_feeding' => $data['breast_feeding'],
                            'bear_bottle' => $data['bear_bottle'],
                            'straw' => $data['straw_num'],
                            'unable' => isset($data['straw_unable'])?1:0,
                            'cup_drinking' => isset($data['cup_drinking'])?$data['cup_drinking']:''
                        ],
                        'thickened_liquids' => [
                            'straw' => $data['liquids_straw']
                        ],
                    ],
                    'airflow' => [
                        'bubble' => [
                            'step' => $data['bubble_step'],
                            'times' => $data['bubble_times'],
                            'unable' => isset($data['bubble_unable'])?1:0
                        ],
                        'horn' => [
                            'num' => $data['horn_num'],
                            'times' => $data['horn_times'],
                            'unable' => isset($data['horn_unable'])?1:0
                        ]
                    ],
                    'jaw_stability' => [
                        'finger_sleeve' => $data['finger_sleeve'],
                        'z_vibe' => $data['z_vibe'],
                        'chewy_tube_1' => [
                            'left' => $data['chewy_tube'][1]['left'],
                            'right' => $data['chewy_tube'][1]['right'],
                            'both' => $data['chewy_tube'][1]['both']
                        ],
                        'chewy_tube_2' => [
                            'left' => $data['chewy_tube'][2]['left'],
                            'right' => $data['chewy_tube'][2]['right'],
                            'both' => $data['chewy_tube'][2]['both']
                        ],
                        'chewy_tube_3' => [
                            'left' => $data['chewy_tube'][3]['left'],
                            'right' => $data['chewy_tube'][3]['right'],
                            'both' => $data['chewy_tube'][3]['both']
                        ],
                        'chewy_tube_4' => [
                            'left' => $data['chewy_tube'][4]['left'],
                            'right' => $data['chewy_tube'][4]['right'],
                            'both' => $data['chewy_tube'][4]['both']
                        ],
                        'chewy_tube_5' => [
                            'left' => $data['chewy_tube'][5]['left'],
                            'right' => $data['chewy_tube'][5]['right'],
                            'both' => $data['chewy_tube'][5]['both']
                        ],
                    ],
                    'lips' => [
                        'radios' => isset($data['lips_radio'])?$data['lips_radio']:'',
                        'closure' => $data['lips_closure'],
                        'button_pull' => $data['lips_button_pull'],
                        'retraction' => $data['lips_retraction'],
                        'closures' => $data['lips']['closure'],
                        'stretch' => $data['lips']['stretch'],
                        'round' => $data['lips']['round']
                    ],
                    'tongue_flexibility' => [
                        'protrusion' => $data['tongue_protrusion'],
                        'retraction' => $data['tongue_retraction'],
                        'left' => $data['tongue_left'],
                        'right' => $data['tongue_right'],
                        'elevation' => $data['tongue_elevation'],
                        'depression' => $data['tongue_depression'],
                        'content_a' => $data['tongue_a'],
                        'content_b' => $data['tongue_b'],
                        'content_c' => $data['tongue_c']
                    ],
                    'swallowing' => isset($data['swallowing'])?$data['swallowing']:''
                ],
                'sp' => [
                    'existing_syllables' => [
                        'initials' => isset($data['initials']['can'])?implode(',',$data['initials']['can']):array(),
                        'finals' => isset($data['finals']['can'])?implode(',',$data['finals']['can']):''
                    ],
                    'not_clear_syllables' => [
                        'initials' => isset($data['initials']['cannot'])?$data['initials']['cannot']:'',
                        'finals' => isset($data['finals']['cannot'])?implode(',', $data['finals']['cannot']):''
                    ],
                    'content' => $data['sp_content'],
                    'nasality' => [
                        'voice' => $data['sp_voice'],
                        'tone' => $data['sp_tone'],
                        'volume' => $data['sp_volume'],
                        'nasality' => $data['sp_nasality']
                    ]
                ],
                'content' => $data['content'],
                'version'=>$data['version']
            ];
            $res = $report->save($datas);
            if($res){
                return true;
            }else{
                return false;
            }
        }
    }

    public function updateReportB(Request $request,$id)
    {
        if($request->isAjax()){
            $data['report_b'] = $request->except('id');
            $id = (int)$id;
            $report = Reports::get($id);
            $res = $report->save($data);
            if($res){
                return true;
            }else{
                return false;
            }
        }
    }

    public function updateReportC(Request $request,$id)
    {
        if($request->isAjax()){
            $data['report_c'] = $request->except('id');
            $id = (int)$id;
            $report = Reports::get($id);
            $res = $report->save($data);
            if($res){
                return true;
            }else{
                return false;
            }
        }
    }

    public function updateReportD(Request $request,$id)
    {
        if($request->isAjax()){
            $data['report_d'] = $request->except('id');
            $id = (int)$id;
            $report = Reports::get($id);
            $res = $report->save($data);
            if($res){
                return true;
            }else{
                return false;
            }
        }
    }

    public function updateReportE(Request $request,$id)
    {
        if($request->isAjax()){
            $data['report_e'] = $request->except('id');
            $report = Reports::get($id);
            $res = $report->save($data);
            if($res){
                return true;
            }else{
                return false;
            }
        }
    }

    public function updateSummary(Request $request,$id)
    {
        if($request->isAjax()){
            $data['summary'] = $request->except('id');
            $report = Reports::get($id);
            $res = $report->save($data);
            if($res){
                return true;
            }else{
                return false;
            }
        }
    }

    public function updateCourse(Request $request,$id)
    {
        if($request->isAjax()){
            $data['course'] = $request->except('id');
            $report = Reports::get($id);
            $res = $report->save($data);
            if($res){
                return true;
            }else{
                return false;
            }
        }
    }

    /**
     * 删除指定资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function delete($id)
    {
        $id = (int)$id;
        $stu = Members::get($id);
        $res = $stu->save(['status'=>-1,'check_uid'=>is_login()]);
        if($res){
            $this->success('更新成功');
        }else{
            $this->error('更新失败');
        }
    }

    public function setStatus($id=0,$status=0)
    {
        $id = (int)$id;
        $status = (int)$status;
        if($status<0){
            $this->error('更新失败');
        }

        $report = Reports::get($id);
        
        $res = $report->save(['status'=>$status,'check_uid'=>is_login()]);
        if($res){
            $this->success('更新成功');
        }else{
            $this->error('更新失败');
        }
    }
}
