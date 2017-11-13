<?php
header("Content-type:text/html;charset=utf-8");
if(isset($_REQUEST)){
    echo 'form2表单页面!<br/>';
    if (isset($_POST["form_property"]) && $_POST["form_property"] == "form_property"){
        echo "form_property请求为：".$_POST['form_property'].
            "<br/>first为：".$_POST['first']."<br/>last为：".$_POST['last']."<br/>email为：".$_POST['email'];
    }else if (isset($_POST['file']) && $_POST["form_property"] == "file"){
        var_dump($_POST['file']);
    }
}else{
    echo "请求不存在";
}