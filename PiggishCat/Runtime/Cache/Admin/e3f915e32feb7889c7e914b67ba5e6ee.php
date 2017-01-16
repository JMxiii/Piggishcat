<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en"> 
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script type="text/javascript" src="/PigpishCat/Public/js/jquery-2.1.3.min.js"></script>
	<script type="text/javascript" src="/PigpishCat/Public/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="/PigpishCat/Public/css/bootstrap.min.css" />
</head>
<body>
	<h2 style='color:green'>用户添加</h2>
	<form  class="form-horizontal" action="<?php echo U('Admin/admin/add');?>" method='post' >
		<div class="form-group">
			<label for="" class="col-sm-2 control-label">用户名</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="inputEmail3" placeholder="用户名请输入6-16位" name='adn_user' style='width:300px' required><br>
			</div>

			<label for="" class="col-sm-2 control-label">管理员姓名</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="inputEmail3" name='adn_name' style='width:300px' required><br>
			</div>

			<label for="" class="col-sm-2 control-label">密码</label>
			<div class="col-sm-10">
				<input type="password" class="form-control" id="inputEmail3" name='adn_pass' placeholder="密码6-16" style='width:300px' required><br>
			</div>
			<label for="" class="col-sm-2 control-label">确认密码</label>
			<div class="col-sm-10">
				<input type="password" class="form-control" id="inputEmail3" name='repwd'  placeholder="确认密码" style='width:300px' required><br>
			</div>
			<label for="" class="col-sm-2 control-label">手机</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="inputEmail3" name='adn_phone'  placeholder="phone" style='width:300px' required><br>
			</div>
			<label for="" class="col-sm-2 control-label">身份证号码</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="inputEmail3" name='adn_identity' placeholder="身份证号码" style='width:300px' required><br>
			</div>                    
		</div>
		
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-default">确认</button>
				<button type="submit" class="btn btn-default" onclick="return confirm('确定要重置吗？');">重置</button>
			</div>
		</div>
	</form>
</body>
      <script>
		$('#logpic').change(function(){
			// alert(window.URL.createObjectURL(this.files[0]));
			$('#logimg').html("<img src ='"+window.URL.createObjectURL(this.files[0])+"' width='150'/>");
		});
	</script>
</html>