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


  <!-- content start -->

    <div class="am-cf am-padding">
    </div>

    <div class="am-g">
      <div class="am-u-md-6 am-cf">
        <div class="am-fl am-cf">
          <div class="am-btn-toolbar am-fl">
            <div class="am-btn-group am-btn-group-xs">
          <form class="form-inline" action="<?php echo U('Admin/Goods/index');?>" method='post'>
                          <select class="form-control" name='search' style='width:430px;padding-left:40%'>
                                          <option  selected id='select'>请选择</option>
                                          <option value='gos_id'>商品ID</option>
                                          <option value='gos_name'>商品名</option>
                                          <option value='gos_status'>商品状态</option>
                                          <option value='gos_price' class='options'>商品价格</option>
                                          <option value='gos_sales'>商品销量</option>
                                          <option value='gos_inventory'>商品库存</option>
                          </select>
                           <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                          <!-- <span class='glyphicon glyphicon-arrow-right'></span> -->
                           <div class="form-group">
                                <input type="text" class="form-control" id="exampleInputName2" name='content' placeholder="请键入搜索内容">
                                   <input type="text" class="form-control" id='display' name='content_two' placeholder="请键入搜索内容" disabled >
                              </div>

                              <button type="submit" class="btn btn-primary" id='search_tow' disabled>搜索</button>
            </form>
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
        <!-- <form class="am-form"> -->
          <table class="am-table am-table-striped am-table-hover " style='font-size:13px;table-layout: fixed;' id='tab' delurl="<?php echo U('Admin/Goods/delGoods',array('param'=>'delete'));?>">

            <thead bgcolor='#DCDCDC'>
     

              <tr>
              <th style='width:50px;text-align:center'>ID</th>

              <th style='width:70px;text-align:center'>品名</th>
              <th style='width:60px;text-align:center'>价格</th>
              <th style='width:60px;text-align:center'>销量</th>
              <th style='width:50px;text-align:center'>库存</th>
              <th style='width:60px;text-align:center'>浏览量</th>
              <th style='width:30px;text-align:center'>状态</th>
              <th style='width:100px;text-align:center'>操作</th>

              </tr>

          </thead>
          <tbody>
          <?php if(is_array($list)): foreach($list as $key=>$val): ?><tr style='text-align:center'>
              <td><a href="<?php echo U('Admin/Goods/Details',array('gos_id'=>$val['gos_id']));?>" title="<?php echo ($val["gos_name"]); ?>"class='gos_name'><button type="text" class='btn btn-default btn-sm' style='width:50px;'><?php echo ($val["gos_id"]); ?></button></a></td>

              <td style="white-space: nowrap;text-overflow: ellipsis;overflow: hidden;" ><a title="<?php echo ($val["gos_name"]); ?>"class='gos_name'><input type="text" value="<?php echo ($val["gos_name"]); ?>" class='btn btn-default btn-sm' style='width:80px;' disabled></a> </td>
              <td>￥<?php echo ($val["gos_price"]); ?></td>
             <td><?php echo ($val["gos_sales"]); ?>/件</td>
             <td><?php echo ($val["gos_inventory"]); ?></td>
             <td><?php echo ($val["gos_view"]); ?></td>
             <td>
                    <button class="btn btn-default btn-sm" onclick="GoodStatus(<?php echo ($val["gos_id"]); ?>,this)"><?php echo ($val["gos_status"]); ?></button>
              </td>
              <td>
                <button type="button" class="btn btn-danger btn-sm"  onclick="del(<?php echo ($val["gos_id"]); ?>,this)"><span class="am-icon-trash-o"></span> 删除</button>

              </td>
            </tr>
          </tbody><?php endforeach; endif; ?>
        </table>
          <div class="am-cf">
  <!-- 共 <?php echo ($count); ?>条记录 -->
  <div id="show">
      <?php echo ($show); ?>
  </div>
</div>
          <hr />
          <p>注：.....</p>
        <!-- </form> -->
      </div>

    </div>
  </div>
  <!-- content end -->
</div>
<script type="text/javascript">
            $('select').blur(function(){
                      var val = $(this).val();
                      if(val != '请选择'){
                        $('#search_tow').removeAttr('disabled');
                        $('#select').remove();
                      }
                      if(val == 'gos_sales' || val == 'gos_inventory' || val == 'gos_price'){
                        $('#display').removeAttr('disabled');
                      }else{
                           $('#display').attr('disabled','disabled');
                           // console.log('####');
                      }
            });

          function GoodStatus(id,btn){
              // console.log(id);
              var str = $(btn).html();
              if(str == '已上架'){
                console.log(1);
                  $.get("<?php echo U('Admin/Goods/Status');?>",{'gos_status':0,'gos_id':id,'param':'save'},function(data){
                      if(data == '1'){
                        $(btn).css('background','#FFA54F').html('待审核');
                      }
                  });
              }else{
                      $.get("<?php echo U('Admin/Goods/Status');?>",{'gos_status':1,'gos_id':id,'param':'save'},function(data){
                      if(data == '1'){
                        $(btn).css('background','#8DB6CD').html('已上架');
                      }
                  });
              }

          }



       
</script>
<script src='/PigpishCat/Public/js/Goods.js'></script>

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