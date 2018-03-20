<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:90:"E:\myphp_www\PHPTutorial\WWW\customer_tp5\public/../application/admin\view\menu\index.html";i:1512545220;s:86:"E:\myphp_www\PHPTutorial\WWW\customer_tp5\public/../application/admin\view\layout.html";i:1511669227;s:86:"E:\myphp_www\PHPTutorial\WWW\customer_tp5\public/../application/admin\view\header.html";i:1512812517;s:86:"E:\myphp_www\PHPTutorial\WWW\customer_tp5\public/../application/admin\view\footer.html";i:1512805855;}*/ ?>
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
<form method="post" id="menu_add_form" onsubmit="return menu_add()">
    <input type="text" name="menu_name" placeholder="菜单名称"/>
    <input type="text" name="menu_url" placeholder="菜单路由"/>
    <input type="submit" />
</form>

<table class="table" id="menu_table" width="80%">
    <thead>
    <tr>
        <th>菜单ID</th>
        <th>菜单名称</th>
        <th>上级ID</th>
        <th>菜单路由</th>
        <th>操作</th>
    </tr>
    </thead>
    <tbody>
    <?php if(is_array($menu) || $menu instanceof \think\Collection || $menu instanceof \think\Paginator): $i = 0; $__LIST__ = $menu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$m): $mod = ($i % 2 );++$i;?>
    <tr>
        <td><?php echo $m['menu_id']; ?></td>
        <td><?php echo $m['menu_name']; ?></td>
        <td><?php echo $m['parent_id']; ?></td>
        <td><?php echo $m['menu_url']; ?></td>
        <td>
        <a id="menu_delete" attr-id="<?php echo $m['menu_id']; ?>" title="删除用户">删除</a>
        </td>
    </tr>
    <?php endforeach; endif; else: echo "" ;endif; ?>
    </tbody>
</table>
<?php echo $menu->render(); ?>
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