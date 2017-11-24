<?php
namespace app\admin\controller;

class Login extends CheckLogin {
    function index(){
        return $this->fetch();
    }
    function login(){
        return $this->fetch();
    }
    function register(){
        return $this->fetch();
    }
}