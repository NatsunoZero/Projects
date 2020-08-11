<?php
session_start();
header("Content-Type:text/html;charset=utf-8");
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title></title>
		<style>
			.styleForBody{
				margin: 0;
				text-align:center;
			}
			.nc3-c-gheader-dfHeader__logo{
				background-color: /*#e60012*//*yellow*/;
				width: 135px;
				height: 75px;
			}
			.nc3-c-gheader-dfHeader__logo svg{
				height: 21.99px;
				width: 84.17px;
				margin-top:17.5px;
			}
			.js-l10n{
				align-content: center;
				text-align: center;
				font-size: 14px;
				margin-left: -150px;
			}
			.loginintable{
				margin-top: 27px;
				margin-left: 682px;
				background-color: white;
			    border: 0.8px solid #C3C3C3;
				height: 556px;width: 542px;
				border-top-left-radius: 10px;
			    border-top-right-radius: 10px;
				border-bottom-left-radius: 10px;
				border-bottom-right-radius: 10px;
			}
			
			/*修改提示文字的颜色*/

			input::-webkit-input-placeholder { /* WebKit browsers */ 
				color: #C3C3C3; 
			} 
			input:-moz-placeholder { /* Mozilla Firefox 4 to 18 */ 
				color: #C3C3C3; 
			} 
			
			input::-moz-placeholder { /* Mozilla Firefox 19+ */ 
				color: #C3C3C3; 
			} 
			
			input:-ms-input-placeholder { /* Internet Explorer 10+ */ 
				color: #C3C3C3; 
			} 
			
			.btn{
				width: 153px;height: 40px;
				background: #ccc;
				border: 1px solid #eee;
				color: white;
				border-radius: 15px;
			}
		</style>
		<script type="text/javascript" src="../js/jquery-3.3.1.min.js" ></script>
		<link href="./css/C.css" rel="stylesheet" type="text/css" />
	</head>
	<body class="styleForBody">
		
		<div style="height: 62px; background-color: #e60012">
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
					<td bgcolor="white" width="1786px" style="text-align: center;">
						<span class="js-l10n">Nintendo Account</span>
					</td>
				</tr>
			</table>
		</div>
		
		<div style="background-color: #f3F3F3; height: 100%;">
			<br />
			<br />
			<span style="font-size: 28px; color: white; " >Nintendo Account</span>
			<br />
			<table class="loginintable" cellspacing="30px">
				<tr>
					<td colspan="2">
						<!--<form method="post" action="safe_check_login.php">
							<label><input type="text" name="username" value="" class='info' placeholder="電子郵件信箱 / 登入ID" style="text-indent:15px; border-radius:9px; width: 427px; height: 47px; border:2.5px solid #D3D3D3; outline:none" /></label>
							<br />
							<label><input type="password" name="password" value="" class="info"  placeholder="密碼" style="text-indent:15px; border-radius:9px; width: 427px; height: 47px; border:2.5px solid #D3D3D3; margin-top: 15px;outline:none" /></label>-->
							
							<!--
								1.要提交的数据一定要放在 form 标签之下，这样才能够正常的把表单数据 POST 给 PHP ；
								2. input 标签的 name 参数是 POST 的变量名，后端需与之对应（后面会写）；
								3. action 参数中之所以用了 htmlspecialchars 函数，是为了防攻击，将可能被附加在地址上的代码格式化，使其无法执行。
							-->
					</td>
				</tr>
				<tr style="margin-top: 17.5px;">
					<td>
						<img src="img/forgotpsw1.png" style="margin-left: 20px;" />
					</td>
					<td>
						<label><input type="checkbox" name="autologin[]" value="1"/>自动登录</label><br>
						<label><input type="button" name="submit" value="登入" class="btn" style="outline:none; margin-right: 25px;" /></label>
						</form>
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<img src="img/hokanoaccount.png" />
					</td>
				</tr>
				<tr>
					<td colspan="2">沒有帳號的玩家</td>
				</tr>
				<tr>
					<td colspan="2">
						<a href="../regitser/index.html"><input type="button" value="新建賬號" class="btn" style="outline:none; margin-right: 25px; background: #E60012;" /></a>
					</td>
				</tr>
			</table>
			
			<div style="z-index: 9999; position: fixed ! important; right: 10px; top: 500px;">
				<table>
					<tr>
						<td>
							<img src="img/1.png" />
						</td>
					</tr>
					<tr>
						<td>
							<img src="img/2.png" />
							
						</td>
					</tr>
					<tr>
						<td>
							<img src="img/3.png" />
						</td>
					</tr>
				</table>
			</div>
			
			
		</div>
	</body>
</html>
