<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:91:"E:\myphp_www\PHPTutorial\WWW\customer_tp5\public/../application/index\view\index\index.html";i:1511669228;}*/ ?>
  <!DOCTYPE HTML>
  <html>
  <head>
  <title>北京神州华泰科技有限公司</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="keywords" content="品牌营销,网红直播,淘宝营销,新媒体营销,互联网策划">
  <link href="/static/index/css/style.css" rel="stylesheet" type="text/css" media="all" />
  <!-- jQuery -->
  <script type="text/javascript" src="/static/index/js/jquery.min.js"></script>
  <!-- Add fancyBox main JS and CSS files -->
  <script src="/static/index/js/jquery.magnific-popup.js" type="text/javascript"></script>
  <link href="/static/index/css/magnific-popup.css" rel="stylesheet" type="text/css">
  <script>
  			$(document).ready(function() {
  				$('.popup-with-zoom-anim').magnificPopup({
  					type: 'inline',
  					fixedContentPos: false,
  					fixedBgPos: true,
  					overflowY: 'auto',
  					closeBtnInside: true,
  					preloader: false,
  					midClick: true,
  					removalDelay: 300,
  					mainClass: 'my-mfp-zoom-in'
  			});
  		});
  		</script>
  <script src="/static/index/js/jquery.hoverdir.js"></script>
  <script type="text/javascript">
  			$(function() {
  			
  				$(' #da-thumbs > li ').each( function() { $(this).hoverdir({
  					hoverDelay : 50,
  					inverse : true
  				}); } );

  			});
      </script>
  </head>
  <body style="background-color:#f0f0f0;">
  <div class="header">
    <div class="wrap">
      <div id="home" class="logo"> <a href="index.html"><img src="/static/index/images/logo.png" alt=""/></a> </div>
      <div class="header-right">
        <div id='cssmenu'>
          <ul>
            <li><a href='about.html'><span>关于我们</span></a></li>
            <li class="active"><a href='index.html'><span>服务</span></a></li>
            <li style="display:none;" class='has-sub'><a href='works.html'><span>媒体</span></a></li>
            <li class='has-sub'><a href='news.html'><span>解决方案</span></a></li>
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
  <div class="index-banner">
    <div class="wrap">
      <div class="wmuSlider example1">
        <article style="position: absolute; width: 100%; opacity: 0;">
          <div class="banner-wrap">
            <div class="cont span_2_of_3">
              <h1>软件开发</h1>
            </div>
            <div class="rsidebar span_1_of_3">
              <div class="btn"><a href="news.html">解决方案</a></div>
            </div>
            <div class="clear"></div>
          </div>
          <div class="banner"> <img src="/static/index/images/soft.png" alt=""/> </div>
        </article>
        <article style="position: relative; width: 100%; opacity: 1;">
          <div class="banner-wrap">
            <div class="cont span_2_of_3">
              <h1>品牌推广</h1>
            </div>
            <div class="rsidebar span_1_of_3">
              <div class="btn"><a href="contact.html">联系我们</a></div>
            </div>
            <div class="clear"></div>
          </div>
          <div class="banner"> <img src="/static/index/images/extend.png" alt=""/> </div>
        </article>
        <article style="position: absolute; width: 100%; opacity: 0;">
          <div class="banner-wrap">
            <div class="cont span_2_of_3">
              <h1>文案策划</h1>
            </div>
            <div class="rsidebar span_1_of_3">
              <div class="btn"><a href="about.html">关于我们</a></div>
            </div>
            <div class="clear"></div>
          </div>
          <div class="banner"> <img src="/static/index/images/edit.png" alt=""/> </div>
        </article>
      </div>
    </div>
    <script src="/static/index/js/jquery.wmuSlider.js"></script>
    <script>
         				     $('.example1').wmuSlider();         
     					</script>
  </div>
  <div class="main">
    <div class="wrap">
      <div class="content-top">
        <div class="col_1_of_4 span_1_of_4">
          <h3>效果营销平台</h3>
          <a class="popup-with-zoom-anim" href="#marketingEffect">
            <img  src="/static/index/images/sale.png" alt="" onmouseover="this.src='/static/index/images/in_blue.png'" onmouseout="this.src='/static/index/images/sale.png'"/> 
          </a>
        </div>
        <div class="col_1_of_4 span_1_of_4">
          <h3>DSP精准营销平台</h3>
          <a class="popup-with-zoom-anim" href="#precisionMarketing">
            <img src="/static/index/images/precisionsale.png" alt="" onmouseover="this.src='/static/index/images/in_yellow.png'" onmouseout="this.src='/static/index/images/precisionsale.png'" />
          </a>
        </div>
        <div class="col_1_of_4 span_1_of_4">
          <h3>网红直播合作</h3>
          <a class="popup-with-zoom-anim" href="#live">
             <img src="/static/index/images/live.png" alt="" onmouseover="this.src='/static/index/images/in_red.png'" onmouseout="this.src='/static/index/images/live.png'" />
          </a>
        </div>
        <div class="col_1_of_4 span_1_of_4">
          <h3>达人分享</h3>
          <a class="popup-with-zoom-anim" href="#share">
             <img src="/static/index/images/share.png" alt="" onmouseover="this.src='/static/index/images/in_deepBlue.png'" onmouseout="this.src='/static/index/images/share.png'" />
          </a>
        </div>
        <div class="clear"></div>
        <div id="marketingEffect" class="mfp-hide">
              <div class="sevices_sale">
                  <div>
                    <img src="" alt="营销效果">
                  </div>
                  <div class="desc">
                    <p>
                      效果营销平台具备专业的市场营销整合能力。广告
                      投放全程监控，多维度数据实时分析，优化投放策
                      略，实现广告效果最大化，提升流量价值。目前效
                      果营销平台已拥有上万家合作网站，覆盖20多种类
                      型的网站媒体，广告日曝光量达到千万级别。
                   </p>
                  </div>
              </div>
        </div>
        <div id="precisionMarketing" class="mfp-hide">
              <div class="sevieces_precision">
                <div>
                  <img src="" alt="DSP精准营销">
                </div>
                <div class="desc">
                  <p>
                    通过对网络流量的各类属性采集分析，深度挖掘用
                    户的行为数据，根据对目标受众人群建立准确全面
                    的了解，确定传播策略及机制的设定，充分利用媒
                    体优质资源与互动、定向、数据分析等多重强大技
                    术能力，助力提升精准营销效果。
                  </p>
                </div>
              </div>
        </div>
        <div id="live" class="mfp-hide">
              <div class="services_live">
                <div>
                  <img src="" alt="网红直播合作">
                </div>
                <div class="desc">
                  <p>
                    网红直播, 覆盖近万优质视频资源,传播快,性价比高!网红直播,优质广告资源任您选。大量优质自媒体!聚合多主题短视频，直播自媒体资源。热门网红汇集亿万垂直粉丝,网红直播,创意卖点直击精准用户
                  </p>
                </div>
              </div>
        </div>
        <div id="share" class="mfp-hide">
              <div class="services_share">
                <div>
                 <img src="" alt="达人分享"> 
                </div>
                <div class="desc"> 
                  <p>
                    与国内多个大平台合作。精选优质卖家产品，对产品进行类别和品质划分，功能性测评。分享搭配秘籍，修炼变美攻略，给用户全新的购物体验。
                  </p>
                </div>
              </div>
        </div>
      </div>
    </div>
    <div class="content-bottom">
      <div class="wrap">
        <h2 class="head">解决方案</h2>
        <div class="bottom-box">
          <div class="col_1_of_4 span_1_of_4">
            
            <a href="news.html#mobile">
              <img class="imgborder" alt="" src="/static/index/images/mobile.png"> 
            </a>
            <div class="text">
              <h4>移动营销平台</h4>
            </div>
          </div>
          <div class="col_1_of_4 span_1_of_4"> 
           
            <a href="news.html#DSP">
               <img class="imgborder" alt="" src="/static/index/images/DSPSmall.png">
            </a>
            <div class="text">
              <h4>DSP精准营销</h4>
            </div>
          </div>
          <div class="col_1_of_4 span_1_of_4">
            
            <a href="news.html#Extension">
              <img class="imgborder" alt="" src="/static/index/images/Extension.png">
            </a>
            <div class="text">
              <h4>电商推广</h4>
            </div>
          </div>
          <div class="col_1_of_4 span_1_of_4">
            
            <a href="news.html#brand">
               <img class="imgborder" alt="" src="/static/index/images/brandstrength.png">
            </a>
            <div class="text">
              <h4>品牌管理</h4>
            </div>
          </div>
          <div class="clear"></div>
        </div>
    </div>
    <div class="clients">
      <div class="wrap">
        <h2 class="head">合作伙伴</h2>
        <ul id="flexiselDemo3">
          <li><img src="/static/index/images/supor.png" /></li>
          <li><img src="/static/index/images/hisense.png" /></li>
          <li><img src="/static/index/images/zhoudasheng.png" /></li>
          <li><img src="/static/index/images/laofengxiang.png" /></li>
          <li><img src="/static/index/images/alibaba.png" /></li>

          <li><img src="/static/index/images/tencent.png" /></li>
          <li><img src="/static/index/images/baidu.png" /></li>
          <li><img src="/static/index/images/handuyishe.png" /></li>
          <li><img src="/static/index/images/sanzhisongshu.png" /></li>
          <li><img src="/static/index/images/coolpad.png" /></li>
        </ul>
        <script type="text/javascript">
  		$(window).load(function() {
  			$("#flexiselDemo1").flexisel();
  			$("#flexiselDemo2").flexisel({
  				enableResponsiveBreakpoints: true,
  		    	responsiveBreakpoints: { 
  		    		portrait: { 
  		    			changePoint:480,
  		    			visibleItems: 1
  		    		}, 
  		    		landscape: { 
  		    			changePoint:640,
  		    			visibleItems: 2
  		    		},
  		    		tablet: { 
  		    			changePoint:768,
  		    			visibleItems: 3
  		    		}
  		    	}
  		    });
  		
  			$("#flexiselDemo3").flexisel({
  				visibleItems: 5,
  				animationSpeed: 1000,
  				autoPlay: true,
  				autoPlaySpeed: 3000,    		
  				pauseOnHover: true,
  				enableResponsiveBreakpoints: true,
  		    	responsiveBreakpoints: { 
  		    		portrait: { 
  		    			changePoint:480,
  		    			visibleItems: 1
  		    		}, 
  		    		landscape: { 
  		    			changePoint:640,
  		    			visibleItems: 2
  		    		},
  		    		tablet: { 
  		    			changePoint:768,
  		    			visibleItems: 3
  		    		}
  		    	}
  		    });
  		    
  		});
  	</script>
        <script type="text/javascript" src="/static/index/js/jquery.flexisel.js"></script>
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