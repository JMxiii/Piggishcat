<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html class="no-js">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>馋猫-管理员后台首页</title>
  <meta name="description" content="这是一个 index 页面">
  <meta name="keywords" content="index">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp" />
  <link rel="icon" type="image/png" href="/PigpishCat/Public/assets/i/favicon.png">
  <link rel="apple-touch-icon-precomposed" href="/PigpishCat/Public/assets/i/app-icon72x72@2x.png">
  <meta name="apple-mobile-web-app-title" content="Amaze UI" />
  <!-- <link rel="stylesheet" href="assets/css/amazeui.min.css"/> -->
  <link rel="stylesheet" type="text/css" href="/PigpishCat/Public/assets/css/amazeui.min.css" />
  <!-- <link rel="stylesheet" href="assets/css/admin.css"> -->
  <link rel="stylesheet" type="text/css" href="/PigpishCat/Public/assets/css/admin.css" />
</head>
<body>
<!--[if lte IE 9]>
<p class="browsehappy">你正在使用<strong>过时</strong>的浏览器，Amaze UI 暂不支持。 请 <a href="http://browsehappy.com/" target="_blank">升级浏览器</a>
  以获得更好的体验！</p>
<![endif]-->

<header class="am-topbar admin-header">
  <div class="am-topbar-brand">
    <strong>馋猫</strong> <small>管理员后台</small>
  </div>

  <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only" data-am-collapse="{target: '#topbar-collapse'}"><span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>

  <div class="am-collapse am-topbar-collapse" id="topbar-collapse">

    <ul class="am-nav am-nav-pills am-topbar-nav am-topbar-right admin-header-list">
      <li><a href="javascript:;"><span class="am-icon-envelope-o"></span> 收件箱 <span class="am-badge am-badge-warning">0</span></a></li>
      <li class="am-dropdown" data-am-dropdown>
        <a class="am-dropdown-toggle" data-am-dropdown-toggle href="javascript:;">
          <span class="am-icon-users"></span> <?php echo ($_SESSION['adminInfo']['adn_name']); ?> <span class="am-icon-caret-down"></span>
        </a>
        <ul class="am-dropdown-content">
          <li><a href="admin-user.html"><span class="am-icon-user"></span> 资料</a></li>
          <li><a href="#"><span class="am-icon-cog"></span> 设置</a></li>
          <li><a href="<?php echo U('Admin/Login/outLogin');?>"><span class="am-icon-power-off"></span> 退出</a></li>
        </ul>
      </li>
      <li><a href="javascript:;" id="admin-fullscreen"><span class="am-icon-arrows-alt"></span> <span class="admin-fullText">开启全屏</span></a></li>
    </ul>
  </div>
</header>

