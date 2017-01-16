<?php if (!defined('THINK_PATH')) exit();?> <!-- 引入头部 -->
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
            <div class="am-btn-group am-btn-group-xs">
              <button type="button" class="am-btn am-btn-default"><span class="am-icon-plus"></span> 新增</button>
              <!-- <button type="button" class="am-btn am-btn-default"><span class="am-icon-save"></span> 保存</button> -->
              <button type="button" class="am-btn am-btn-default"><span class="am-icon-archive"></span> 审核</button>
              <button type="button" class="am-btn am-btn-default"><span class="am-icon-trash-o"></span> 删除</button>
            </div>

            <div class="am-form-group am-margin-left am-fl">
        <!--       <select>
                <option value="option1">所有类别</option>
                <option value="option2">IT业界</option>
                <option value="option3">数码产品</option>
                <option value="option3">笔记本电脑</option>
                <option value="option3">平板电脑</option>
                <option value="option3">只能手机</option>
                <option value="option3">超极本</option>
              </select> -->
            </div>
          </div>
        </div>
      </div>
     <!--  <div class="am-u-md-3 am-cf">
        <div class="am-fr">
          <div class="am-input-group am-input-group-sm">
            <input type="text" class="am-form-field">
                <span class="am-input-group-btn">
                  <button class="am-btn am-btn-default" type="button">搜索</button>
                </span>
          </div>
        </div>
      </div> -->
    </div>

    <div class="am-g">
      <div class="am-u-sm-12">
          <table class="am-table am-table-striped am-table-hover " style='font-size:13' id='tab' delurl="<?php echo U('Admin/Blogroll/del');?>">
            <thead>
              <tr>
              <th>ID</th>
              <th>站名</th>
              <th>地址</th>
              <th>联系人</th>
              <th>手机</th>
              <th>状态</th>
              <th>Logo</th>
              <th>操作</th>
              </tr>
          </thead>
          <tbody>
          <?php if(is_array($list)): foreach($list as $key=>$val): ?><tr>
              <td><?php echo ($val["bll_id"]); ?></td>
              <td style='color:green'><?php echo ($val["bll_name"]); ?></td>
              <td>
                  <a href="<?php echo ($val["bll_address"]); ?>" title='新窗口打开' target='_blank'><?php echo ($val["bll_address"]); ?></a>
                </td>
                <td><?php echo ($val["bll_contacts"]); ?></td>
                <td><?php echo ($val["bll_phone"]); ?></td>
              <td class='status'><?php echo ($val["bll_status"]); ?></td>
              <td>
                      <img src="/PigpishCat/Public<?php echo ($val["bll_pic"]); ?>"  width="50px;">
              </td>
              <td id='up' Saveurl="<?php echo U('Admin/Blogroll/Save');?>">
                <div class="am-btn-toolbar">
                  <div class="am-btn-group am-btn-group-xs">
                    <button class="am-btn am-btn-default am-btn-xs am-text-secondary" onclick="action(<?php echo ($val["bll_id"]); ?>,this)">启用<span class="am-icon-pencil-square-o"></span> </button>
                   
                    <button class="am-btn am-btn-default am-btn-xs am-text-danger delete" onclick="del(<?php echo ($val["bll_id"]); ?>,this)"><span class="am-icon-trash-o"></span> 删除</button>
                    
                  </div>
                </div>
              </td>
            </tr>
          
          </tbody><?php endforeach; endif; ?>
        </table>
          <div class="am-cf">
  共 <?php echo ($count); ?>条记录
  <div id="show">
      <?php echo ($show); ?>
  </div>
</div>
          <hr />
          <p>注：.....</p>
      </div>

    </div>
  </div>
  <!-- content end -->
</div>
<script src='/PigpishCat/Public/js/blogroll.js'></script>
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