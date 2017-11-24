<?php
namespace app\admin\controller;

use think\Controller;
use think\Session;

class CheckLogin extends Controller{

    public function __construct(){
        parent::__construct();
        $this->check_login();
    }

    /**
     *  检查是否登录，密码是否正确
     */
    public function check_login(){
        $bool = Session::get('user') ? true: false;
        //登录了就跳转到主页，对密码
        if($bool){
            $user_model = new \app\admin\model\User();
            $result = $user_model->field('password')->
                where('user_name','=',Session::get('user.user_name'))->find();
            if($result['password'] === Session::get('user.password')){
                $this->redirect('/admin.html');
            }
        }
    }

}