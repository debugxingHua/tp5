<?php
namespace app\admin\controller;

use think\Controller;
use think\Session;

/**
 * Class CheckNotLogin      session不存在则去登录
 * @package app\admin\controller
 */
class CheckNotLogin extends Controller{

    public function __construct(){
        parent::__construct();
        $this->check_no_login();
    }

    /**
     *  if没有登录，密码不正确，都重定向到login
     */
    public function check_no_login(){
        $bool = Session::get('user') ? true: false;
        //没有登录就跳转到登录,登录开始时间到现在3000秒后session自动过期
        $time = time() - Session::get('user.lastlogintime');
        //没有登录或登录超时，去登录页
        if($bool === false || $time > 9000){
            Session::set('user',null);
            $this->redirect('/login.html');
        }else{
            //对密码
            $user_model = new \app\admin\model\User();
            $result = $user_model->field('password')->
            where('user_id','=',Session::get('user.user_id'))->find();
            if($result['password'] !== Session::get('user.password')){
                Session::set('user',null);
                $this->redirect('/login.html');
            }
        }
    }

}