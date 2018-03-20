<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:90:"E:\myphp_www\PHPTutorial\WWW\customer_tp5\public/../application/admin\view\role\index.html";i:1512106092;s:86:"E:\myphp_www\PHPTutorial\WWW\customer_tp5\public/../application/admin\view\layout.html";i:1511669227;s:86:"E:\myphp_www\PHPTutorial\WWW\customer_tp5\public/../application/admin\view\header.html";i:1512812517;s:86:"E:\myphp_www\PHPTutorial\WWW\customer_tp5\public/../application/admin\view\footer.html";i:1512805855;}*/ ?>
<?php
    use think\Session;
    $role_auth = getMenuByRoleId();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>神州华泰科技客户管理</title>
    <!--<link rel="stylesheet" href="/static/common/bootstrap3.3.7/css/bootstrap.css" />-->
    <link rel="stylesheet" href="/static/admin/css/admin.css" />
</head>
<body>
<div class="container">
<!--logo-->
<div>
    <div id="div_height"></div>
</div>
<!--nav-->
<nav>
    <?php if(is_array($role_auth) || $role_auth instanceof \think\Collection || $role_auth instanceof \think\Paginator): $i = 0; $__LIST__ = $role_auth;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$a): $mod = ($i % 2 );++$i;?>
        <li><a href="<?php echo $a['menu_url']; ?>.html"><?php echo $a['menu_name']; ?></a></li>
    <?php endforeach; endif; else: echo "" ;endif; ?>
    <li><a href="#" onclick="logout()">退出登录</a></li>
</nav>

<h3>角色管理</h3>
<form method="post" id="role_add_form" onsubmit="return role_add()">
    <input type="text" name="role_name" placeholder="角色名称"/>
    <input type="submit" />
</form>
<table class="table" id="role_table" width="80%">
    <thead>
    <tr>
        <th>角色ID</th>
        <th>角色名称</th>
        <th>操作</th>
    </tr>
    </thead>
    <tbody>
    <?php if(is_array($role) || $role instanceof \think\Collection || $role instanceof \think\Paginator): $i = 0; $__LIST__ = $role;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$r): $mod = ($i % 2 );++$i;?>
    <tr>
        <td><?php echo $r['role_id']; ?></td>
        <td><?php echo $r['role_name']; ?></td>
        <td>
            <a id="role_edit"   attr-id="<?php echo $r['role_id']; ?>" title="详细信息">查看</a>
            <a id="role_delete" attr-id="<?php echo $r['role_id']; ?>" title="删除用户">删除</a>
        </td>
    </tr>
    <?php endforeach; endif; else: echo "" ;endif; ?>
    </tbody>
</table>
<?php echo $role->render(); ?>
<footer>这里是个底部</footer>
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