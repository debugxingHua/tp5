<?php
namespace app\admin\controller;

use think\Session;

class Index extends CheckNotLogin {
    function index(){
        dump(Session::get('user'));
        return $this->fetch();
    }
    function logout(){
        Session::delete('user');
        $this->redirect('/login.html');
    }
}