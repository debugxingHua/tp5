<?php
namespace app\admin\controller;

use think\Controller;
use think\Session;

class CheckNotLogin extends Controller{

    public function __construct(){
        parent::__construct();
        $this->check_no_login();
    }

    /**
     *  检查是否登录，密码是否正确
     */
    public function check_no_login(){
        $bool = Session::get('user') ? true: false;
        dump($bool);
        //没有登录就跳转到登录，否则对密码
        if($bool === false){
            $this->redirect('/login.html');
        }
    }

}