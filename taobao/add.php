<?php
header("Content-type: text/html; charset=utf-8");
require "pdo_config.php";

//创建数据源
$dsn = "{$dbType}:host={$host};dbname={$dbName}";

try{
    //新建pdo对象
    $pdo = new PDO($dsn,$user,$password);
    //数据
    $createTime = date("Y-m-d H:i:s");
    //添加
    $sql = "INSERT tb_user (name,account,phone,address,create_time) VALUES ('{$_POST["name"]}','{$_POST["account"]}','{$_POST["phone"]}','{$_POST["address"]}','{$createTime}') ";
    $num = $pdo->exec($sql);
    $lastId = $pdo->lastInsertId();
    if($num > 0){
        echo "成功插入了".$num."条记录 , 新增记录的id为：".$lastId;
        echo "<br/>";
        echo "<a href='index.php'>[ 返回 ]</a>";
        echo "<a href='select_all.php'>[ 查询全部 ]</a>";
    }else{
        print "error".$num;
    }

    //预处理更新
//    $update_time = date("Y-m-d H:i:s");
//    $sql = "UPDATE edu_user SET name=:name,update_time=:update_time WHERE id=4";
//    $stmt = $pdo -> prepare($sql);
//    $num = $stmt -> execute([":name" => "admin3",":update_time" => $update_time]);
//    if($num > 0){
//        echo "成功更新了".$num."条记录。";
//    }
    unset($pdo);
}catch (PDOException $exception){
    die("error:".$exception->getMessage());
}