<div class="am-cf admin-main">
  <!-- sidebar start -->
  <div class="admin-sidebar">
    <!-- 客户用户表 -->
    <ul class="am-list admin-sidebar-list">
      <li><a href="<?php echo U('Admin/Firstpage /index');?>" target='menuFrame'><span class="am-icon-home"></span> 首页</a></li>
           <!-- 管理员 -->
       <li class="admin-parent">
          <a class="am-cf" data-am-collapse="{target: '#collapse-nav1'}"><span class="am-icon-file"></span> 后台管理 <span class="am-icon-angle-right am-fr am-margin-right"></span></a>
          <ul class="am-list am-collapse admin-sidebar-sub" id="collapse-nav1">
            <li><a href="<?php echo U('Admin/admin/index');?>" target='menuFrame' class="am-cf"><span class="am-icon-check"></span> 管理员列表<span class="am-icon-star am-fr am-margin-right admin-icon-yellow"></span></a></li>
            
          </ul>
      </li>
      <li class="admin-parent">
        <a class="am-cf" data-am-collapse="{target: '#collapse-nav'}"><span class="am-icon-file"></span> 客户用户管理 <span class="am-icon-angle-right am-fr am-margin-right"></span></a>
        <ul class="am-list am-collapse admin-sidebar-sub" id="collapse-nav">
          <li><a href="<?php echo U('Admin/Client/index');?>" target='menuFrame' class="am-cf"><span class="am-icon-check"></span> 用户列表浏览<span class="am-icon-star am-fr am-margin-right admin-icon-yellow"></span></a></li>
          
        </ul>
      </li>

 

      <!-- 店铺表 -->
    <!--   <li class="admin-parent">
        <a class="am-cf" data-am-collapse="{target: '#collapse-nav2'}"><span class="am-icon-file"></span> 店铺管理 <span class="am-icon-angle-right am-fr am-margin-right"></span></a>
        <ul class="am-list am-collapse admin-sidebar-sub" id="collapse-nav2">
          <li><a href="admin-user.html" class="am-cf"><span class="am-icon-check"></span> 店铺浏览<span class="am-icon-star am-fr am-margin-right admin-icon-yellow"></span></a></li>
          <li><a href="admin-help.html"><span class="am-icon-puzzle-piece"></span> 待审核商铺</a></li>
        </ul>
      </li> -->

      <!-- 商品分类表 -->
    <li class="admin-parent">
        <a class="am-cf" data-am-collapse="{target: '#collapse-nav3'}"><span class="am-icon-file"></span> 商品分类管理 <span class="am-icon-angle-right am-fr am-margin-right"></span></a>
        <ul class="am-list am-collapse admin-sidebar-sub" id="collapse-nav3">
          <li><a href="<?php echo U('Admin/Category/index');?>" target='menuFrame' class="am-cf"><span class="am-icon-check"></span> 商品分类浏览<span class="am-icon-star am-fr am-margin-right admin-icon-yellow"></span></a></li>
          <li><a href="<?php echo U('Admin/Category/Addcate');?>" target='menuFrame'><span class="am-icon-puzzle-piece"></span> 添加顶级分类</a></li>
        </ul>
      </li>

      <!-- 商品信息表 -->
      <li class="admin-parent">
        <a class="am-cf" data-am-collapse="{target: '#collapse-nav4'}"><span class="am-icon-file"></span> 商品信息管理 <span class="am-icon-angle-right am-fr am-margin-right"></span></a>
        <ul class="am-list am-collapse admin-sidebar-sub" id="collapse-nav4">
          <li><a href="<?php echo U('Admin/Goods/index');?>" target='menuFrame' class="am-cf"><span class="am-icon-check"></span> 商品浏览<span class="am-icon-star am-fr am-margin-right admin-icon-yellow"></span></a></li>
           <li><a href="<?php echo U('Admin/Goods/addFrom',array('param'=>'category'));?>" target='menuFrame'><span class="am-icon-puzzle-piece"></span> 添加商品</a></li>
          <li><a href="<?php echo U('Admin/Goods/auditGoods');?>" target='menuFrame'><span class="am-icon-puzzle-piece"></span> 待审核商品</a></li>
        </ul>
      </li>

      <!-- 订单表 -->
      <li class="admin-parent">
        <a class="am-cf" data-am-collapse="{target: '#collapse-nav5'}"><span class="am-icon-file"></span> 订单管理 <span class="am-icon-angle-right am-fr am-margin-right"></span></a>
        <ul class="am-list am-collapse admin-sidebar-sub" id="collapse-nav5">
          <li><a href="<?php echo U('Admin/OrderForm/index');?>" class="am-cf" target='menuFrame'><span class="am-icon-check"></span> 订单查询<span class="am-icon-star am-fr am-margin-right admin-icon-yellow"></span></a></li>
        </ul>
      </li>

      <!-- 商品退换表 -->
      <li class="admin-parent">
        <a class="am-cf" data-am-collapse="{target: '#collapse-nav6'}"><span class="am-icon-file"></span> 退换货订单管理 <span class="am-icon-angle-right am-fr am-margin-right"></span></a>
        <ul class="am-list am-collapse admin-sidebar-sub" id="collapse-nav6">
          <li><a href="<?php echo U('Admin/SalesReturn/index');?>" class="am-cf" target='menuFrame'><span class="am-icon-check"></span> 退换货订单查询<span class="am-icon-star am-fr am-margin-right admin-icon-yellow"></span></a></li>
        </ul>
      </li>

      <!-- 广告表 -->
      <li class="admin-parent">
        <a class="am-cf" data-am-collapse="{target: '#collapse-nav9'}"><span class="am-icon-file"></span> 广告管理 <span class="am-icon-angle-right am-fr am-margin-right"></span></a>
        <ul class="am-list am-collapse admin-sidebar-sub" id="collapse-nav9">
          <li><a href="<?php echo U('Admin/Advertising/index');?>" target='menuFrame' class="am-cf"><span class="am-icon-check"></span> 广告查询<span class="am-icon-star am-fr am-margin-right admin-icon-yellow"></span></a></li>
          <li><a href="<?php echo U('Admin/Advertising/addAdvertising');?>"  target='menuFrame' class="am-cf"><span class="am-icon-check"></span> 广告添加<span class="am-icon-star am-fr am-margin-right admin-icon-yellow"></span></a></li>
          <li><a href="<?php echo U('Admin/Advpicture/index');?>"  target='menuFrame' class="am-cf"><span class="am-icon-check"></span> 效果图查询<span class="am-icon-star am-fr am-margin-right admin-icon-yellow"></span></a></li>
          <li><a href="<?php echo U('Admin/Advpicture/addForm');?>"  target='menuFrame' class="am-cf"><span class="am-icon-check"></span> 上传效果图<span class="am-icon-star am-fr am-margin-right admin-icon-yellow"></span></a></li>
        </ul>
      </li>
    
    <!-- 公告表 -->
      <li class="admin-parent">
        <a class="am-cf" data-am-collapse="{target: '#collapse-nav10'}"><span class="am-icon-file"></span> 公告管理 <span class="am-icon-angle-right am-fr am-margin-right"></span></a>
        <ul class="am-list am-collapse admin-sidebar-sub" id="collapse-nav10">
          <li><a href="<?php echo U('Admin/Bulletin/index');?>" target='menuFrame' class="am-cf"><span class="am-icon-check"></span> 公告查询<span class="am-icon-star am-fr am-margin-right admin-icon-yellow"></span></a></li>
          <li><a href="<?php echo U('Admin/Bulletin/add');?>" target='menuFrame' class="am-cf"><span class="am-icon-check"></span> 公告添加<span class="am-icon-star am-fr am-margin-right admin-icon-yellow"></span></a></li>
        </ul>
      </li>


    <!-- 信息表 -->
    <li class="admin-parent">
        <a class="am-cf" data-am-collapse="{target: '#collapse-nav11'}"><span class="am-icon-file"></span> 信息管理 <span class="am-icon-angle-right am-fr am-margin-right"></span></a>
        <ul class="am-list am-collapse admin-sidebar-sub" id="collapse-nav11">
           <li><a href="<?php echo U('Admin/News/index');?>" target='menuFrame' class="am-cf"><span class="am-icon-check"></span> 信息列表<span class="am-icon-star am-fr am-margin-right admin-icon-yellow"></span></a></li>
        </ul>
    </li>

    <!-- 留言表 -->
    <li class="admin-parent">
        <a class="am-cf" data-am-collapse="{target: '#collapse-nav12'}"><span class="am-icon-file"></span> 留言管理 <span class="am-icon-angle-right am-fr am-margin-right"></span></a>
        <ul class="am-list am-collapse admin-sidebar-sub" id="collapse-nav12">
           <li><a href="<?php echo U('Admin/Message/index');?>" target='menuFrame' class="am-cf"><span class="am-icon-check"></span> 留言列表<span class="am-icon-star am-fr am-margin-right admin-icon-yellow"></span></a></li>
        </ul>
    </li>

      <!-- 友情链接表 -->
      <li class="admin-parent">
        <a  class="am-cf" data-am-collapse="{target: '#collapse-nav7'}"><span class="am-icon-file"></span> 友情链接管理 <span class="am-icon-angle-right am-fr am-margin-right"></span></a>
        <ul class="am-list am-collapse admin-sidebar-sub" id="collapse-nav7">
          <li><a href="<?php echo U('Admin/Blogroll/index');?>" target='menuFrame' class="am-cf"><span class="am-icon-check"></span> 链接信息浏览<span class="am-icon-star am-fr am-margin-right admin-icon-yellow"></span></a></li>
          <li><a href="<?php echo U('Admin/Blogroll/SaveUpload');?>" target='menuFrame' class="am-cf"><span class="am-icon-check"></span> 添加友情连接<span class="am-icon-star am-fr am-margin-right admin-icon-yellow"></span></a></li>
        </ul>
      </li>

      <li class="admin-parent">
        <a class="am-cf" data-am-collapse="{target: '#collapse-nav8'}"><span class="am-icon-file"></span> 网站日志 <span class="am-icon-angle-right am-fr am-margin-right"></span></a>
        <ul class="am-list am-collapse admin-sidebar-sub" id="collapse-nav8">
          <li><a href="<?php echo U('Admin/Log/index');?>" target='menuFrame' ><span class="am-icon-calendar"></span> 系统日志</a></li>
        </ul>
      </li>

      <!-- 范本,勿删 -->
      <!--<li class="admin-parent">
        <a class="am-cf" data-am-collapse="{target: '#collapse-nav1'}"><span class="am-icon-file"></span> 客户用户 <span class="am-icon-angle-right am-fr am-margin-right"></span></a>
        <ul class="am-list am-collapse admin-sidebar-sub am-in" id="collapse-nav1">
          <li><a href="admin-user.html" class="am-cf"><span class="am-icon-check"></span> 个人资料<span class="am-icon-star am-fr am-margin-right admin-icon-yellow"></span></a></li>
          <li><a href="admin-help.html"><span class="am-icon-puzzle-piece"></span> 帮助页</a></li>
          <li><a href="admin-gallery.html"><span class="am-icon-th"></span> 相册页面<span class="am-badge am-badge-secondary am-margin-right am-fr">24</span></a></li>
          <li><a href="admin-log.html"><span class="am-icon-calendar"></span> 系统日志</a></li>
          <li><a href="admin-404.html"><span class="am-icon-bug"></span> 404</a></li>
        </ul>
      </li>-->
      <!-- 范本,勿删 -->

    </ul>
