<?php
session_start();
header("Content-Type:text/html;charset=utf-8");
?>
<html>
	<head>
		<meta charset="utf-8">
		<title>Nintendo Account</title>
		<link href="./css/C.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="./css/css.css" />
		<script type="text/javascript" src="./js/jquery-3.3.1.min.js" ></script>
		<script type="text/javascript" src="./js/onMouseover.js" ></script>
	</head>
 <body >
 	<div style="height: 62px; background-color: #e60012" >
			<table style="border="0" cellpadding="0" cellspacing="0"; text-align: center;">
				<tr>
					<td>
						<a href="../">
							<div class="nc3-c-gheader-dfHeader__logo" align="center">
								<svg>
									<use xlink:href="#nc3-svgpack-logo-nintendo">
										<svg id="nc3-svgpack-logo-nintendo" viewBox="0 0 176 46">
											<path d="M32.613 27.231l-8.8-15.1h-6.358v21.648h6.32v-15.1l8.842 15.1h6.3V12.135h-6.309zm50.077-7.816v-2.142h-3.325v-2.912h-6.143v2.916h-3.339v2.137h3.337v14.367h6.149V19.414h3.325zM42.431 33.782h6.138V19.389h-6.138v14.4zm-.015-17.227h6.153V12.13h-6.153v4.425zM149.99 18.4c-4.954 0-8.971 3.619-8.971 8.082s4.017 8.084 8.971 8.084 8.97-3.618 8.97-8.084-4.016-8.082-8.97-8.082zm2.46 11.111c0 2.3-1.277 3.244-2.508 3.244s-2.516-.948-2.516-3.244v-3.1-3c0-2.284 1.285-3.223 2.509-3.223s2.507.939 2.507 3.223c0 .871 0 2.485.006 3.064.006.036.002 2.179.002 3.041zM132.963 20.1a7.857 7.857 0 0 0-3.473-1.285c-4.423-.412-7.8 3.737-7.8 7.537a7.675 7.675 0 0 0 4.2 7.138 7.017 7.017 0 0 0 7.064-.542v.833h6.068V12.135h-6.057V20.1zm.043 6.411v2.554c0 2.224-1.452 2.806-2.408 2.806-.975 0-2.4-.582-2.4-2.806v-2.562-2.566c0-2.226 1.43-2.793 2.407-2.793.954 0 2.4.567 2.4 2.793l.001 2.574zm-70.068-7.788a7.188 7.188 0 0 0-4.895 2.171c-.006-.357 0-1.514 0-1.514h-6.1v14.395h6.093l-.006-9.454a2.893 2.893 0 0 1 2.914-2.649 2.785 2.785 0 0 1 2.8 2.649v9.459h6.1v-7.832a6.794 6.794 0 0 0-6.906-7.225zm49.879 0a7.188 7.188 0 0 0-4.894 2.171c-.007-.357 0-1.514 0-1.514h-6.09v14.395h6.093l-.006-9.454a2.893 2.893 0 0 1 2.914-2.649 2.785 2.785 0 0 1 2.8 2.649v9.459h6.1v-7.832a6.793 6.793 0 0 0-6.917-7.225zm-12.845 7.924c0-4.465-4.066-8.163-9.057-8.163s-9.037 3.619-9.037 8.082 4.046 8.083 9.037 8.083a8.966 8.966 0 0 0 8.708-5.906h-6.118v.874c0 2.632-1.633 3.217-2.539 3.217s-2.568-.585-2.568-3.217v-2.973s11.574.008 11.574.003zm-11.16-5.068a2.429 2.429 0 0 1 4.317 0 5.775 5.775 0 0 1 .4 2.826h-5.124a5.742 5.742 0 0 1 .407-2.826zm72.588-6.77c0-.706-.493-1.062-1.485-1.062h-1.365v3.691h.85v-1.512h.416l.664 1.511h.941l-.776-1.65a.972.972 0 0 0 .755-.978zm-1.589.576h-.411v-1.071h.372c.509 0 .76.164.76.55-.004.366-.232.521-.72.521zm.025-3.081a3.338 3.338 0 1 0 3.142 3.333 3.241 3.241 0 0 0-3.141-3.337zm0 6.027a2.7 2.7 0 1 1 2.54-2.694 2.621 2.621 0 0 1-2.539 2.694zM152.992 0H23C9.242-.034 0 10.458 0 23.034s9.22 22.947 23.019 22.95h129.952c13.8 0 23.019-10.376 23.019-22.95S166.749-.029 152.992 0zm-.063 40.346H23.059c-10.966.041-17.63-7.766-17.63-17.344s6.7-17.324 17.63-17.345h129.87c10.926.022 17.629 7.766 17.629 17.345s-6.658 17.39-17.629 17.349z" fill-rule="evenodd" style="fill: white;"></path>
										</svg>
									</use>
								</svg>
							</div>
						</a>
					</td>
					<td bgcolor="white" width="1786px" style="text-align: center; height: 15px;">
						<span class="js-l10n">Nintendo Account</span>
					</td>
				</tr>
			</table>
		</div>
		
		
		
		<div style=" height: 100%;" class="styleForBody">
			<br />
			<br />
			<span style="font-size: 28px; color: white;" >Nintendo Account</span>
			<br />
			<table class="loginintable" cellspacing="30px" id="tableLogin" style="text-align: center; background-image: url(img/tablebackground1.png);" onmouseover="changeBackground()" onmouseleave="changeBackgroundRecover()">
				<tr>
					<td colspan="2">		
					</td>
				</tr>
				<tr style="margin-top: 17.5px;">
					<td>
						
					</td>
					<td>
						<label><input type="button"  onclick="gotologin()" name="submit" value="登入" class="btn" style="outline:none; margin-right: 25px;" /></label>
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<img src="img/hokanoaccount.png" id="noService" onmouseover="noService()" onmouseleave="noServiceRecover()" />
					</td>
				</tr>
				<tr>
					<td colspan="2">沒有帳號的玩家</td>
				</tr>
				<tr>
					<td colspan="2">
						<!--<a href="../regitser/index.html"><input type="button" value="新建賬號" class="btn" style="outline:none; margin-right: 25px; background: #E60012;" /></a>-->
						<input type="button" value="新建賬號" class="btn" onclick="gotoregister()" style="outline:none; margin-right: 25px; background: #E60012;" />
					</td>
				</tr>
			</table>
			<div style="z-index: 99999999999; position: fixed ! important; background-color: #f3F3F3;  right: 10px; top: 500px; border-top-left-radius: 10px;">
				<table>
					<tr>
						<td>
							<img src="img/1.png" id="img1" onmouseover="noLogin1()" onmouseleave="noLogin1Recover()"/>
						</td>
					</tr>
					<tr>
						<td>
							<img src="img/2.png" id="img2" onmouseover="noLogin2()" onmouseleave="noLogin2Recover()"/>
							
						</td>
					</tr>
					<tr>
						<td>
							
							<a href="javascript:;"><img src="img/3.png" id="img3" onmouseover="noLogin3()" onmouseleave="noLogin3Recover()" /></a>
						</td>
					</tr>
				</table>
			</div>
		</div>
		
		<div class="box" style="display: none;" id="loginHigh"> 
		<h2>登入</h2>
		<form action="check.php" method="post" enctype="multipart/form-data">
			<div class="inputBox"><input type="text" name="user" value="" required="required"placeholder=   "電子郵件信箱 / 登入ID" style="text-indent:85px;"><label>ID/Email</label></div>
			<div class="inputBox"><input type="password" name="pass" value=""required="required"placeholder="請輸入密碼" style="text-indent:85px;"><label>密碼</label></div>
			<div class="inputBox"><input type="text" width="100px" value="" name="codeNum" required="required"placeholder="請輸入驗證碼" style="text-indent:85px;"><label>驗證碼</label></div>
			<input type="submit" name="submit" value="登入">
			<input type="button" onclick="gotoregister()" value="註冊">
			<img src="code.php" style="width:100px;height:25px;" id="code"/>
		</form>
		</div>
		
		<div class="box" style="display: none;" id="registerHigh"> 
		<h2>Register</h2>
		<!--将用户输入的user,和pass提交到login.php-->
		<form action="check2.php" method="post" enctype="multipart/form-data">
			<div class="inputBox"><input type="text" name="user" value="" required="required"placeholder=   "请输入您的用户名" style="text-indent:85px;"><label>用户名</label></div>
			<div class="inputBox"><input type="password" name="pass" value=""required="required"placeholder="请输入您的密码" style="text-indent:85px;"><label>密码</label></div>
			<div class="inputBox"><input type="password" name="confirm" value=""required="required"placeholder="请重复您的密码" style="text-indent:85px;"><label>确认密码</label></div>
			<div class="inputBox"><input type="text" value="" name="codeNum" required="required"placeholder="请输入验证码" style="text-indent:85px;"><label>验证码</label></div>
			<input type="submit" name="submit" value="确认注册">
			<input type="button" onclick="gotologin()" value="返回登陆">
			<img src="code.php" style="width:100px;height:25px;" id="code"/>
		</form>
		</div>
	</body>
</html>