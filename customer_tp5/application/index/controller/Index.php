<?php
namespace app\index\controller;

use think\Controller;

class Index extends Controller{

    /**
     *  设置前置操作
     * @var array
     */
    protected $beforeActionList = [
        'layout_false',
    ];

    /**
     *
     *  前置方法
     * @return mixed
     */
    public function layout_false(){
        return $this->view->engine->layout(false);
    }

    /**
     *  首页
     * @return mixed
     */
    public function index(){
        return $this->fetch();
    }
    public function about(){
        return $this->fetch();
    }
    public function contact(){
        return $this->fetch();
    }
    public function news(){
        return $this->fetch();
    }
    public function works(){
        return $this->fetch();
    }
}
