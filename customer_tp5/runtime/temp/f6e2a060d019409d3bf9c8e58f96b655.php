<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:91:"E:\myphp_www\PHPTutorial\WWW\customer_tp5\public/../application/admin\view\login\login.html";i:1511939443;}*/ ?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="utf-8">
    <title>神州华泰客户管理系统</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- CSS -->
    <link rel="stylesheet" href="/static/admin/css/reset.css">
    <link rel="stylesheet" href="/static/admin/css/style.css">
</head>
<body class="bd">
    <div class="page-container">
        <h1>登录页</h1>
        <form id="login-form" enctype="multipart/form-data" method="post">
            <input type="text" id="user_name" name="user_name" class="username" placeholder="用户名">
            <input type="password" id="password" name="password" placeholder="密码">
            <button type="button" onclick="login()">登录</button>
            <div class="error"><span id="error"></span></div>
        </form>
        <br>
        <div class="connect">
            <p>木有账号？去注册:</p>
            <p>
                <a href="register.html" style="color: #CCCCCC;text-decoration: none"><span >GO</span></a>
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
            login();
        }
    });
</script>
</html>

