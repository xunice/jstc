<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport"
        content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta name="format-detection" content="telephone=no">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp"/>
<title>后台管理</title>

<link rel="stylesheet" type="text/css" href="__PUBLIC__/assets/css/amazeui.min.css" />
<link rel="stylesheet" type="text/css" href="__PUBLIC__/assets/css/admin.css" />
<link rel="stylesheet" type="text/css" href="__PUBLIC__/assets/css/app.css" />
<script type="text/javascript">
$(function(){
   $("form:first").submit(function(){
    if(!$("#title").val()){
        alert("请输入名称！");
        return false;
    }
   });


})

</script>
</head>

<body>

<!-- <div class="head">
    <div class="navigation">
        <h1 class="logo"><a href="__APP__/" title="小说阅读网"> 小说阅读网 </a></h1>
        <div class="link-to-book-store"><a href="javascript:;"> 后台管理系统 </a></div>
        <div class="session">
            <a href="http://www.douban.com/people/48661946/" target="_blank"> <?php echo ($userName); ?> </a>
            <a class="log-out" href="__URL__/../logout"> <?php echo ($logout); ?> </a>
       </div>
    </div>
</div>
</div> -->
<header class="am-topbar admin-header">
  <div class="am-topbar-brand">
    <strong>久顺天成</strong> <small>后台管理</small>
  </div>

  <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only" data-am-collapse="{target: '#topbar-collapse'}"><span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>

  <div class="am-collapse am-topbar-collapse" id="topbar-collapse">

    <ul class="am-nav am-nav-pills am-topbar-nav am-topbar-right admin-header-list">
      
      <li class="am-dropdown" data-am-dropdown>
        <a class="am-dropdown-toggle" data-am-dropdown-toggle href="javascript:;">
          <span class="am-icon-users"></span> <?php echo ($username); ?> <span class="am-icon-caret-down"></span>
        </a>
        <ul class="am-dropdown-content">
          <li><a href="__URL__/.."><span class="am-icon-user"></span> 资料</a></li>
          <li><a href="#"><span class="am-icon-cog"></span> 设置</a></li>
          <li><a href="__URL__/../logout"><span class="am-icon-power-off"></span> 退出</a></li>
        </ul>
      </li>
 <!--      <li class="am-hide-sm-only"><a href="javascript:;" id="admin-fullscreen"><span class="am-icon-arrows-alt"></span> <span class="admin-fullText">开启全屏</span></a></li> -->
    </ul>
  </div>
</header>

