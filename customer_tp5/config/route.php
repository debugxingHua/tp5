<?php
//\think\Route::rule("index","index/index/index","GET",["ext"=>"html"]);
//\think\Route::rule("about","index/index/about","GET",["ext"=>"html"]);
//\think\Route::rule("news","index/index/news","GET",["ext"=>"html"]);
//\think\Route::rule("works","index/index/works","GET",["ext"=>"html"]);
//\think\Route::rule("contact","index/index/contact","GET",["ext"=>"html"]);

return [
//    "路由规则" => ["路由地址",[路由参数],[变量规则]],
    "/index"                 => ["index/index/index",    ["method" => "get","ext"=>"html"]],
    "/about"                 => ["index/index/about",    ["method" => "get","ext"=>"html"]],
    "/news"                  => ["index/index/news",     ["method" => "get","ext"=>"html"]],
    "/works"                 => ["index/index/works",    ["method" => "get","ext"=>"html"]],
    "/contact"               => ["index/index/contact",  ["method" => "get","ext"=>"html"]],

    //后台主页
    "/admin"                 => ["admin/index/index",    ["method" => "get","ext"=>"html"]],

    //登录与注册
    "/login"                 => ["admin/login/login",    ["method" => "get","ext"=>"html"]],//登录页
    "/check/login"           => ["admin/login/login_action",     ["method"  => "post","ext"=>"html"]],//登录操作
    "/register"              => ["admin/login/register", ["method" => "get","ext"=>"html"]],//注册页
    "/check/register"        => ["admin/login/register_action",  ["method" => "post","ext"=>"html"]],//注册操作
    "/logout"                => ["admin/index/logout",   ["method" => "get","ext"=>"html"]],//退出操作

    //用户管理
    '[user]' => [
        "/index"             => ["admin/user/index",["method" => "get","ext"=>"html"]],//用户列表页
        "/edit/:user_id"     => ["admin/user/edit", ["method" => "get","ext"=>"html"],['user_id'=>'\d+']],//用户编辑页面
        "/delete"            => ["admin/user/delete", ["method" => "post","ext"=>"html"]],//用户删除操作
        "/password"          => ["admin/user/password", ["method" => "post","ext"=>"html"]],//重置密码操作
    ],

    //角色管理
    '[role]' => [
        "/index"             => ["admin/role/index",["method" => "get","ext"=>"html"]],//角色列表页
        "/edit/:role_id"     => ["admin/role/edit", ["method" => "get","ext"=>"html"],['user_id'=>'\d+']],//分配权限页面
        "/add"               => ["admin/role/add",  ["method" => "post","ext"=>"html"]],//角色添加操作
        "/delete"            => ["admin/role/delete", ["method" => "post","ext"=>"html"]],//角色删除操作
    ],

    //菜单管理
    '[menu]' => [
        "/index"             => ["admin/menu/index",["method" => "get","ext"=>"html"]],//菜单列表页
        "/edit/:menu_id"     => ["admin/menu/edit", ["method" => "get","ext"=>"html"],['user_id'=>'\d+']],//编辑菜单
        "/add"               => ["admin/menu/add",  ["method" => "post","ext"=>"html"]],//添加操作
        "/delete"            => ["admin/menu/delete", ["method" => "post","ext"=>"html"]],//删除操作
    ],

    //权限
    '[auth]' => [
        "index"              => ["admin/auth/index",["method" => "get","ext"=>"html"]],//权限首页
        "set_rm"             => ["admin/auth/set_rm",["method" => "post","ext"=>"html"]],//给角色分配菜单权限
        "set_ur"             => ["admin/auth/set_ur",["method" => "post","ext"=>"html"]],//给用户分配角色
    ],
];