<?php
    //登录验证
    //连接数据库
    $db=new mysqli('localhost','root','','phpdb');
    !mysqli_connect_error() or die("连接失败");
    $db->query("users");
    
    /*接收用户输入*/
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    //执行sql语句
    $sql="select password from user where username = '$username'";
    $result=$db->query($sql);
    $attr = $result->fetch_row();
    if($password != "" && $password == $attr[0]){
    echo '登录成功';
    }