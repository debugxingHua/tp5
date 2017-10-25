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
    if($_POST["money"] != null && $_POST["courier_number"] != null && $_POST["address"] != null && $_POST["deal_name"] != null ) {
        $deal_sql = "INSERT tb_deal (user_id,deal_message,address,deal_name,money,courier,courier_number,create_time) VALUES " .
            "('{$_POST["user_id"]}','{$_POST["deal_message"]}','{$_POST["address"]}','{$_POST["deal_name"]}','{$_POST["money"]}','
        {$_POST["courier"]}','{$_POST["courier_number"]}','{$createTime}') ";

        $deal_num = $pdo->exec($deal_sql);
        if ($deal_num > 0) {
            echo "成功插入了" . $deal_num . "条交易信息。";
            echo "<br/>";
        } else {
            echo "交易添加失败";
        }
    }
    echo "<br/>";
    echo "<a href='index.php' style='text-decoration:none;'>[ 返回 ]</a>";
    echo "<a href='select_all.php' style='text-decoration:none;'>[ 查询全部 ]</a>";
    unset($pdo);
}catch (PDOException $exception){
    die("报错:".$exception->getMessage());
}