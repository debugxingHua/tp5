<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add customer</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <script type="text/javascript" src="./assets/jquery-1.8.3.min.js"></script>

    <link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.min.css">

    <script type="text/javascript" src="./assets/bootstrap/js/bootstrap.min.js"></script>
</head>
<body style="background-color: #00a157">
<div class="div1" style="margin-top: 160px">
    <h4 align='center'>查询客户信息</h4>
    <form id="select_form" action="add.php" method="post" align='center' onsubmit="return check()">
        <input type="text" name="name" id="name" placeholder="客户名称"/>
        <br/>
        <input type="text" name="account" id="account" placeholder="支付宝账户"/>
        <br/>
        <input type="text" name="phone" id="phone" placeholder="联系方式"/>
        <br/>
        <input type="text" name="address" id="address" placeholder="地址"/>
        <br/>
        <textarea type="text" name="message" id="message" placeholder="备注描述" style="height: 60px"></textarea>
        <br/>
        <input class="btn btn-navbar" type="submit" value="添加"/>
        <a class="btn btn-navbar" href="select_all.php" style="margin-left: 30px">查询</a>
    </form>
</div>
</body>
<script type="text/javascript">
    function check() {
        var name = $("#name").val();
        var account = $("#account").val();
        var phone = $("#phone").val();
        var address = $("#address").val();
        if(name == "" || name == null ||account == "" || account == null ||phone == "" || phone == null ||address == "" || address == null){
            alert("填写完整信息");
            return false;
        }
    }
</script>
</html>





