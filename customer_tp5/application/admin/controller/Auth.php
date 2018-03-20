<?php
namespace app\admin\controller;
use app\admin\model\Department;
use app\admin\model\Rm;
use think\Loader;
use think\Session;

/**
 * Class Auth   权限管理
 * @package app\admin\controller
 */
class Auth extends CheckNotLogin {

    /**
     *  权限首页
     * @return mixed
     */
    public function index(){
        return $this->fetch();
    }

    /**
     *  设置角色的菜单权限
     * @return string
     */
    public function set_rm(){
        //新建映射对象
        $rm = new Rm();
        $data['role_id'] = $_POST['role_id'];
        $data['menu_id'] = $_POST['menu_id'];
        $result = $rm->where($data)->find();
        if(isset($result)){
            $delete_num = $rm->get($result['rm_id'])->delete();
            if($delete_num > 0){
                return callback_json(0,'取消授权成功','');
            }else{
                return callback_json(1,'取消授权失败','');
            }
        }else{
            $add_num = $rm->save($data);
            if($add_num > 0){
                return callback_json(0,'授权成功','');
            }else{
                return callback_json(1,'授权失败','');
            }
        }
    }

    /**
     *  给用户分配角色
     * @return string
     */
    public function set_ur(){
        //合理请求
        if(isset($_POST['user_id']) && isset($_POST['user_role_id'])){
            //实例化用户model对象
            $user = new \app\admin\model\User();
            //更新用户的角色id
            $data['role_id'] = $_POST['user_role_id'];
            $num = $user->save($data,['user_id'=>$_POST['user_id']]);
            if($num>0){
                $data2['status'] = 2;
                $num2 = $user->save($data2,['user_id'=>$_POST['user_id']]);
                return callback_json(0,'分配成功',$num2);
            }else{
                return callback_json(1,'分配失败',$num);
            }
        }else{
            //请求不合理
        }
    }
    /**
     *  添加部门分组
     * @return string
     */
    public function department_add(){
        //post请求是否存在
        if(!$_POST){
            return callback_json(1,'请求不存在','');
        }else{
            //加载验证器
            $validate = Loader::validate('Auth');
            $bool = $validate->scene('department')->Check($_POST);
            //返回验证错误信息
            if(!$bool){
                return callback_json(1,$validate->getError(),'');
            }else{
                //将部门信息存到数据库
                $department = new Department();
                $num = $department->save($_POST);
                if($num > 0){
                    return callback_json(0,'保存成功','');
                }else{
                    return callback_json(1,'保存失败','');
                }
            }
        }
    }
}