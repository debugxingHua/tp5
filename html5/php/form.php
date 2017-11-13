<?php
header('Content-type: text/html; charset=utf-8');
if(isset($_REQUEST)){
    if (isset($_POST["text"])){
        $text = isset($_POST['text'])?  $_POST['text']  :  "文本域请求为空";
        $password = isset($_POST['password'])?  $_POST['password']  :  "密码域请求为空";
        $checkbox = isset($_POST['checkbox'])?  $_POST['checkbox']  :  "复选请求为空";
        $radio = isset($_POST['radio'])?  $_POST['radio']  :  "单选请求为空";
        $select = isset($_POST['select'])?  $_POST['select']  :  "下拉请求为空";
        $text1 = isset($_POST['text1'])?  $_POST['text1']  :  "文本域1请求为空";
        $text2 = isset($_POST['text2'])?  $_POST['text2']  :  "文本域2请求为空";
        $email = isset($_POST['email'])?  $_POST['email']  :  "邮箱请求为空";
        $url = isset($_POST['url'])?  $_POST['url']  :  "url请求为空";
        $number = isset($_POST['number'])?  $_POST['number']  :  "number请求为空";
        $range = isset($_POST['range'])?  $_POST['range']  :  "拖拉值请求为空";
        $date = isset($_POST['date'])?  $_POST['date']  :  "日期请求为空";
        $search = isset($_POST['search'])?  $_POST['search']  :  "搜索请求为空";
        $color = isset($_POST['color'])?  $_POST['color']  :  "颜色请求为空";
        $tel = isset($_POST['tel'])?  $_POST['tel']  :  "电话tel请求为空";
        $dataList = isset($_POST['datalist'])?  $_POST['datalist']  :  "datalist请求为空";
        $security = isset($_POST['security'])?  $_POST['security']  :  "security请求为空";
        $output = isset($_POST['output'])?  $_POST['output']  :  "output请求为空";
        $textarea = isset($_POST['textarea'])?  $_POST['textarea']  :  "文本域textarea请求为空";
        echo
            $text."<br/>".$password."<br/>".$checkbox."<br/>".$radio."<br/>".$select."<br/>".
            $text1."<br/>".$text2."<br/>".$email."<br/>".$url."<br/>".$number."<br/>".
            $range."<br/>".$date."<br/>".$search."<br/>".$color."<br/>".$tel."<br/>".
            $dataList."<br/>".$security."<br/>".$output."<br/>".$textarea;
    }else if (isset($_POST["form_property"])){
        echo "form_property请求为：".$_POST['form_property'].
                "<br/>first为：".$_POST['first']."<br/>last为：".$_POST['last']."<br/>email为：".$_POST['email'];
    }else{
        echo "post请求不存在";
    }
}else{
    echo "请求不存在";
}