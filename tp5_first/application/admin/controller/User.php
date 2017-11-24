<?php
namespace app\admin\controller;

use think\Controller;
use think\Session;
use think\Loader;

class User extends Controller{
    public function index(){
        return '';
    }

    public function login(){
        $validate = Loader::validate('User');
        $bool_filed = $validate->scene('login')->check($_POST);
        if(!$bool_filed){
            return callback_json(1,$validate->getError(),'');
        }else{
            $user = new \app\admin\model\User();
            $user_array = $user->where('user_name','=',$_POST['user_name'])->find();
            if(!$user_array){
                return callback_json(1,'用户不存在','');
            }else{
                //用户名对了，匹配密码
                if($user_array['password'] !== md5($_POST['password'])){
                    return callback_json(1,'密码错误','');
                }else{
                    //录入session
                    Session::set('user',null);
                    Session::set('user',$user_array);
                    return callback_json(0,'登录成功','');
                }
            }
        }
    }

    /**
     *  注册操作
     * @return string
     */
    public function register(){
        $data = $_POST;
        $data['lastloginip'] = getenv('REMOTE_ADDR');
        $data['createdate'] = date('Y-m-d H:i:s');
        $data['password'] = md5($_POST['password']);
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
                $result = $user->save();
                $message = $result == 1? '注册成功':'注册失败';
                return callback_json(0,$message,$data['user_name']);
            }
        }
    }
}