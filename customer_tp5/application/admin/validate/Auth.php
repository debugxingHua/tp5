<?php
namespace app\admin\validate;

use think\Validate;

class Auth extends Validate{

    protected $rule = [
        'department_name' => 'require|max:20',
    ];

    protected $field = [
        'department_name' => '部门名称',
    ];

    protected $message = [
        'department_name.require' => '部门名称不能为空',
        'department_name.max' => '部门名称过长',
    ];

    protected $scene = [
        'department' => ['department_name'],
    ];
}