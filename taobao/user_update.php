<?php
header("Content-type: text/html; charset=utf-8");
require "pdo_config.php";

//创建数据源
$dsn = "{$dbType}:host={$host};dbname={$dbName}";

try{
    //新建pdo对象
    $pdo = new PDO($dsn,$user,$password);
    if($_REQUEST && $_POST["name"] != null && $_POST["phone"] != null && $_POST["account"] != null && $_POST["user_id"] > 0){
        //预处理更新
        $update_time = date("Y-m-d H:i:s");
        $sql = "UPDATE tb_user SET name=:name,phone=:phone,account=:account,update_time=:update_time,user_message=:user_message WHERE user_id='{$_POST["user_id"]}'";
        $stmt = $pdo -> prepare($sql);
        $num = $stmt -> execute([":name" => $_POST['name'],":update_time" => $update_time,
            ":phone" => $_POST['phone'],":account" => $_POST['account'],":user_message" => $_POST['user_message']]);
        if($num > 0){
            echo "成功更新了".$num."次客户【".$_POST['name']."】的信息。";
        }else{
            echo "信息无变化，不用更新";
            echo "<h4><button onclick='history.go(-1)'>返回上页</button></h4>";
        }
    }
    echo "<br/>";
    echo "<a href='index.php' style='text-decoration:none;'>[ 去添加客户 ]</a>";
    echo "<a href='select_all.php' style='text-decoration:none;'>[ 查询客户 ]</a>";
    unset($pdo);
}catch (PDOException $exception){
    die("error:".$exception->getMessage());
}