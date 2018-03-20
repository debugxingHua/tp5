<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:94:"E:\myphp_www\PHPTutorial\WWW\customer_tp5\public/../application/admin\view\login\register.html";i:1511939449;}*/ ?>
<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="utf-8">
    <title>神州华泰客户管理系统</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="注册页面">
    <meta name="author" content="xinghua">

    <!-- CSS -->
    <link rel="stylesheet" href="/static/admin/css/reset.css">
    <link rel="stylesheet" href="/static/admin/css/style.css">
    <!--<link rel="stylesheet" href="/static/common/layui/css/layui.css">-->
</head>

<body class="bd">
<div class="page-container">
    <h1>注册页</h1>
    <form id="register-form" name="register-form" action="#" method="post" onsubmit="return register()">
        <input type="text" id="user_name" name="user_name" class="username" placeholder="用户名">
        <input type="password" id="password" name="password" class="password" placeholder="密码">
        <input type="text" id="real_name" name="real_name" class="" placeholder="真实姓名">
        <input type="text" id="phone" name="phone" class="" placeholder="必填项-手机">
        <input type="text" id="qq" name="qq" class="" placeholder="选填-qq">
        <input type="text" id="email" name="email" class="" placeholder="选填-邮箱">
        <input type="submit" class="button" value="注册" />
        <!--<button type="button" onclick="user.register()">注册</button>-->
    </form>
    <div class="connect">
        <p>已有账号？去登录:</p>
        <p>
            <a href="login.html" style="color: #CCCCCC;text-decoration: none"><span >GO</span></a>
        </p>
    </div>
</div>
    <div align="center" class="hc">
        <p>『神州华泰科技有限公司』</p>
        <br>
        <p>「客户管理系统」</p>
    </div>
</body>
<!--JS-->
<script type="text/javascript" src="/static/common/jquery3.2.1.min.js"></script>
<script type="text/javascript" src="/static/common/common.js"></script>
<!--<script type="text/javascript" src="/static/common/jquery.form.js"></script>-->
<!--<script type="text/javascript" src="/static/common/layui/layui.js"></script>-->
<script type="text/javascript" src="/static/admin/js/login.js"></script>
<script type="text/javascript">
    $(document).keypress(function(event){
        var keynum = (event.keyCode ? event.keyCode : event.which);
        if(keynum == '13'){
            register();
        }
    });
</script>
</html>

