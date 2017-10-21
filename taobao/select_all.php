<?php
header("Content-type: text/html; charset=utf-8");
require "pdo_config.php";
//创建数据源
$dsn = "{$dbType}:host={$host};dbname={$dbName}";
try{
    //新建pdo对象
    $pdo = new PDO($dsn,$user,$password);
    echo "<body style='background-color: #00a157'>";
    echo "<h6><a href='index.php' style='color: #CCCCCC'>&nbsp;[ 返回 ]</a></h6>";
    echo "<h2 align='center'>客户信息列表</h2>";
    echo "<table border='1' cellpadding='5' cellspacing='0' width='100%' align='center'>";
    echo
        "<th width='10%'>客户姓名</th>".
        "<th width='10%'>电话</th>".
        "<th width='10%'>支&nbsp;付&nbsp;宝</th>".
        "<th width='15%'>创建时间</th>".
        "<th width='15%'>更新时间</th>".
        "<th width='20%'>地&nbsp;&nbsp;址</th>".
        "<th width='20%'>备&nbsp;&nbsp;注</th>";

    //fetchAll获取全部数据
    $sql = "SELECT * FROM tb_user ";
    $result = $pdo->query($sql);
    $count = 0;
    if($result){
        $count = $result->rowCount();
    }
    if($result && $count > 1){
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $rows = $result->fetchAll();
        foreach ($rows as $row){
            echo "<tr align='center'>";
            echo "<td>".
            $row['name']."</td><td>".$row['phone']."</td><td>".$row['account']."</td><td>".$row['create_time'].
            "</td><td>".$row['update_time']."</td><td>".$row['address']."</td><td>".$row['message']."</td>";
            echo "</tr>";
        }
    }else if($result && $count == 1){
        $row = $result->fetch();
        echo "<tr align='center'>";
        echo "<td>".$row['name']."</td><td>".$row['phone']."</td><td>".$row['account']."</td><td>".$row['create_time'].
        "</td><td>".$row['update_time']."</td><td>".$row['address']."</td><td>".$row['message']."</td>";
        echo "</tr>";
    }
    echo "</table>";
    echo "<h3 align='center'>共有".$count."条记录"."</h3></body>";
    unset($pdo);
}catch (PDOException $e){
    print "报错：".$e->getMessage();
}
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
    <script type="text/javascript" src="./assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
    <script type="text/javascript" src="./assets/bootstrap-datepicker/js/bootstrap-datepicker.zh-CN.min.js"></script>
    <script type="text/javascript" src="./assets/bootstrap-datepicker/js/datepicker-common.js"></script>
</head>
<body>
<div class="div1" style="margin-top: 200px">
    <h4 align='center'>查询客户信息</h4>
    <form id="select_form" action="add.php" method="post" align='center'>
        <input type="text" name="name" id="name" placeholder="客户名称"/>
        <br/>
        <input type="text" name="account" id="account" placeholder="支付宝账户"/>
        <br/>
        <input type="text" name="phone" id="phone" placeholder="联系方式"/>
        <br/>
        <input type="text" name="address" id="phone" placeholder="地址"/>
        <br/>
        <input type="text" class="date_picker_start" name="start_time" placeholder="开始时间"/>
        <br/>
        <input type="text" class="date_picker_end" name="end_time" placeholder="结束时间"/>
        <br/>
        <a class="btn btn-navbar" href="select_all.php">查询</a>
    </form>
</div>
</body>
</html>