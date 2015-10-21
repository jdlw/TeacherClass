<?php 
 	session_start();
    $sno = $_SESSION["temp"][0];
  	$sname = $_POST["name"];
  	$ssex = $_POST["sex"];
  	$sage = $_POST["age"];
	 $pwd = $_POST["password"];
   header("Content-type: text/html; charset:utf-8");
	 $con = mysql_connect("localhost","root","");
	if (!$con)
  	{
  		die('Could not connect: ' . mysql_error());
  	}

  	else
  	{
  		mysql_select_db("stc", $con);//连接到数据库
      mysql_query("SET NAMES UTF8");
  		mysql_query("UPDATE student SET sname = '$sname'  WHERE 	sno = '$sno'");
      mysql_query("UPDATE student SET ssex = '$ssex'  WHERE   sno = '$sno'");
      mysql_query("UPDATE student SET sage = '$sage'  WHERE   sno = '$sno'");
      mysql_query("UPDATE student SET spassword = '$pwd'  WHERE   sno = '$sno'");
      echo"<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>";
      echo"<script>alert('修改信息成功,请重新登录');
      window.location.href='../html/login.html'</script>";
  	}
?>