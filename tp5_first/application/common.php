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

function menu_list(){

    return "caonima";
}