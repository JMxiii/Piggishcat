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
              <a type="button" class="am-btn am-btn-default xinzeng" href="<?php echo U('Admin/admin/add');?>"><span class="am-icon-plus"></span> 新增 </a>
              <!-- <button type="button" class="am-btn am-btn-default"><span class="am-icon-save"></span> 保存</button> -->
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
          <table id="tab" class="am-table am-table-striped am-table-hover " delurl="<?php echo U('Admin/Admin/delete');?>" >
            <thead> 
              <tr>
              <th>ID</th>
              <th>帐号</th>
              <th>姓名</th>
              <th>手机</th>
              <th>角色</th>
              <th>权限</th>
              <th>操作</th>
              </tr>
          </thead>
          <tbody>
          <?php if(is_array($list)): foreach($list as $key=>$val): ?><tr>
              <td class="adminidd"><?php echo ($val["adn_id"]); ?></td>
              <td><?php echo ($val["adn_user"]); ?></td>
              <td><?php echo ($val["adn_name"]); ?></td>
              <td><?php echo ($val["adn_phone"]); ?></td>
              <td><?php echo ($val["adn_grade"]); ?></td>
              <!-- 这里判断权限超管才显示 -->
              <td >
              <button class="am-btn am-btn-default am-btn-xs am-text-secondary" onclick="changStatus(<?php echo ($val["adn_id"]); ?>,this);" ><?php echo ($val["adn_status"]); ?></button>
              </td>

              <!-- <td><button class="am-btn am-btn-default am-btn-xs am-text-secondary" onclick="stu(<?php echo ($val["adn_id"]); ?>,this);">禁用</button></td> -->
              <!-- end -->

              <td>
                <div class="am-btn-toolbar">
                  <div class="am-btn-group am-btn-group-xs">
                    <a class="am-btn am-btn-default am-btn-xs am-text-secondary editt" href="<?php echo U('Admin/Admin/save',array('adn_id'=>$val['adn_id']) );?>" ><span class="am-icon-pencil-square-o"></span> 编辑</a>
                    <button class="am-btn am-btn-default am-btn-xs am-text-danger " onclick="del(<?php echo ($val["adn_id"]); ?>,this)"><span class="am-icon-trash-o">删除 </span> </button>
                     <!-- href="<?php echo U('Admin/Admin/del',array('adn_id'=>$val['adn_id']) );?>" -->
                  </div>
                </div>
              </td>
              <td></td>
              <td></td>
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
<script src='/PigpishCat/Public/js/admin.js'></script>
<script type="text/javascript">
        function changStatus(id,btn)
        {
            var adn_status = $(btn).html();
            // console.log(id);
            // console.log(adn_status);
            if(adn_status == '启用中'){
                $.post("<?php echo U('Admin/Admin/Savestuu');?>",{'adn_status':2,'adn_id':id},function(data){
                            $(btn).html('禁用中');
                });
            }else if(adn_status == '禁用中'){
              $.post("<?php echo U('Admin/Admin/Savestuu');?>",{'adn_status':1,'adn_id':id},function(data){
                            $(btn).html('启用中');
                });
            }
          
       }

       var adn_grade = ('<?php echo ($_SESSION['adminInfo']['adn_grade']); ?>');
       // console.log(adn_grade);
       // $('button').click(function(){
          if (adn_grade > 0){
              $('button').attr('disabled','disabled');
              $('.editt').attr('disabled','disabled');
              $('.xinzeng').attr('disabled','disabled');
              // if()
          }
       // });

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