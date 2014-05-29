<?php
$link = mysql_connect("localhost","root","root","0");
mysql_select_db("users",$link);
$username = $_POST['username'];
$pwd = $_POST['pwd'];
$exec="select pwd from user where username = '$username' and pwd = '$pwd'";
$result = mysql_query($exec,$link);
$n = 0;
if(mysql_fetch_array($result,MYSQL_ASSOC))
{
     
   echo "<script>alert('欢迎进入！')</script>";		
   $n = 1;		
}

if($n == 0)
{
   
   echo "<script>alert('用户名不存在或密码错误！')</script>";
   
}
mysql_close($link);
?>