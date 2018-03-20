<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件
function hello(){
    echo 'en?';
}
//自定义函数
/**
 *  返回一个json格式的字符串数据
 * @param $status   [状态]
 * @param $message  [信息]
 * @param $data     [参数]
 * @date    2017年11月9日11:29:17
 * @return string
 */
function callback_json($status,$message,$data){
    $result = array(
        "status" => $status,
        "message" => $message,
        "data" => $data
    );
    exit(json_encode($result));
}

/**
 *  用户的状态
 * @param $status
 * @return string
 */
function user_status($status){
    switch ($status){
        case 1;
            return '初始用户';
            break;
        case 2;
            return '在职';
            break;
        case 3;
            return '辞职/删除';
            break;
    }
}

/**
 * 角色id获取角色
 * @param $role_id
 * @return string
 */
function role_by_id($role_id){
    $rm = new \app\admin\model\Role();
    $role = $rm ->get($role_id);
    if($role){
        return $role['role_name'];
    }else{
        return '无';
    }
}

/**
 *  根据session的role_id获取菜单
 * @return array
 */
function getMenuByRoleId(){
    //查到当前角色拥有的menu关系
    $rm = new \app\admin\model\Rm();
    $menu = new \app\admin\model\Menu();
    //当前角色id
    $data['role_id'] = \think\Session::get('user.role_id');
    //
    $menu_array = array();
    //如果角色是管理员，
    if($data['role_id'] == 1){
        return $menu->all();
    }else{
        $menu_id_array = $rm->getRMByData($data);
        //用查出来的menu_id查menu表的数据,放入集合
        foreach ($menu_id_array as $key=>$value){
            $menu_array[$key]  = $menu->get($value['menu_id']);
        }
        return $menu_array;
    }
}

/**
 *  获取全部菜单列表
 * @return false|static[]
 */
function getMenuList(){
    $menu = new \app\admin\model\Menu();
    return $menu->all();
}

/**
 * 根据获取角色信息
 * @param $data
 * @return array|false|PDOStatement|string|\think\Collection|\think\Model
 */
function getRoleListByData($data){
    $role = new \app\admin\model\Role();
    return $role->getRoleByData($data,0);
}