<div class="am-cf admin-main">
  <!-- sidebar start -->
  <div class="admin-sidebar am-offcanvas" id="admin-offcanvas">
    <div class="am-offcanvas-bar admin-offcanvas-bar">
      <ul class="am-list admin-sidebar-list">
        <li><a href="__URL__/.."><span class="am-icon-home"></span> 首页</a></li>

        <li class="admin-parent">
          <a class="am-cf" data-am-collapse="{target: '#collapse-nav'}"><span class="am-icon-file"></span> 产品管理 <span class="am-icon-angle-right am-fr am-margin-right"></span></a>
          <ul class="am-list am-collapse admin-sidebar-sub am-in" id="collapse-nav">
            <li><a href="__URL__/../rack_type_add" class="am-cf"><span class="am-icon-check"></span> 产品分类添加</a></li>
            <li><a href="__URL__/../rack_type"><span class="am-icon-th"></span> 全部产品分类</a></li>
            <li><a href="__URL__/../rack_add" class="am-cf"><span class="am-icon-check"></span> 产品添加</a></li>
            <li><a href="__URL__/../rack"><span class="am-icon-th"></span> 全部产品</a></li>
          </ul>
        </li>

        <li class="admin-parent">
          <a class="am-cf" data-am-collapse="{target: '#collapse-nav2'}"><span class="am-icon-file"></span> 用户管理 <span class="am-icon-angle-right am-fr am-margin-right"></span></a>
          <ul class="am-list am-collapse admin-sidebar-sub am-in" id="collapse-nav2">
            <li><a href="__URL__/../user_add" class="am-cf"><span class="am-icon-check"></span> 用户添加</a></li>
            <li><a href="__URL__/../user"><span class="am-icon-th"></span> 全部用户</a></li>
          </ul>
        </li>

        <li class="admin-parent">
          <a class="am-cf" data-am-collapse="{target: '#collapse-nav3'}"><span class="am-icon-file"></span> 分类管理 <span class="am-icon-angle-right am-fr am-margin-right"></span></a>
          <ul class="am-list am-collapse admin-sidebar-sub am-in" id="collapse-nav3">
            <li><a href="__URL__/../menu_add" class="am-cf"><span class="am-icon-check"></span> 分类添加</a></li>
            <li><a href="__URL__/../menu"><span class="am-icon-th"></span> 全部分类</a></li>
          </ul>
        </li>

        <li class="admin-parent">
          <a class="am-cf" data-am-collapse="{target: '#collapse-nav5'}"><span class="am-icon-file"></span> 新闻管理 <span class="am-icon-angle-right am-fr am-margin-right"></span></a>
          <ul class="am-list am-collapse admin-sidebar-sub am-in" id="collapse-nav5">
            <li><a href="__URL__/../news_add" class="am-cf"><span class="am-icon-check"></span> 新闻添加</a></li>
            <li><a href="__URL__/../news"><span class="am-icon-th"></span> 全部新闻</a></li>
          </ul>
        </li>
        <li><a href="__URL__/../logout"><span class="am-icon-sign-out"></span> 注销</a></li>
      </ul>

      <div class="am-panel am-panel-default admin-sidebar-panel">
        <div class="am-panel-bd">
          <p><span class="am-icon-bookmark"></span> 公告</p>
          <p>久顺天成,新版上线啦。 </p>
        </div>
      </div>
    </div>
  </div>
  <!-- sidebar end -->

   <!-- content start -->
   <!-- content start -->
  <div class="admin-content">
    <div class="am-cf am-padding">
      <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">添加产品</strong> / <small>Add Product</small></div>
    </div>

    <hr/>
    <form class="am-form am-form-horizontal" id="form1" name="form1" enctype="multipart/form-data" action="__URL__/upload" method="post" > 
    <div class="am-g">

      <div class="am-u-sm-12 am-u-md-4 am-u-md-push-8">
        <div class="am-panel am-panel-default">
          <div class="am-panel-bd">
            <div class="am-g">
              <div class="am-u-md-4">
                <img class="am-img-circle am-img-thumbnail" src="http://amui.qiniudn.com/bw-2014-06-19.jpg?imageView/1/w/1000/h/1000/q/80" alt=""/>
              </div>
              <div class="am-u-md-8">
                <p> 图片 </p>
                
                  <div class="am-form-group">
                    <input type="file" name="image" id="user-pic">
                    <p class="am-form-help">请选择要上传的文件...</p>
                  </div>
                
              </div>
            </div>
          </div>
        </div>
      </div>
      

      <div class="am-u-sm-12 am-u-md-8 am-u-md-pull-4">
        
          <div class="am-form-group">
            <label for="user-name" class="am-u-sm-3 am-form-label">产品名称</label>
            <div class="am-u-sm-9">
              <input type="text" id="user-name" name="title" placeholder="产品名称">
              <small></small>
            </div>
          </div>

          <div class="am-form-group">
            <label for="user-email" class="am-u-sm-3 am-form-label">产品价格</label>
            <div class="am-u-sm-9">
              <input type="text" id="price" name="price" placeholder="输入产品价格">
              <small></small>
            </div>
          </div>

          <div class="am-form-group">
            <label for="user-phone" class="am-u-sm-3 am-form-label">产品分类</label>
            <div class="am-u-sm-9">
                <select name="typeid" data-am-selected="{btnSize: 'sm'}">
                  <?php if(is_array($type)): $i = 0; $__LIST__ = $type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if(($vo["fid"] == '0') ): ?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["title"]); ?></option><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                </select>
            </div>
          </div>

          <div class="am-form-group">
            <label for="user-weibo" class="am-u-sm-3 am-form-label">产品编号</label>
            <div class="am-u-sm-9">
              <input type="text" id="number" name="number" placeholder="产品编号">
            </div>
          </div>

          <div class="am-form-group">
            <label for="user-weibo" class="am-u-sm-3 am-form-label">产品规格</label>
            <div class="am-u-sm-9">
              <input type="text" id="size" name="size" placeholder="产品规格">
            </div>
          </div>

          <div class="am-form-group">
            <label for="user-intro" class="am-u-sm-3 am-form-label">简介 / Intro</label>
            <div class="am-u-sm-9">
              <textarea class="" rows="5" name="content" id="content" placeholder="输入产品简介"></textarea>
            </div>
          </div>

            <div class="am-form-group" data-am-button>
            <label for="user-name" class="am-u-sm-3 am-form-label">是否显示</label>
            <div class="am-u-sm-9">
              <label class="am-btn am-btn-default am-btn-xs">
                <input type="radio" name="status" id="option3" value="0"> 是
              </label>
              <label class="am-btn am-btn-default am-btn-xs">
                <input type="radio" name="status" id="option4" value="1"> 否
              </label>
              </div>
          </div>

          <input type="hidden" name="userid" id="user" value="<?php echo ($userId); ?>">

          <div class="am-form-group">
            <div class="am-u-sm-9 am-u-sm-push-3">
              <button type="submit" class="am-btn am-btn-primary">保存</button>
            </div>
          </div>

      </div>
    </div>
    </form>
  </div>
  <!-- content end -->
  <!-- content end -->
   

</div>
</div>

<a class="am-icon-btn am-icon-th-list am-show-sm-only admin-menu" data-am-offcanvas="{target: '#admin-offcanvas'}"></a>

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