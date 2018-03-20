<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:89:"E:\myphp_www\PHPTutorial\WWW\customer_tp5\public/../application/admin\view\user\edit.html";i:1512468093;s:86:"E:\myphp_www\PHPTutorial\WWW\customer_tp5\public/../application/admin\view\layout.html";i:1511669227;s:86:"E:\myphp_www\PHPTutorial\WWW\customer_tp5\public/../application/admin\view\header.html";i:1512545879;s:86:"E:\myphp_www\PHPTutorial\WWW\customer_tp5\public/../application/admin\view\footer.html";i:1512117436;}*/ ?>
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
<table class="table" id="" style="width: 80%" align="center">
    <thead>
    <tr>
        <th colspan="2" style="text-align: center"><?php echo $user['real_name']; ?> 的信息列表</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>用户名</td>
        <td><?php echo $user['user_name']; ?></td>
    </tr>
    <tr>
        <td>角色</td>
        <td>
            <?php echo role_by_id($user['role_id']); ?>
        </td>
    </tr>
    <tr>
        <td>QQ</td>
        <td><?php echo $user['qq']; ?></td>
    </tr>
    <tr>
        <td>手机</td>
        <td><?php echo $user['phone']; ?></td>
    </tr>
    <tr>
        <td>Email</td>
        <td><?php echo $user['email']; ?></td>
    </tr>
    <tr>
        <td>注册时间</td>
        <td><?php echo $user['createdate']; ?></td>
    </tr>
    <tr>
        <td>最后一次登录时间</td>
        <td><?php echo date('Y-m-d H:i:s',$user['lastlogintime']); ?></td>
    </tr>
    <tr>
        <td>最后登录ip</td>
        <td><?php echo $user['lastloginip']; ?></td>
    </tr>
    <tr>
        <td>状态</td>
        <td><?php echo user_status($user['status']); ?></td>
    </tr>
    <tr>
        <td>操作</td>
        <td>
            <form id="set_user_role_form" onsubmit="return user_set_role()">
                <input type="text" name="user_id" id="user_id" value="<?php echo $user['user_id']; ?>" hidden/>
                <select name="user_role_id">
                    <?php if(is_array($role_list) || $role_list instanceof \think\Collection || $role_list instanceof \think\Paginator): $i = 0; $__LIST__ = $role_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$rl): $mod = ($i % 2 );++$i;?>
                    <option value="<?php echo $rl['role_id']; ?>"><?php echo $rl['role_name']; ?></option>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </select>
                <input type="submit" value="分配角色">
            </form>
            <button onclick="user_set_pw(<?php echo $user['user_id']; ?>)">重置密码</button>
            <button onclick="user_delete(<?php echo $user['user_id']; ?>)">删除用户</button>
        </td>
    </tr>
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