<div class="am-panel am-panel-default admin-sidebar-panel">
      <div class="am-panel-bd">
        <p><span class="am-icon-tag"></span> 馋猫</p>
        <p>欢迎来到馋猫!</p>
        <a href="http://www.baidu.com" target='menuFrame'>百度</a>
      </div>
    </div>
    <div class="am-panel am-panel-default admin-sidebar-panel">
      <div class="am-panel-bd">
        <p><span class="am-icon-bookmark"></span> 公告</p>
         <!-- 接收公告内容 -->
        <p><?php echo ($res['0']['bun_detail']); ?></p>
      </div>
    </div>

    
  </div>
  <!-- sidebar end -->

  <!-- content start -->
  <div class="admin-content" style='height:800px;'>
<iframe id="menuFrame" name="menuFrame" src="<?php echo U('Admin/Firstpage/index');?>" style="overflow:visible;" scrolling="yes" frameborder="no" height="100%" width="100%"></iframe>
    
  <!-- content end -->

</div>

<footer>
  <hr>
  <p>© 馋猫项目组 版权所有.</p>
</footer>

<!--[if lt IE 9]>
<script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="assets/js/polyfill/rem.min.js"></script>
<script src="assets/js/polyfill/respond.min.js"></script>
<script src="assets/js/amazeui.legacy.js"></script>
<![endif]-->

<!--[if (gte IE 9)|!(IE)]><!-->
<!-- <script src="assets/js/jquery.min.js"></script> -->

<!-- <script src="assets/js/amazeui.min.js"></script> -->
<!--<![endif]-->
<!-- <script src="assets/js/app.js"></script> -->
<script type="text/javascript" src="/PigpishCat/Public/assets/js/jquery.min.js"></script>
<script type="text/javascript" src="/PigpishCat/Public/assets/js/amazeui.min.js"></script>
<script type="text/javascript" src="/PigpishCat/Public/assets/js/app.js"></script>

</body>
</html>