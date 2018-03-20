<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:89:"E:\myphp_www\PHPTutorial\WWW\customer_tp5\public/../application/admin\view\role\edit.html";i:1512380512;s:86:"E:\myphp_www\PHPTutorial\WWW\customer_tp5\public/../application/admin\view\layout.html";i:1511669227;s:86:"E:\myphp_www\PHPTutorial\WWW\customer_tp5\public/../application/admin\view\header.html";i:1512545879;s:86:"E:\myphp_www\PHPTutorial\WWW\customer_tp5\public/../application/admin\view\footer.html";i:1512117436;}*/ ?>
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
        <?php if(is_array($role_auth) || $role_auth instanceof \think\Collection || $role_auth instanceof \think\Paginator): $i = 0; $__LIST__ = $role_auth;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$a): $mod = ($i % 2 );++$i;if(($a['menu_url'] == '') AND ($a['parent_id'] ==0 )): ?><li><?php echo $a['menu_name']; ?></li>
        <?php else: ?> <li><a href="<?php echo $a['menu_url']; ?>.html"><?php echo $a['menu_name']; ?></a></li>
        <?php endif; endforeach; endif; else: echo "" ;endif; ?>
        <li><a href="#" onclick="logout()">退出登录</a></li>
    </ul>
</div>

<button onclick="history.go(-1)">返回</button>
<table class="table" id="role_table_edit" style="width: 60%" align="center">
    <thead>
    <tr>
        <th colspan="2" style="text-align: center">角色：<?php echo $role['role_name']; ?> 的菜单权限列表</th>
    </tr>
    <tr>
        <th>菜单名称</th>
        <th>角色分配</th>
    </tr>
    </thead>
    <tbody>
    <?php if(is_array($menu_list) || $menu_list instanceof \think\Collection || $menu_list instanceof \think\Paginator): $i = 0; $__LIST__ = $menu_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ml): $mod = ($i % 2 );++$i;?>
    <tr>
        <form id="role_menu_form" method="post">
            <input type="text" name="role_id" value="<?php echo $role['role_id']; ?>" hidden/>
            <td>
                <?php echo $ml['menu_name']; ?>
            </td>
            <td>
                <a type="button" id="set_role_auth" attr-id="<?php echo $ml['menu_id']; ?>" role-id="<?php echo $role['role_id']; ?>">
                    <?php echo $ml['bool']==true?'<span style="color: blue">已授权</span>' : '<span style="color: red">未授权</span>'; ?>
                </a>
            </td>
        </form>
    </tr>
    <?php endforeach; endif; else: echo "" ;endif; ?>
    </tbody>
</table>
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