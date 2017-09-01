<?php
namespace app\admin\controller;
use app\admin\controller\Base;
use app\admin\model\Member;
use app\admin\model\Report;
use think\Request;
use think\Db;

class Assess extends Base
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
        //
    }

    /**
     * 显示创建资源表单页.
     *
     * @return \think\Response
     */
    public function createOne()
    {
        $underway = Db::table('stu_member_under_way')->cache(true)->select();
        $touchway = Db::table('stu_member_touch_way')->cache(true)->select();
        $history = Db::table('stu_member_extend_history')->cache(true)->select();
        $ability = Db::table('stu_member_extend_ability')->cache(true)->select();

        return view('create',['underway'=>$underway,'touchway'=>$touchway,'history'=>$history,'ability'=>$ability]);
    }

    public function createTwo($id=0)
    {
        $id = (int)$id;
        $user = Member::where('id',$id)->field('id,name,birthday,sex')->find();
        if(!$user){
            $this->error('请求错误');
        }
        $info = $user->toArray();
        $history = Db::table('stu_member_extend_history')->cache(true)->select();
        $auditory = Db::table('emr_auditory')->order('sort asc')->cache(true)->select();
        $visual = Db::table('emr_visual')->order('sort asc')->cache(true)->select();
        $summary = Db::table('emr_assess_summary')->order('sort asc')->cache(true)->select();
        $summary = list_to_tree(collection($summary)->toArray());

        return view('create-a',['info'=>$info,'history'=>$history,'auditory'=>$auditory,'visual'=>$visual,'summary'=>$summary]);
    }

    public function createThree($uid=0,$report_id=0)
    {
        $uid = (int)$uid;
        $report_id = (int)$report_id;
        $user = Member::where('id',$uid)->field('id,name,birthday,sex')->find();
        if(!$user){
            $this->error('请求错误');
        }
        $info = $user->toArray();

        $sociallist = Db::table('emr_assess_template_social')->order('sort asc')->cache(true)->select();

        return view('create-b',['info'=>$info,'sociallist'=>$sociallist,'report_id'=>$report_id]);
    }

    public function createFour($uid=0,$report_id=0)
    {
        $uid = (int)$uid;
        $report_id = (int)$report_id;
        $user = Member::where('id',$uid)->field('id,name,birthday,sex')->find();
        if(!$user){
            $this->error('请求错误');
        }
        $info = $user->toArray();

        $initials = Db::table('emr_initials')->order('sort asc')->cache(true)->select();
        $finals = Db::table('emr_finals')->order('sort asc')->cache(true)->select();

        return view('create-c',['info'=>$info,'initials'=>$initials,'finals'=>$finals,'report_id'=>$report_id]);
    }

    public function createFive($uid=0,$report_id=0)
    {
        $uid = (int)$uid;
        $report_id = (int)$report_id;
        $user = Member::where('id',$uid)->field('id,name,birthday,sex')->find();
        if(!$user){
            $this->error('请求错误');
        }
        $info = $user->toArray();

        $expression = Db::table('emr_assess_expression')->order('sort asc')->cache(true)->select();
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

        return view('create-d',['info'=>$info,'expressions'=>$expressions,'report_id'=>$report_id]);
    }

    public function createSix($uid=0,$report_id=0)
    {
        $uid = (int)$uid;
        $report_id = (int)$report_id;
        $user = Member::where('id',$uid)->field('id,name,birthday,sex')->find();
        if(!$user){
            $this->error('请求错误');
        }
        $info = $user->toArray();

        return view('create-e',['info'=>$info,'report_id'=>$report_id]);
    }

    public function createSeven($uid=0,$report_id=0)
    {
        $uid = (int)$uid;
        $report_id = (int)$report_id;
        $user = Member::where('id',$uid)->field('id,name,birthday,sex')->find();
        if(!$user){
            $this->error('请求错误');
        }
        $info = $user->toArray();
        return view('create-f',['info'=>$info,'report_id'=>$report_id]);
    }

    public function createEight($uid=0,$report_id=0)
    {
        $uid = (int)$uid;
        $report_id = (int)$report_id;
        $user = Member::where('id',$uid)->field('id,name,birthday,sex')->find();
        if(!$user){
            $this->error('请求错误');
        }
        $info = $user->toArray();
        return view('create-g',['info'=>$info,'report_id'=>$report_id]);
    }

    /**
     * 保存新建的资源
     *
     * @param  \think\Request  $request
     * @return \think\Response
     */
    public function save(Request $request)
    {
        if($request->isPost()){
            $data = $request->param();
            $result = $this->validate($data,'Member');
            if(true !== $result){
                // 验证失败 输出错误信息
                $this->error($result);
            }

            $data['extends'] = [
                'base' => [
                    'history' => [
                        'checked' => [],
                        'other' => 0,
                        'other_text' => '',
                    ],
                    'ability' => [
                        'checked' => [],
                        'other_text' => $data['ability_other'],
                    ],
                    'main_concern' => $data['main_concern'],
                    'present_speech' => $data['present_speech'],
                    'development' => [
                        'babbling' => '',
                        'first_word' => '',
                        'phrase' => '',
                        'is_stop' => ''
                    ]
                ]
            ];

            $user = new Member;
            $res = $user->allowField(true)->save($data);
            if($res){
                $id = $user->id;
                $this->success('新增成功',url('admin/assess/createTwo',['id'=>$id]));
            }else{
                $this->error('新增失败');
            }


        }
    }

    public function saveTwo(Request $request,$id)
    {
        $id = (int)$id;
        if($request->isPost()){
            $data = $request->param();
            if($data['t_name']==''||$data['assess_time']==''||$data['stu_id']==''){
                $this->error('输入数据不完整');
            }
            $user = Member::get($id);
            $datas['extends'] = $user->extends;
            $datas['extends']['base']['history'] = [
                'checked' => isset($data['history']['checked'])?$data['history']['checked']:array(),
                'other' => isset($data['history']['other'])?$data['history']['other']:0,
                'other_text' => $data['history_other']
            ];
            $datas['extends']['base']['development'] = [
                'babbling' => $data['babbling'],
                'first_word' => $data['first_word'],
                'phrase' => $data['phrase'],
                'is_stop' => isset($data['is_stop'])?:''
            ];
            $user->save($datas);

            $report = Report::create([
                'stu_id' => $data['stu_id'],
                't_name' => $data['t_name'],
                'assess_time' => $data['assess_time'],
                'diagnosis' => isset($data['diagnosis'])?$data['diagnosis']:array(),
                'problem' => isset($data['problem'])?$data['problem']:array(),
                'report_b' => $data['report_b'],
                'report_c' => $data['report_c']
            ]);
            $report_id = $report->id;
            $this->success('新增成功',url('admin/assess/createThree',['uid'=>$id,'report_id'=>$report_id]));
        }
    }

    public function saveThree(Request $request,$id)
    {
        if($request->isPost()){
            $id = (int)$id;
            $stu_id = $request->param('stu_id');
            $data = $request->only('report_e');
            $report = Report::get($id);
            if($report['stu_id']!=$stu_id){

                $this->error('信息错误');
            }
            $report->save($data);
            $this->success('新增成功',url('admin/assess/createFour',['uid'=>$stu_id,'report_id'=>$id]));
        }
    }

    public function saveFour(Request $request,$id)
    {
        if($request->isPost()){
            $id = (int)$id;
            $stu_id = $request->param('stu_id');
            $data = $request->except('stu_id');
            $report = Report::get($id);
            if($report->stu_id!=$stu_id){

                $this->error('信息错误');
            }
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
                'content' => '',
                'version'=>$data['version']
            ];
            $report->save($datas);
            $this->success('新增成功',url('admin/assess/createFive',['uid'=>$stu_id,'report_id'=>$id]));
        }
    }

    public function saveFive(Request $request,$id)
    {
        if($request->isPost()){
            $id = (int)$id;
            $stu_id = $request->param('stu_id');
            $data = $request->except('stu_id');
            $report = Report::get($id);
            if($report->stu_id!=$stu_id){

                $this->error('信息错误');
            }
            $datas = $report['report_b'];
            $res['report_b'] = array_merge($data,$datas);
            $report->save($res);
            $this->success('新增成功',url('admin/assess/createSix',['uid'=>$stu_id,'report_id'=>$id]));
        }
    }

    public function saveSix(Request $request,$id)
    {
        if($request->isPost()){
            $id = (int)$id;
            $stu_id = $request->param('stu_id');
            
            $report = Report::get($id);
            if($report['stu_id']!=$stu_id){

                $this->error('信息错误');
            }
            $data['before_info'] = $request->except('stu_id');
            $report->save($data);
            $this->success('新增成功',url('admin/assess/createSeven',['uid'=>$stu_id,'report_id'=>$id]));
        }
    }

    public function saveSeven(Request $request,$id)
    {
        if($request->isPost()){
            $id = (int)$id;
            $stu_id = $request->param('stu_id');
            
            $report = Report::get($id);
            if($report['stu_id']!=$stu_id){

                $this->error('信息错误');
            }
            $data['training_plan'] = $request->except(['stu_id','id']);
            $report->save($data);
            $this->success('新增成功',url('admin/assess/createEight',['uid'=>$stu_id,'report_id'=>$id]));
        }
    }

    public function saveEight(Request $request,$id)
    {
        if($request->isPost()){
            $id = (int)$id;
            $stu_id = $request->param('stu_id');
            
            $report = Report::get($id);
            if($report['stu_id']!=$stu_id){

                $this->error('信息错误');
            }
            $data['course'] = $request->except(['stu_id','id']);
            $report->save($data);
            $this->success('新增成功',url('admin/member/read',['id'=>$stu_id]));
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
        //
    }
}