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
            <form class="form-inline" action="<?php echo U('Admin/Category/index');?>" method='post'>
                           <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                          <select class="form-control" name='search'>
                                          <option  selected id='select'>请选择</option>
                                          <option value='goy_id'>ID</option>
                                          <option value='goy_name'>分类名</option>
                                          <option value='goy_pid'>所属分类</option>
                          </select>
                          <!-- <span class='glyphicon glyphicon-arrow-right'></span> -->
                           <div class="form-group">
                                <input type="text" class="form-control" id="exampleInputName2" name='content' placeholder="请键入搜索内容">
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
          <table class="am-table am-table-striped am-table-hover ">
            <thead>
              <tr>
              <!-- <th>全选</th> -->
              <!-- <th>用户ID</th> -->
              <th>分类ID</th>
              <th>分类名</th>
              <th>所属分类ID</th>
              <!-- <th>真实姓名</th> -->
              <!-- <th>余额</th> -->
              <!-- <th>消费</th> -->
              <th>路径</th>
              <th>操作</th>
              </tr>
          </thead>
          <tbody>
          <?php if(is_array($list)): foreach($list as $key=>$val): ?><tr>
              <!-- <td><input type="checkbox" /></td> -->
              <!-- <td><?php echo ($val["clt_id"]); ?></td> -->
              <td><?php echo ($val["goy_id"]); ?></td>
              <td><a href="<?php echo U('Admin/Information/index',array('goy_id'=>$val[goy_id],'goy_path'=>$val[goy_path]));?>" title='查看名下信息'><?php echo ($val["goy_name"]); ?></a></td>
              <td><?php echo ($val["goy_pid"]); ?></td>
              <td>
                    <?php echo ($val["goy_path"]); ?>
              </td>
              
           
              <td>
                <div class="am-btn-toolbar">
                  <div class="am-btn-group am-btn-group-xs">
                    <a href="<?php echo U('Admin/Category/Subcategories',array('goy_id'=>$val['goy_id'],'goy_path'=>$val['goy_path']));?>" class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> 添加子分类</a>
                    <a href="<?php echo U('Admin/Category/saveCate',array('goy_id'=>$val['goy_id']));?>" class="am-btn am-btn-default am-btn-xs"><span class="am-icon-copy"></span> 修改</a>
                    <!-- <a href="<?php echo U('Admin/Category/Subcategories',array('goy_id'=>$val['goy_id'],'goy_path'=>$val['goy_path']));?>" class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> 添加子分类</a> -->
                    <a href="<?php echo U('Admin/Category/del',array('goy_id'=>$val['goy_id']));?>" class="am-btn am-btn-default am-btn-xs am-text-danger"><span class="am-icon-trash-o"></span> 删除分类</a>
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
        <!-- </form> -->
      </div>

    </div>
  </div>
  <!-- content end -->
</div>
<script type="text/javascript">
            $('select').blur(function(){
                      var val = $(this).val();
                      console.log(val);
                      if(val != '请选择'){
                      $('#search_tow').removeAttr('disabled');
                      $('#select').remove();
                      }
            });
</script>
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