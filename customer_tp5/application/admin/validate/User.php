<?php
namespace app\admin\validate;

use think\Validate;

class User extends Validate{
    protected $rule = [
        'user_name'  => 'require|max:20',
        'password'  => 'require',
        'real_name'  => 'require|max:12',
        'email' => 'email',
        'qq'    => 'number|max:20',
        'phone'    => 'require|length:11|number'
    ];

    protected $field = [
        'user_name'  => '用户名',
        'password'  => '密码',
        'real_name'  => '姓名',
        'email' => '邮箱',
        'qq'    => 'QQ',
        'phone'    => '手机'
    ];

    /**
     *  提示信息
     * @var array
     */
    protected $message  =   [
        'user_name.require' => '用户名称不能为空',
        'user_name.max'     => '名称最多不能超过25个字符',
        'qq.number'   => 'qq必须是数字',
        'phone.number'   => '手机必须是数字',
        'phone.max'   => '请输入11位手机号',
        'email'        => '邮箱格式错误'
    ];

    protected $scene = [
        'register' => ['user_name','real_name','password','phone','email','qq'],
        'login'    => ['user_name','password'],
    ];
    // 自定义验证规则
//    protected function checkName($value,$rule,$data){
//        return $rule == $value ? true : '名称必须是xinghua';
//    }


}