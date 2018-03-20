<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:90:"E:\myphp_www\PHPTutorial\WWW\customer_tp5\public/../application/index\view\index\news.html";i:1511669228;}*/ ?>
<!DOCTYPE HTML>
<html>
<head>
<title>解决方案 </title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/static/index/css/style.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="/static/index/js/jquery.min.js"></script>
</head>
<body style="background-color:#f0f0f0;">
<div class="single-header">
  <div class="wrap">
    <div id="#home" class="logo"> <a href="index.html"><img src="/static/index/images/logo.png" alt=""/></a> </div>
    <div class="header-right">
      <div id='cssmenu'>
       <ul>
         <li><a href='about.html'><span>关于我们</span></a></li>
         <li ><a href='index.html'><span>服务</span></a></li>
         <li style="display:none;" class='has-sub'><a href='works.html'><span>媒体</span></a></li>
         <li class='active has-sub'><a href='news.html'><span>解决方案</span></a></li>
         <li class='last' ><a href='contact.html'><span>联系我们</span></a></li>
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
<div class="main">
  <div class="wrap">
    <div class="single-top">
      <div class="wrapper_single">
        <h4 class="m_2">解决方案</h4>
        <div class="wrapper_top">
          <div class="grid_1 alpha">
          </div>
          <div class="cont span_2_of_single">
            <h4 id="mobile" class="blog_title">移动营销平台</h4>
              <img  class="m_img"  src="/static/index/images/O2O.png" alt=""/>
            
           </div>
          <div class="clear"></div>
        </div>
        <div class="wrapper_top">
          <div class="cont span_2_of_single">
            <h4 id="DSP" class="blog_title">DSP精准营销</h4>
             <p class="m_para">
            人群定向——积累和分析目标人群属性、兴趣关注、购买倾向及地域分布等数据，进行产品专属目标人群标签设定，有针对性进行广告展示。</p>
            <p class="m_para"> 媒体定向——根据目标人群不同的网络行为特征，集合PC端、视频端及移动端DSP资源，为客户产品搭建优质媒体组合进行投放。</p>

            <P class="m_para">地域定向——根据产品的不同地域的投放表现，选取转化更高的地域进行大量投放。</P>

            <P class="m_para">时间定向——重点跟进每日曝光点击、每日各时段、各版创意素材、各投放平台、策略及每阶段的投放情况数据，及时分析并优化，保障投放效果。</p>
            <img class="m_img"  src="/static/index/images/DSP.png" alt=""/>
           
          </div>
          <div class="clear"></div>
        </div>
        <div class="wrapper_top">
          <div class="cont span_2_of_single">
            <h4 id="Extension" class="blog_title">电商推广</h4>
            <img class="m_img"  src="/static/index/images/spread.png" alt=""/>
          </div>
          <div class="clear"></div>
        </div>
        <div class="wrapper_top">
          <div class="cont span_2_of_single">
            <h4 id="brand" class="blog_title">品牌管理</h4>
            <img class="m_img"  src="/static/index/images/brand.png" alt=""/>
            
          </div>
          <div class="clear"></div>
        </div>
      </div>
      
      <div class="clear"></div>
    </div>
  </div>
</div>
<div class="footer">
   <div class="copy">
        <div class="about_us">
          北京神州华泰科技有限公司© 2014-2017, All Rights Reserved
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
</body>
</html>