<?php
//\think\Route::rule("index","index/index/index","GET",["ext"=>"html"]);
//\think\Route::rule("about","index/index/about","GET",["ext"=>"html"]);
//\think\Route::rule("news","index/index/news","GET",["ext"=>"html"]);
//\think\Route::rule("works","index/index/works","GET",["ext"=>"html"]);
//\think\Route::rule("contact","index/index/contact","GET",["ext"=>"html"]);

return [
//    "路由规则" => ["路由地址",[路由参数],[变量规则]],
    "index"     => ["index/index/index",    ["method" => "get","ext"=>"html"]],
    "about"     => ["index/index/about",    ["method" => "get","ext"=>"html"]],
    "news"      => ["index/index/news",     ["method" => "get","ext"=>"html"]],
    "works"     => ["index/index/works",    ["method" => "get","ext"=>"html"]],
    "contact"   => ["index/index/contact",  ["method" => "get","ext"=>"html"]],

    //后台主页
    "admin"     => ["admin/index/index",    ["method" => "get","ext"=>"html"]],
    //用户管理user
    "login"     => ["admin/login/login",    ["method" => "get","ext"=>"html"]],
    "user/login"=> ["admin/user/login",     ["method"  => "post","ext"=>"html"]],

    "register"  => ["admin/login/register", ["method" => "get","ext"=>"html"]],
    "user/register"  => ["admin/user/register", ["method" => "post","ext"=>"html"]],

    "logout"  => ["admin/index/logout", ["method" => "get","ext"=>"html"]],
];