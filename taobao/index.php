<?php
header("Content-type: text/html; charset=utf-8");
?>
<!DOCTYPE html>
<html lang="zh">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>客户信息管理</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <script type="text/javascript" src="./assets/jquery-1.8.3.min.js"></script>

    <link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.min.css">
    <script type="text/javascript" src="./assets/bootstrap/js/bootstrap.min.js"></script>
</head>
<body style="background-color: #00a157">
<div class="div1" style="margin-top: 160px">
    <h4 align='center'>客户信息</h4>
    <form id="select_form" action="./add.php" method="post" align='center' onsubmit="return check()">
        <p>——————客户信息——————</p>
        <input type="text" name="name" id="name" placeholder="客户名称" />
        <br/>
        <input type="text" name="account" id="account" placeholder="支付宝账户" onkeyup="this.value=this.value.replace(/[^\d]/g,'')"/>
        <br/>
        <input type="text" name="phone" id="phone" placeholder="联系方式" onkeyup="this.value=this.value.replace(/[^\d]/g,'')"/>
        <br/>
        <textarea type="text" name="user_message" id="user_message" placeholder="客户备注描述" style="height: 60px"></textarea>
        <br/>
        <p>——————交易信息——————</p>
        <input type="text" name="deal_name" id="deal_name" placeholder="货名"/>
        <br/>
        <input type="text" name="money" id="money" placeholder="金额" onkeyup="this.value=this.value.replace(/[^\d]/g,'')"/>
        <br/>
        <input type="text" name="courier" id="courier" placeholder="快递"/>
        <br/>
        <input type="text" name="courier_number" id="courier_number" placeholder="快递单号"/>
        <br/>
        <input type="text" name="address" id="address" placeholder="地址"/>
        <br/>
        <textarea type="text" name="deal_message" id="deal_message" placeholder="货物备注描述" style="height: 60px"></textarea>
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
        if(name == "" || name == null ||account == "" || account == null ||phone == "" || phone == null){
            alert("填写完整信息");
            return false;
        }
    }
</script>
</html>





