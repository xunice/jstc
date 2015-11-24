<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport"
        content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta name="format-detection" content="telephone=no">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp"/>
<title>旗袍详情</title>

<link rel="stylesheet" type="text/css" href="__PUBLIC__/assets/css/amazeui.min.css" />
<link rel="stylesheet" type="text/css" href="__PUBLIC__/assets/css/app.css" />
  <style>
    @media only screen and (min-width: 641px) {
      .am-offcanvas {
        display: block;
        position: static;
        background: none;
      }

      .am-offcanvas-bar {
        position: static;
        width: auto;
        background: none;
        -webkit-transform: translate3d(0, 0, 0);
        -ms-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
      }
      .am-offcanvas-bar:after {
        content: none;
      }

    }
    
    @media only screen and (max-width: 640px) {
      .am-offcanvas-bar .am-nav>li>a {
        color:#ccc;
        border-radius: 0;
        border-top: 1px solid rgba(0,0,0,.3);
        box-shadow: inset 0 1px 0 rgba(255,255,255,.05)
      }

      .am-offcanvas-bar .am-nav>li>a:hover {
        background: #404040;
        color: #fff
      }

      .am-offcanvas-bar .am-nav>li.am-nav-header {
        color: #777;
        background: #404040;
        box-shadow: inset 0 1px 0 rgba(255,255,255,.05);
        text-shadow: 0 1px 0 rgba(0,0,0,.5);
        border-top: 1px solid rgba(0,0,0,.3);
        font-weight: 400;
        font-size: 75%
      }

      .am-offcanvas-bar .am-nav>li.am-active>a {
        background: #1a1a1a;
        color: #fff;
        box-shadow: inset 0 1px 3px rgba(0,0,0,.3)
      }

      .am-offcanvas-bar .am-nav>li+li {
        margin-top: 0;
      }
    }

    .my-head {
      margin-top: 40px;
      text-align: center;
    }

    .my-button {
      position: fixed;
      top: 50px;
      left: 0;
      border-radius: 0;
    }
    .my-sidebar {
      padding-right: 0;
      border-right: 1px solid #eeeeee;
    }
  </style>
<script type="text/javascript">
$(function(){
  
      //如果。icona-dded[表现为已经被加入书签]  其后有同辈元素，则隐藏他
      $(".icon-added").next( "a").remove();

      $(".article-desc-brief .view-detail-context .view-detail").click(function(){
        $(this).parent().parent(".article-desc-brief").hide();
        $(this).parent().parent(".article-desc-brief").next().show();
      })

      $(".article-desc-full .view-detail-context .view-detail").click(function(){
       $(this).parent().parent(".article-desc-full").hide();
        $(this).parent().parent().prev(".article-desc-brief").show();
         
      })



})
</script>
</head>

<body>
<header class="am-topbar am-topbar-fixed-top">
  <div class="am-container">
    <h1 class="am-topbar-brand">
      <a href="__APP__/">久顺天成</a>
    </h1>

    <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-secondary am-show-sm-only"
            data-am-collapse="{target: '#collapse-head'}"><span class="am-sr-only">导航切换</span> <span
        class="am-icon-bars"></span></button>

    <div class="am-collapse am-topbar-collapse" id="collapse-head">
      <ul class="am-nav am-nav-pills am-topbar-nav">
        <li class="am-active index"><a href="__APP__/">首页</a></li>
        <li class="views"><a href="__APP__/views">产品中心</a></li>
        <li class="project"><a href="__APP__/project">工程案例</a></li>
        <li class="support"><a href="__APP__/support">技术支持</a></li>
        <li class="news"><a href="__APP__/news">新闻中心</a></li>
        <li class="gongyi"><a href="__APP__/gongyi">公益事业</a></li>
        <li class="contact"><a href="__APP__/contact">联系我们</a></li>
        <li class="about"><a href="__APP__/about">关于我们</a></li>
      </ul>
    </div>
  </div>
</header>
<script type="text/javascript" src="__PUBLIC__/assets/js/jquery.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/assets/js/header.js"></script>

<!--- 内容 ---->



 <div class="am-g am-container">
    <br>
    <div class="am-u-lg-12">
      <div class="am-u-lg-4">
        <img class="am-img-thumbnail am-img-bdrs" src="__PUBLIC__/Uploads/m_<?php echo ($qipao["image"]); ?>" alt=""/>
      </div>
      <div class="am-u-lg-4">
        <p>旗袍名称 : <?php echo ($qipao["name"]); ?></p>
        <p>旗袍名称 : <?php echo ($qipao["price"]); ?></p>
       
        <?php if(is_array($type)): $i = 0; $__LIST__ = $type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$t): $mod = ($i % 2 );++$i; if(($t["id"]) == $qipao["brand"]): ?><p>旗袍分类 : <?php echo ($t["title"]); ?></p><?php endif; ?>
          <?php if(($t["id"]) == $qipao["qpstyle"]): ?><p>旗袍风格 : <?php echo ($t["title"]); ?></p><?php endif; ?>
          <?php if(($t["id"]) == $qipao["quality"]): ?><p>旗袍材质 : <?php echo ($t["title"]); ?></p><?php endif; ?>
          <?php if(($t["id"]) == $qipao["series_name"]): ?><p>旗袍系列 : <?php echo ($t["title"]); ?></p><?php endif; ?>
          <?php if(($t["id"]) == $qipao["style"]): ?><p>旗袍样式 : <?php echo ($t["title"]); ?></p><?php endif; endforeach; endif; else: echo "" ;endif; ?>
      </div>
       <div class="am-u-lg-4">

        <p>总票数 : <?php echo ($qipao["vote_num"]); ?></p>
        <p>地区 : <?php echo ($qipao["city"]); ?></p>
        <p>添加人 : <?php echo ($user["userName"]); ?></p>  
        <p>添加时间 : <?php echo ($qipao["create_time"]); ?></p>


      </div>
    </div>

    <div class="am-u-lg-12 am-padding-xl">
    <p><?php echo ($qipao["intro"]); ?></p>
    </div>
 </div>


<footer class="footer">
  <p>© 2015 <a href="http://www.yunqingit.com" target="_blank">YunQing, Inc.</a> Licensed under <a
      href="http://opensource.org/licenses/MIT" target="_blank">MIT license</a>. by the YunQing Team.</p>
</footer>

<!--[if lt IE 9]>
<script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="assets/js/polyfill/rem.min.js"></script>
<script src="assets/js/polyfill/respond.min.js"></script>
<script src="assets/js/amazeui.legacy.js"></script>
<![endif]-->

<!--[if (gte IE 9)|!(IE)]><!-->
<script type="text/javascript" src="__PUBLIC__/assets/js/jquery.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/assets/js/amazeui.min.js"></script>
<!--<![endif]-->
<script type="text/javascript" src="__PUBLIC__/assets/js/app.js"></script>
</body>
</html>