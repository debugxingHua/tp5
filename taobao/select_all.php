<?php
//header("Content-type: text/html; charset=utf-8");
require "pdo_config.php";
//创建数据源
$dsn = "{$dbType}:host={$host};dbname={$dbName}";
try{
    //新建pdo对象
    $pdo = new PDO($dsn,$user,$password);
    echo "<!DOCTYPE html><html lang='zh'>".
        "<head>
           <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
           <title>客户信息管理</title>
           <meta content='width=device-width, initial-scale=1.0' name='viewport' />
           <script type='text/javascript' src='./assets/jquery-1.8.3.min.js'></script>
        </head>";
    echo "<body style='background-color: #00a157'>";
    echo "<a href='index.php' style='text-decoration:none;color: #CCCCCC;font-size: 18px'>&nbsp;[ 返回 ] </a>";
    echo "<h2 align='center'>客户信息列表</h2>";
    echo "<table border='1' cellpadding='5' cellspacing='3' width='70%' align='center'>";
    echo
        "<th width='30%'>客户姓名</th>".
        "<th width='30%'>电话</th>".
//        "<th width='10%'>支&nbsp;付&nbsp;宝</th>".
//        "<th width='15%'>创建时间</th>".
//        "<th width='10%'>快递</th>".
//        "<th width='10%'>运输单号</th>".
        "<th width='30%'>更新时间</th>".
//        "<th width='18%'>地&nbsp;&nbsp;址</th>".
        "<th width='10%'>操&nbsp;&nbsp;作</th>";

    //fetchAll获取全部数据
    $sql = "SELECT * FROM tb_user ORDER BY update_time,create_time";
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
            $row['name']."</td><td>".$row['phone']."</td><td>".$row['update_time']."</td><td>"
                ."<a href='./select_one.php?type=".$row["user_id"]."' style='text-decoration:none;color: #CCCCCC'>[ 查 看]</a>"
                ."</td>";
            echo "</tr>";
        }
    }else if($result && $count == 1){
        $row = $result->fetch();
        echo "<tr align='center'>";
        echo "<td>".$row['name']."</td><td>".$row['phone']."</td><td>".$row['update_time']."</td><td>"
            ."<a href='./select_one.php?type=".$row["user_id"]."' style='text-decoration:none;'>查看</a>"
            ."</td>";
        echo "</tr>";
    }
    echo "</table>";
    echo "<h3 align='center'>[ 共有".$count."个客户 ]"."</h3></body>";
    unset($pdo);
}catch (PDOException $e){
    print "报错：".$e->getMessage();
}
