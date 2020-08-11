<?php
header("Content-Type:text/html;charset=utf-8");
?>
<html>
	<head>
		<meta charset="utf-8">
		<title>注册</title>
		<link href="./css/C.css" rel="stylesheet" type="text/css" />
	</head>
 <body>
		<div class="box"> 
		<h2>Register</h2>
		<!--将用户输入的user,和pass提交到login.php-->
		<form action="check2.php" method="post" enctype="multipart/form-data">
			<div class="inputBox"><input type="text" name="user" value="" required="required"placeholder=   "            请输入您的用户名"><label>用户名</label></div>
			<div class="inputBox"><input type="password" name="pass" value=""required="required"placeholder="            请输入您的密码"><label>密码</label></div>
			<div class="inputBox"><input type="password" name="confirm" value=""required="required"placeholder="            请重复您的密码"><label>确认密码</label></div>
			<div class="inputBox"><input type="text" value="" name="codeNum" required="required"placeholder="            请输入验证码"><label>验证码</label></div>
			<input type="submit" name="submit" value="确认注册">
			<input type="button" "window.location.href='index.php'" value="返回登陆">
			<img src="code.php" style="width:100px;height:25px;" id="code"/>
		</form>
		</div>
	</body>
</html>