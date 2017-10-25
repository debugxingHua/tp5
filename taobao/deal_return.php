<?php
header("Content-type: text/html; charset=utf-8");
require "pdo_config.php";

//创建数据源
$dsn = "{$dbType}:host={$host};dbname={$dbName}";

try{
    //新建pdo对象
    $pdo = new PDO($dsn,$user,$password);
        //预处理更新
        $update_time = date("Y-m-d H:i:s");
        $sql = "UPDATE tb_deal SET status=:status,update_time=:update_time WHERE deal_id='{$_GET["type"]}'";
        $stmt = $pdo -> prepare($sql);
        $num = $stmt -> execute([":status" => 1,":update_time" => $update_time]);
        if($num > 0){
            echo "成功退款".$num."次交易。";
        }else{
            echo "信息无变化，不用更新";
            echo "<h4><button onclick='history.go(-1)'>返回上页</button></h4>";
        }
    echo "<br/>";
    echo "<a href='index.php' style='text-decoration:none;'>[ 去添加客户 ]</a>";
    echo "<a href='select_all.php' style='text-decoration:none;'>[ 查询客户 ]</a>";
    unset($pdo);
}catch (PDOException $exception){
    die("error:".$exception->getMessage());
}