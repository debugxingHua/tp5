<?php
namespace app\admin\controller;

use think\Session;
use think\Loader;
/**
 * Class Login  登录与注册管理
 * @package app\admin\controller
 */
class Login extends CheckLogin {
    function index(){
        return $this->fetch();
    }

    /**
     *  去登录
     * @return mixed
     */
    function login(){
        $this->view->engine->layout(false);
        return $this->fetch();
    }

    /**
     *  去注册
     * @return mixed
     */
    function register(){
        $this->view->engine->layout(false);
        return $this->fetch();
    }

    /**
     *  登录操作
     * @return string
     */
    public function login_action(){
        //加载验证器
        $validate = Loader::validate('User');
        //验证login
        $bool_filed = $validate->scene('login')->check($_POST);
        //验证错误返回信息
        if(!$bool_filed){
            return callback_json(1,$validate->getError(),'');
        }else{
            //调用model
            $user = new \app\admin\model\User();
            //用户名查询
            $user_array = $user->where('user_name','=',$_POST['user_name'])->find();
            if(!$user_array){
                return callback_json(1,'用户不存在','');
            }else{
                //用户名对了，匹配密码
                if($user_array['password'] !== md5($_POST['password'])){
                    return callback_json(1,'密码错误','');
                }else{
                    //查看用户状态
                    //1为刚注册的初始用户
                    if($user_array['status'] == 1){
                        return callback_json(1,'请联系管理员为您分配角色','');
                    }else if($user_array['status'] == 3){
                        return callback_json(1,'您已离职,祝您前程似锦','');
                    }else{
                        //录入登陆时间，用来设置session到期
                        $user_array['lastlogintime'] = time();
                        $num = $user->save(['lastlogintime' => $user_array['lastlogintime']],['user_id'=>$user_array['user_id']]);
                        if($num > 0){
                            //录入session
                            Session::set('user',null);
                            Session::set('user',$user_array);
                            return callback_json(0,'登录成功','');
                        }else{
                            return callback_json(1,'最后登陆时间出错','');
                        }
                    }
                }
            }
        }
    }

    /**
     *  注册操作
     * @return string
     */
    public function register_action(){
        $data = $_POST;
        //获取当前登录ip
        $data['lastloginip'] = getenv('REMOTE_ADDR');
        $data['createdate'] = date('Y-m-d H:i:s');
        $data['password'] = md5($_POST['password']);
        $data['user_name'] = str_replace(' ','',$_POST['user_name']);

        //数据库操作
        $user = new \app\admin\model\User($data);
        //规则验证
        $validate = validate("User");
        $bool_filed= $validate->scene('register')->check($data);
        //返回数据
        if(!$bool_filed){
            return callback_json(1,$validate->getError(),'');
        }else{
            //查查有木有这个用户名
            $user_name = $user->where('user_name','=',$data['user_name'])->find();
            if($user_name) {
                return callback_json(1, '用户名已存在', $user_name);
            }else{
                //保存数据
                $result = $user->save();
                $message = $result == 1? '注册成功':'注册失败';
                return callback_json(0,$message,$data['user_name']);
            }
        }
    }

}