<?php
namespace app\admin\controller;

use think\Session;

/**
 * Class Index      后台主页
 * @package app\admin\controller
 */
class Index extends CheckNotLogin {
    function index(){
//        dump(Session::get('user')->getData());
        return $this->fetch();
    }
    function logout(){
        Session::delete('user');
        $this->redirect('/login.html');
    }
}