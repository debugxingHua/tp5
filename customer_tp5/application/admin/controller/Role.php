<?php
namespace app\admin\controller;
use app\admin\model\Rm;

/**
 * Class Role   角色管理
 * @package app\admin\controller
 */
class Role extends CheckNotLogin{
    //实例化公用model对象
    private $role;
    public function __construct(){
        parent::__construct();
        $this->role = new \app\admin\model\Role();
    }
    /**
     *  角色列表
     * @return mixed
     */
    public function index(){
        //获取全部角色列表
        $result = $this->role->paginate(10);
        if($result){
            //绑定到页面
            $this->assign('role',$result);
        }
        return $this->fetch();
    }

    /**
     *  添加新角色
     * @return string
     */
    public function add(){
        //角色名不能为空
        if($_POST['role_name'] && !trim($_POST['role_name'])){
            return callback_json(1,'输出角色名','');
        }else{
            //角色名唯一
            $result = $this->role->where(['role_name' => $_POST['role_name']])->find();
            if(isset($result)){
                return callback_json(1,'角色名已存在','');
            }else{
                //新建角色
                $num = $this->role->save($_POST);
                if($num > 0){
                    return callback_json(0,'角色添加成功','');
                }else{
                    return callback_json(1,'角色添加失败','');
                }
            }

        }
    }

    /**
     *  编辑页面
     * @param $role_id
     * @return mixed
     */
    public function edit($role_id){
        //获取角色
        $role = $this->role->get($role_id);
        //获取菜单列表
        $menu_list = getMenuList();
        //当过菜单id和角色id查询是否存在权限
        $rm = new Rm();
        foreach ($menu_list as $key => $value){
            $data['role_id'] = $role['role_id'];
            $data['menu_id'] = $value['menu_id'];
            $result  = $rm->where($data)->find();
            $bool = $result? true:false;
            $menu_list[$key]['bool'] = $bool;
        }
        $this->assign('role',$role);
        $this->assign('menu_list',$menu_list);
        return $this->fetch();
    }

    /**
     *  删除角色
     * @return string
     */
    public function delete(){
        //获取角色并删除
        $num = $this->role->get($_POST['role_id'])->delete();
        if($num > 0){
            $rm = new Rm();
            $data['role_id'] = $_POST['role_id'];
            $result = $rm->where($data)->select();
            $num2 = 0;
            foreach ($result as $key => $value){
                $num2 += $rm->get($value['rm_id'])->delete();
            }
            return callback_json(0,'删除成功',$num2);
        }else{
            return callback_json(1,'删除失败',$num);
        }
    }
}