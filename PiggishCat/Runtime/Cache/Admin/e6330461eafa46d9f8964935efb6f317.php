<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head lang="en">
        <meta charset="UTF-8">
        <title>馋猫-管理员登陆</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="format-detection" content="telephone=no">
        <meta name="renderer" content="webkit">
        <meta http-equiv="Cache-Control" content="no-siteapp" />
         

         <link rel="stylesheet" type="text/css" href="/PigpishCat/Public/Admin/css/amazeui.min.css" />
         <script type="text/javascript" src="/PigpishCat/Public/Home/js/jquery-2.1.3.min.js"></script>
         <script type="text/javascript" src="/PigpishCat/Public/Home/alert/js/sweet-alert.js"></script>
    <link rel="stylesheet" type="text/css" href="/PigpishCat/Public/Home/alert/css/sweet-alert.css" />
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

            #logo{
                height:70px;
                width:70px;
                border:1px solid black;
            }
        </style>
    </head>
    <body>
        <div class="header">
            <hr /> 
        </div>
        <div class="am-g">
            <div class="am-u-lg-6 am-u-md-8 am-u-sm-centered">
                <h3>管理员登录</h3>
                <hr>
                <div class="am-btn-group" ><img src="/PigpishCat/Public/home/images/logo3.jpg" alt=""></div>
                <br>
                <br>
                <form method="post" action="<?php echo U('Admin/Login/login');?>" class="am-form">
                    <label for="email">管理员账号:</label>
                    <input type="text" name="adn_user" id="aid" value="">
                    <br>
                    <label for="password">密码:</label>
                    <input type="password" name="adn_pass" id="pwd" value="">
                    <br>
                    <!-- 验证码 -->
                    <input type="type" name="code" id="codde" value="">
                    <img style="cursor:pointer;" src="<?php echo U('Admin/Login/code');?>" id="imgyzm" onclick="this.src='<?php echo U('Admin/Login/code');?>'" >
                    <!-- 验证码 -->

                    <br>
                    <label for="remember-me">
                        <input id="remember-me" type="checkbox">
                        记住密码
                    </label>
                    <br />
                    <div class="am-cf">
                        <input type="submit" name="" value="登 录" id="dosub" class="am-btn am-btn-primary am-btn-sm am-fl">
                        <input type="submit" name="" value="忘记密码  ? " class="am-btn am-btn-default am-btn-sm am-fr">
                    </div>
                </form>
                <hr>
                <p>© 馋猫项目组 版权所有.</p>
            </div>
        </div>
  </body>
  <script>
  var imgyzm = document.getElementById('imgyzm');
        $('#dosub').click(function(){
            if($('#aid').val() == "" || $('#pwd').val() == "" || $('#codde').val() == "") {
                     sweetAlert('登录失败',"请填写完整的信息!","error");
            imgyzm.src = "<?php echo U('Admin/Login/code');?>?"+Math.random();
             return false;
            }
           
        });

  </script>
</html>