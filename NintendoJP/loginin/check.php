<?php  //登陆信息验证
include "headerfiles.php";
session_start();
if($_SESSION["validcode"] != $_POST['codeNum'])
{
	echo"<script>alert('验证码错误，登陆失败!');history.go(-1);</script>";
}
else
{
	$user=$_POST['user'];
	$pass=$_POST['pass'];
	$id=$_POST['user'];
    $check_user="select * from users where username='$user' and password='$pass'";
    $check_ID="select * from users where UID='$id' and password='$pass'";
    $result_user=mysqli_query($conn,$check_user);
	$result_ID=mysqli_query($conn,$check_ID);
	$row_user=mysqli_fetch_array($result_user,MYSQLI_NUM);
//	$row_ID=mysqli_fetch_array($result_ID,MYSQLI_NUM);
	if(!is_null($row_user)/*||!is_null($row_ID)*/)
	{
//		$check_logintimes="select * from users where (username='$user' or UID='$id') and Ulogtimes<=3" ;
//		$result_logintimes=mysqli_query($conn,$check_logintimes);
//		$row_logintimes=mysqli_fetch_array($result_logintimes,MYSQLI_NUM);
////		if(!is_null($row_logintimes))
////		{
//			$restore="update users set Ulogtimes=0 where username='$user'or UID='$id'";
//			//登陆错误次数归零
//			@$result = mysqli_query($conn,$restore);
			echo "登录成功";
//		}
//		else 
//		{
//			echo"<script>alert('输入密码错误次数过多，已禁止登陆!');history.back();</script>";
//		}
//		
	}
//	else  //登陆错误，若ID或用户名正确，记录登陆错误次数
//	{   
//		$check="select * from users where username='$user'or UID='$id'";
//	    $result=mysqli_query($conn,$check);
//	    $row=mysqli_fetch_array($result,MYSQLI_NUM);
//		if(!is_null($row))//用户名存在,登陆错误次数加一
//		{   
//			$check="update users set Ulogtimes=Ulogtimes+1 where username='$user'";
//          @$result = mysqli_query($conn,$check);
//		}
//		echo "<script>alert('密码错误，登陆失败!');history.back();</script>";
//	} 
}
?>