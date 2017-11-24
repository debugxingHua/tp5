<?php
return [
    'app_debug'              => true,
    // 是否开启路由
    'url_route_on'              => true,
    //强制使用路由规则
    'url_route_must'            => false,
    // 默认的访问控制器层
    'url_controller_layer'   => 'controller',
    // 扩展函数文件
    'extra_file_list'        => [THINK_PATH . 'helper' . EXT],
    // 控制器类后缀
    'controller_suffix'      => false,
    // 视图输出字符串内容替换
    'template' => [
        'layout_on' => true,
        'layout'    => 'layout'
    ],
    // | Session设置
    'session'                => [
        'id'             => '',
        // SESSION_ID的提交变量,解决flash上传跨域
        'var_session_id' => '',
        // SESSION 前缀
        'prefix'         => 'think',
        // session 保存时间
        'expire'    => 60,
        // 驱动方式 支持redis memcache memcached
        'type'           => '',
        // 是否自动开启 SESSION
        'auto_start'     => true,
        'httponly'       => false,
        'secure'         => false,
        'use_cookies'    => true,
    ],
    // | Cookie设置
    'cookie'                 => [
        // cookie 名称前缀
        'prefix'    => '',
        // cookie 保存时间
        'expire'    => 60,
        // cookie 保存路径
        'path'      => '/',
        // cookie 有效域名
        'domain'    => '',
        //  cookie 启用安全传输
        'secure'    => false,
        // httponly设置
        'httponly'  => '',
        // 是否使用 setcookie
        'setcookie' => true,
    ],
];
