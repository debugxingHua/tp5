<?php
namespace app\admin\controller;

use app\admin\model\Rm;

/**
 * Class Menus      菜单管理
 * @package app\admin\CheckNotLogin
 */
class Menu extends CheckNotLogin {
    //实例化model对象
    private $menu;
    public function __construct(){
        parent::__construct();
        $this->menu = new \app\admin\model\Menu();
    }

    /**
     *  菜单首页
     * @return mixed
     */
    function index(){
        //查出所有菜单
        $result = $this->menu->paginate(10);
        $this->assign('menu',$result);
        return $this->fetch();
    }

    /**
     *  添加操作
     * @return string
     */
    function add(){
        if(trim($_POST['menu_name']) && trim($_POST['menu_url'])){
            $menu_name = $this->menu->where('menu_name','=',$_POST['menu_name'])->find();
            if(isset($menu_name)){
                return callback_json(1,'菜单名称已存在','');
            }
            $menu_url  = $this->menu->where('menu_url','=',$_POST['menu_url'])->find();
            if(isset($menu_url)){
                return callback_json(1,'菜单路由已存在','');;
            }
            $num = $this->menu->save($_POST);
            if($num > 0){
                return callback_json(0,'保存成功','');
            }else{
                return callback_json(1,'保存失败','');
            }
        }else{
            return callback_json(1,'信息不完整','');
        }
    }

    /**
     *  删除操作
     * @return string
     */
    function delete(){
        //找到并删除
        if(isset($_POST['menu_id']) && $_POST['menu_id'] != null){
            $num = $this->menu->get($_POST['menu_id'])->delete();
            if($num > 0){
                //删除了菜单后要讲角色与菜单映射表的联系也删除
                $rm = new Rm();
                $data['menu_id'] = $_POST['menu_id'];
                $result = $rm->where($data)->select();
                $num = 0;
                foreach ($result as $key => $value){
                    $num += $rm->get($value['rm_id'])->delete();
                }
                return callback_json(0,'删除成功','');
            }else{
                return callback_json(1,'删除失败','');
            }
        }
    }
}