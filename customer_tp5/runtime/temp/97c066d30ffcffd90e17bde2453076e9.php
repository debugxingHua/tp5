<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:93:"E:\myphp_www\PHPTutorial\WWW\customer_tp5\public/../application/index\view\index\contact.html";i:1511669227;}*/ ?>
<!DOCTYPE HTML>
<html>
<head>
<title>联系我们</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/static/index/css/style.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="/static/index/js/jquery.min.js"></script>
 <!-- <script type="text/javascript" src="http://api.map.baidu.com/api?ak=申请的Key&v=2.0&services=false"></script> -->
<script type="text/javascript" src="http://api.map.baidu.com/api?v=1.4"></script>
</head>
<body style="background-color:#f0f0f0;">
<div class="single-header">
  <div class="wrap">
    <div id="home " class="logo"> <a href="index.html"><img src="/static/index/images/logo.png" alt=""/></a> </div>
    <div class="header-right">
      <div id='cssmenu'>
        <ul>
          <li><a href='about.html'><span>关于我们</span></a></li>
          <li ><a href='index.html'><span>服务</span></a></li>
          <li style="display:none;" class='has-sub'><a href='works.html'><span>媒体</span></a></li>
          <li class='has-sub'><a href='news.html'><span>解决方案</span></a></li>
          <li class='active last' ><a href='contact.html'><span>联系我们</span></a></li>
        </ul>
      </div>
      <div class="search_box">
        <form>
          <input type="text" value="搜索" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = '搜索';}">
          <input type="submit" value="">
        </form>
      </div>
    </div>
    <div class="clear"></div>
  </div>
</div>
<div class="work-top">
  <div class="wrap">
    <div class="single-left">
      <h1><img src="/static/index/images/contact.png" id="icon_contact"> 联系我们</h1>
    </div>
    <div class="clear"></div>
  </div>
</div>
<div class="main">
  <div class="contact">
    <div class="wrap">
        <div class="col_1_of_2 span_1_of_2">
          <h4 class="contact-head">我们的位置</h4>
          <div class="map">
            <div class="map-border" >
            
                <div id="maps" style="width:100%;height:400px"></div>
                
            </div>
          </div>
          <ul class="list3">
            <li> <img src="/static/index/images/location.png" alt=""/>
              <div class="company_address">
                <h3>公司信息</h3>
                <p>北京市昌平区融泽嘉园12号院3号楼4层</p>
                <p>Phone:010-56139183</p>
                <p>Email: <span>2060397449@qq.com</span></p>
              </div>
            </li>
          </ul>
        </div>
        <div class="clear"></div>
      </div>
  <!--   </div>
  </div>
</div> -->
<div class="footer">
  <div class="copy">
        <div class="about_us">
          北京神州华泰科技有限公司© 2013-2017, All Rights Reserved
        </div>
   </div>
</div>
  <a href="#home" id="toTop" class="scroll" style="display: none;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<script>
$(function(){
        //当滚动条的位置处于距顶部100像素以下时，跳转链接出现，否则消失
        $(function () {
            $(window).scroll(function(){
                if ($(window).scrollTop()>100){
                    $("#toTop").fadeIn(1500);
                }
                else
                {
                    $("#toTop").fadeOut(1500);
                }
            });
            //当点击跳转链接后，回到页面顶部位置
            $("#toTop").click(function(){
                $('body,html').animate({scrollTop:0},1000);
                return false;
            });
        });
    });
</script>
<script type="text/javascript">
      var map = new BMap.Map("maps");  //创建Map实例

      var point = new BMap.Point(116.3072743427,40.0686091128);  //创建point位置

      map.centerAndZoom(point, 16);  //设置地图中心点及缩放级别

      window.setTimeout(function(){  
        map.panTo(new BMap.Point(116.3072743427,40.0686091128));    
      }, 2000);//让地图平滑移动至新中心点，如果移动距离超过了当前地图区域大小，则地图会直跳到该点。  

      map.addControl(new BMap.MapTypeControl());  //添加地图类型控件

      var marker = new BMap.Marker(point);  //创建一个Marker点

      map.addOverlay(marker);  //将Marker点覆盖到地图上

      marker.setAnimation(BMAP_ANIMATION_BOUNCE);  //使Marker点跳动起来

      map.addControl(new BMap.NavigationControl()); //添加一个缩放控件

      map.addControl(new BMap.OverviewMapControl());//在右下角添加一个微缩地图
      
      map.enableScrollWheelZoom(true);     //开启鼠标滚轮缩放
</script>
</body>
</html>