<?php
namespace app\admin\controller;

use think\Controller;
use think\Request;
use think\Validate;
use think\Session;
use app\admin\model\UcenterUser;

class admin extends Controller
{
    public function register()
    {
        if(is_login()){
            $this->redirect('admin/admin/index');
        }
        return view();
    }

    public function doRegister(Request $request,UcenterUser $ucenter_user)
    {
        if($request->isPost()){
            $data = $request->param();
            if(!model('Verify')->checkVerify($data['email'],'email',$data['verify'])){
                $this->error('验证码不正确或已超时');
            }

            $res = $ucenter_user->register($data);
            if($res){
                $this->success('注册成功','admin/admin/login');
            }else{
                $this->error($ucenter_user->getError());
            }

        }
    }

    public function login()
    {
        model('User')->need_login();
        if(is_login()){
            $this->redirect('admin/admin/index');
        }
        return view();
    }

    public function doLogin(Request $request,UcenterUser $ucenter_user)
    {
        $username = $request->param('username','','op_t');
        $password = $request->param('password','','op_t');
        $remember = $request->param('remember',0,'intval');
        $rule = [
                'username'  => 'require|length:2,25',
                'password' => 'require|length:6,32'
        ];
        $msg = [
            'username.require' => '登录账号不能为空',
            'username.length'     => '登录账号长度必须为2至25之间',
            'password.reqire'     => '密码不能为空',
            'password.length'  => '密码密度必须为6至32位之间'
        ];
        $data = [
            'username'  => $username,
            'password' => $password
        ];
        $validate = new Validate($rule,$msg);
        $result   = $validate->check($data);
        if(!$result){
            $this->error($validate->getError());
        }

        check_username($username,$email,$mobile,$type);
        $uid = $ucenter_user->login($username,$email,$mobile, $password,$remember,$type);
        if ($uid>0) {
            $this->success('登录成功','admin/index/index');
        } else {
            switch ($uid){
                case -1:
                    $info = '账户已被禁用';
                    break;
                case -2:
                    $info = '密码不正确';
                    break;
                case -3:
                    $info = '该账号未注册';
                    break;
                default:
                    $info = $uid;
                    break;
            }
            $this->error($info);
        }
    }

    public function reminder()
    {
        /*if (is_login()) {
            $this->redirect('admin/index/index');
        }*/
        return view();
    }

    public function doReminder(Request $request){
        if($request->isPost()){
            $data = $request->param();
            if(!model('Verify')->checkVerify($data['email'],'email',$data['verify'])){
                $this->error('验证码不正确或已超时');
            }

            $user = UcenterUser::get(['email'=>$data['email']]);
            if(!$user){
                $this->error('该账号未注册');
            }else if($user->status!=1){
                $this->error('该账号未通过审核或已被禁用');
            }

            $user->password = $password = create_rand(8);
            $user->save();
            send_mail($data['email'],'密码重置','启音言语科技','您的密码已被重置，新密码为：'.$password.'，请及时登录并修改密码');
            $this->success('新密码已发送至您的邮箱');
        }
    }

    public function logout()
    {
        if (is_login()) {
            model('User')->logout();
            $this->success('退出成功', url('admin/Admin/login'));
        } else {
            $this->redirect('admin/Admin/login');
        }
    }

    public function sendVerify(Request $request)
    {
        if($request->isAjax()){
            $account = $request->param('account','','op_t');
            $type = $request->param('type','email','op_t');
            $scene = $request->param('scene',0,'intval');
            $type == 'email'?'email':'mobile';
            $res['status'] = 0;
            $data['account'] = $account;
            if($type=='email'){
                $result = Validate::is($account,'email');
            }else{
                $result = Validate::regex($account,'/^(13[0-9]|14[5|7|9]|15[0|1|2|3|5|6|7|8|9]|17[0|1|2|3|5|6|7|8|9]|18[0|1|2|3|5|6|7|8|9])\d{8}$/i');
            }

            if(true!==$result){
                $res['info'] = '输入账号格式不正确';
                return $res;
            }

            $time = request()->time();
            $resend_time = 60;
            if($time <= session('verify_time')+$resend_time ){
                $res['info'] = '请在'.($resend_time-($time-session('verify_time'))).'后再发';
                return $res;
            }
            $result = model('Verify')->sendVerify($account,$type,$scene);

            if($result!==true){
                $res['info'] = $result;
                return $res;
            }else{
                $res['status'] = 1;
                return $res;
            }

        }
        
    }
}
