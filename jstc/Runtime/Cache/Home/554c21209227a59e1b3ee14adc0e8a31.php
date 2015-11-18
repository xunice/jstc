<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport"
        content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta name="format-detection" content="telephone=no">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp"/>
<title>久顺天成-首页</title>

<link rel="stylesheet" type="text/css" href="__PUBLIC__/assets/css/amazeui.min.css" />
<link rel="stylesheet" type="text/css" href="__PUBLIC__/assets/css/app.css" />
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


<div class="detail">
<br>
<br>
  <div class="am-g am-container">
    <div class="am-u-lg-12">
      <div class="am-u-lg-10">
        
       <strong class="am-text-primary am-text-lg">产品展示</strong>

      <ul class="am-avg-sm-2 am-avg-md-4 am-avg-lg-6 gallery-list">
      <?php if(is_array($qipaoviews)): $i = 0; $__LIST__ = array_slice($qipaoviews,0,6,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
             <a href="__URL__/../detail/index/<?php echo ($vo["id"]); ?>">
              <img class="am-img-thumbnail am-img-bdrs" src="__PUBLIC__/Uploads/m_<?php echo ($vo["image"]); ?>" alt=""/>
              <div class="gallery-title"><?php echo ($vo["name"]); ?></div>
              <div class="gallery-title"><?php echo ($vo["model_name"]); ?></div>
              <?php if(is_array($type)): $i = 0; $__LIST__ = $type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$t): $mod = ($i % 2 );++$i; if(($t["id"]) == $vo["brand"]): ?><div class="gallery-title"><?php echo ($t["title"]); ?></div><?php endif; ?>
                <!-- <?php if($vo["brand"] == $t.id): ?>abc<div class="gallery-title"><?php echo ($t["title"]); ?></div> 
                <?php else: endif; ?>--><?php endforeach; endif; else: echo "" ;endif; ?>
             
              <div class="gallery-desc"><span style="color:red">价格:<?php echo ($vo["price"]); ?></span></div>
            </a>
          </li><?php endforeach; endif; else: echo "" ;endif; ?>
      </ul>

       <strong class="am-text-primary am-text-lg">关于我们</strong>

      <ul class="am-avg-sm-2 am-avg-md-4 am-avg-lg-6 gallery-list">
      <?php if(is_array($qipaojingsai)): $i = 0; $__LIST__ = array_slice($qipaojingsai,0,6,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
             <a href="__URL__/../detail/index/<?php echo ($vo["id"]); ?>">
             <img class="am-img-thumbnail am-img-bdrs" src="__PUBLIC__/Uploads/m_<?php echo ($vo["image"]); ?>" alt=""/>
              <div class="gallery-title"><?php echo ($vo["name"]); ?></div>
              <div class="gallery-title"><?php echo ($vo["model_name"]); ?></div>
              <div class="gallery-desc"><span style="color:red">价格:<?php echo ($vo["price"]); ?></span></div>
       
              <div class="gallery-desc">
              <button class="am-u-lg-6 am-btn-primary am-btn-xs"><a style="color:white" href="__URL__/vote/<?php echo ($vo["id"]); ?>/<?php echo ($vo["vote_num"]); ?>">投票</a></button><div class="am-u-lg-6"><?php echo ($vo["vote_num"]); ?>票</div>
              </div>
            </a>
          </li><?php endforeach; endif; else: echo "" ;endif; ?>
      </ul>

       <strong class="am-text-primary am-text-lg">联系方式</strong>
      <ul class="am-avg-sm-2 am-avg-md-4 am-avg-lg-6 gallery-list">
      <?php if(is_array($qipaowoman)): $i = 0; $__LIST__ = array_slice($qipaowoman,0,2,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
             <a href="__URL__/../detail/index/<?php echo ($vo["id"]); ?>">
              <img class="am-img-thumbnail am-img-bdrs" src="__PUBLIC__/Uploads/m_<?php echo ($vo["image"]); ?>" alt=""/>
              <div class="gallery-title"><?php echo ($vo["name"]); ?></div>
              <div class="gallery-title"><?php echo ($vo["model_name"]); ?></div>
              <div class="gallery-title"><?php echo ($vo["city"]); ?></div>
            </a>
          </li><?php endforeach; endif; else: echo "" ;endif; ?>
      </ul>

  </div>

  <div class="am-u-lg-2">


  </div>
      
    </div>
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