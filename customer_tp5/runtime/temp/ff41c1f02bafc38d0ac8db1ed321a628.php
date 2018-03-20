<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:90:"E:\myphp_www\PHPTutorial\WWW\customer_tp5\public/../application/admin\view\auth\index.html";i:1511853896;s:86:"E:\myphp_www\PHPTutorial\WWW\customer_tp5\public/../application/admin\view\layout.html";i:1511669227;s:86:"E:\myphp_www\PHPTutorial\WWW\customer_tp5\public/../application/admin\view\header.html";i:1512204407;s:86:"E:\myphp_www\PHPTutorial\WWW\customer_tp5\public/../application/admin\view\footer.html";i:1512117436;}*/ ?>
<?php
    use think\Session;
    $role_auth = getMenuByRoleId();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>神州华泰科技客户管理</title>
    <link rel="stylesheet" href="/static/common/bootstrap3.3.7/css/bootstrap.css" />
</head>
<body>
<div>
    <ul>
        <?php if(is_array($role_auth) || $role_auth instanceof \think\Collection || $role_auth instanceof \think\Paginator): $i = 0; $__LIST__ = $role_auth;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$a): $mod = ($i % 2 );++$i;?>
            <li><a href="<?php echo $a['menu_url']; ?>.html"><?php echo $a['menu_name']; ?></a></li>
        <?php endforeach; endif; else: echo "" ;endif; ?>
        <li><a href="#" onclick="logout()">退出登录</a></li>
    </ul>
</div>

<p>权限首页</p>
<div>
    <!--<form method="post" name="department" id="department" onsubmit="return auth_add()">-->
        <!--<label for="department">添加部门:</label>-->
        <!--<input type="text" name="department_name" placeholder=" 部门名称"/>-->
        <!--<input type="submit" value="添加" />-->
    <!--</form>-->

</div>
</body>
<!--JS-->
<script type="text/javascript" src="/static/common/jquery3.2.1.min.js"></script>
<script type="text/javascript" src="/static/common/bootstrap3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/static/common/common.js"></script>
<script type="text/javascript" src="/static/admin/js/user.js"></script>
<script type="text/javascript" src="/static/admin/js/role.js"></script>
<script type="text/javascript" src="/static/admin/js/menu.js"></script>
<script type="text/javascript" src="/static/admin/js/auth.js"></script>
<!--<script type="text/javascript" src="/static/common/jquery.form.js"></script>-->
<!--<script type="text/javascript" src="/static/admin/js/user.js"></script>-->
</html>