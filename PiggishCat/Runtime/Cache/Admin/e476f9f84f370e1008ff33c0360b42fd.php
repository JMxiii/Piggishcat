<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
	</head>
	<style></style>
	<body>
		 <!-- 引入头部 -->
 <!doctype html>
<html class="no-js">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>馋猫-table</title>
  <meta name="description" content="这是一个 table 页面">
  <meta name="keywords" content="table">
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
  <script type="text/javascript" src="/PigpishCat/Public/js/jquery-2.1.3.min.js"></script>
    <script type="text/javascript" src="/PigpishCat/Public/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/PigpishCat/Public/css/bootstrap.min.css" />
</head>
<body>


    <div class="am-cf am-padding">
    </div>

    <div class="am-g">
      <div class="am-u-md-6 am-cf">
        <div class="am-fl am-cf">
          <div class="am-btn-toolbar am-fl">
           	<h4>订单查询中心</h4>
            <div class="am-form-group am-margin-left am-fl">
       			 <form action="<?php echo U('Admin/OrderForm/index');?>" method="get">
                <select name="search" class="input_select">
                    <option value="orm_id">订单ID</option>
                    <option value="clt_id">会员ID </option>
                    <option value="orm_status">状态</option>
                </select>

                <input type="text" name="content" class="">
                <input type="submit" value="搜索" class="btn btn-info">
             </form>
            </div>
          </div>
        </div>
      </div>
     
    </div>

    <div class="am-g">
      <div class="am-u-sm-12">
          <table class="am-table am-table-striped am-table-hover " style='font-size:13' id='tab' delurl="<?php echo U('Admin/Blogroll/del');?>">
            <thead>
              <tr>
              <th>订单ID</th>
              <th>会员名</th>
              <th>收货地址</th>
              <th>订单创建时间</th>
              <th>状态</th>
              <th>操作</th>
              </tr>
          </thead>
          <tbody>
          <?php if(is_array($list)): foreach($list as $key=>$val): ?><tr>
              <td><?php echo ($val["orm_id"]); ?></td>
              <td style='color:green'><?php echo ($val["clt_id"]); ?></td>
              <td><?php echo ($val["ads_id"]); ?></td>
              <td><?php echo ($val["orm_addtime"]); ?></td>
              <td><?php echo ($val["orm_status"]); ?></td>
              <td id='on'>
                <div class="am-btn-toolbar">
                  <div class="am-btn-group am-btn-group-xs">
                   	<a href="<?php echo U('Admin/OrderForm/detail/',array('orm_id'=>$val['orm_id']));?>" class="am-btn am-btn-default am-btn-xs am-text-secondary" onclick="">订单详情<span></span></a>
					
				
                  </div>
                </div>
              </td>
              <td></td>
              <td></td>	
            </tr>
          
          </tbody><?php endforeach; endif; ?>
        </table>
          <div class="am-cf">
 	 共<?php echo ($num); ?>条记录
  <div id="show">
      <?php echo ($show); ?>
  </div>
</div>
          <hr />
          <p>注：.....</p>
      </div>

    </div>
  </div>

</div>

<footer>
  <hr>
  <p class="am-padding-left">© 2014 AllMobilize, Inc. Licensed under MIT license.</p>
</footer>

<script type="text/javascript" src="/PigpishCat/Public/assets/js/jquery.min.js"></script>
<script type="text/javascript" src="/PigpishCat/Public/assets/js/amazeui.min.js"></script>
<script type="text/javascript" src="/PigpishCat/Public/assets/js/app.js"></script>
<script type="text/javascript">
   $('#show').children().children().unwrap().wrap('<li></li>').parent().wrapAll('<ul class="pagination"></ul>');
    // 显示当前页码
    $('#show .current').parent().addClass('active');
</script>
</body>
</html>


	</body>

</html>