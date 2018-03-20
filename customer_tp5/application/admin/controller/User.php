<?php
namespace app\admin\controller;

/**
 * Class User       用户管理
 * @package app\admin\controller
 */
class User extends CheckNotLogin {

    //初始化一个公共的模型对象
    private $user;
    public function __construct(){
        parent::__construct();
        $this->user = new \app\admin\model\User();
    }

    /**
     *  用户列表
     * @return mixed
     */
    public function index(){
        //获取全部用户列表
//        $result = $this->user->order('status')->select();
        $result = $this->user->where('status <> 3 AND user_id > 1')->order('status')->paginate(10);
        //绑定到页面
        $this->assign('user',$result);
        return $this->fetch();
    }

    /**
     *  去编辑用户页面
     * @return mixed
     */
    public function edit($user_id){
        //获取要编辑的用户
        $user = $this->user->get($user_id);
        //获取除了管理员的角色列表
        $data = 'role_id> 1';
        $role_list = getRoleListByData($data);
        //绑定到页面
        $this->assign('user',$user);
        $this->assign('role_list',$role_list);
        return $this->fetch();
    }

    //编辑用户资料
    public function edit_action(){
        dump($_POST);
        return;
    }

    /**
     *  重置密码为123
     * @return string
     */
    public function password(){
        //判断是否是指定请求
        if($_POST && $_POST['set'] == 'set'){
            //更新密码字段
            $num = $this->user->save(['password'=>md5('123')],['user_id' => $_POST['user_id']]);
            //返回结果
            if($num > 0){
                return callback_json(0,'重置成功','');
            }else{
                return callback_json(1,'密码为123','');
            }
        }
    }

    /**
     *  删除用户
     * @return string
     */
    public function delete(){
        //获取用户并删除
//        $num = $this->user->get($_POST['user_id'])->delete();
        //将用户的状态改变
        $num = $this->user->save(['status'=>3],['user_id' =>$_POST['user_id']]);
        if($num > 0){
            return callback_json(0,'删除成功','');
        }else{
            return callback_json(1,'删除失败','');
        }
    }
}