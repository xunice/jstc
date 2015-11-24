<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport"
        content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta name="format-detection" content="telephone=no">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp"/>
<title>登录</title>
<!-- <link rel="stylesheet" type="text/css" href="__PUBLIC__/assets/css/reset-min.css" />
<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/read/common.css" />
<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/read/login.css" />
<script type="text/javascript" src="__PUBLIC__/js/jquery.js"></script> -->

<link rel="stylesheet" type="text/css" href="__PUBLIC__/assets/css/amazeui.min.css" />
<link rel="stylesheet" type="text/css" href="__PUBLIC__/assets/css/app.css" />

  <style>
    .header {
      text-align: center;
    }
    .header h1 {
      font-size: 200%;
      color: #333;
      margin-top: 30px;
    }
    .header p {
      font-size: 14px;
    }
        .footer p {
      color: #7f8c8d;
      margin: 0;
      padding: 15px 0;
      text-align: center;
      background: #2d3e50;
    }
    .content{
      height: 700px;
    }
  </style>

<script type="text/javascript">
$(function(){
    //判断用户名输入合法性
    $("#userName").focus(function(){
        if($("#uhint").text()){
            $("#uhint").hide();
        }
    })
    $("#userName").blur(function(){
      if(!$(this).val()){
        $("#uhint").show();
      }     
    })
  
    //判断密码输入合法性
  $("#userPass").focus(function(){
        if($("#phint").text()){
            $("#phint").hide();
        }
    })
  $("#userPass").blur(function(){
    if(!$(this).val()){
      $("#phint").show();
    }     
  })

  //表单提交检测
  $("#subbtn").click(function(){
    if(!$("#userName").val()){
      $("#uhint").text("请输入用户名")
    }
    else if(!$("#userPass").val()){
      $("#phint").text("请输入密码")
    }
    else {
      document.form1.submit();
    }
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
<br>
<br>
<br>
<div class="am-g content">
  <div class="am-u-lg-6 am-u-md-8 am-u-sm-centered">
    <h3>登录</h3>
    <br>

    <form name="form1" class="loginform am-form" action="__URL__/../check" method="post"  > 
       <label id="uhint" for="username" class="txt_default ">账号：</label>
      <input value="" id="userName" name="username" tabindex="2" class="input_txt" type="text">
      <br>
      <label id="phint" for="password" class="txt_default" style="">密码：</label>
      <input id="userPass" name="password" tabindex="2" class="input_txt" type="password" name="" value="">
      <br>
      <!-- <label for="remember-me">
        <input id="remember-me" type="checkbox">
        记住密码
      </label> -->
      <br />
      <div class="am-cf">
        <input type="submit" class="login_btn" tabindex="5" id="subbtn" name="" value="登 录" class="am-btn am-btn-primary am-btn-sm am-fl">
        <input type="submit" name="" value="忘记密码? " class="am-btn am-btn-default am-btn-sm am-fr">
      </div>
    </form>
    <hr>
  </div>
</div>
<footer class="footer">
  <p>© 2015 <a href="http://www.yunqingit.com" target="_blank">YunQing, Inc.</a> Licensed under <a
      href="http://opensource.org/licenses/MIT" target="_blank">MIT license</a>. by the YunQing Team.</p>
</footer>
</body>
</html>