<?php
	session_start();
	$login_user=$_SESSION["temp"][0];
	$cno = $_POST["cno"];
	$cname = $_POST["cname"];
	$classroom = $_POST["classroom"];
	$credit = $_POST["credit"];
	$plan_time = $_POST["plan_time"];
	$tno2 = $_POST["tno2"];
	$tno3 = $_POST["tno3"];
	//echo $cno."</br>".$cname."</br>".$classroom."</br>".$tno2."</br>".$tno3."</br>";
	$con = mysql_connect("localhost","root","");
	if (!$con)
    {
      die('Could not connect: ' . mysql_error());
    }
    else
    {
    	 mysql_select_db("stc", $con);//连接到数据库
      	 mysql_query("SET NAMES UTF8");

      	 $ins=mysql_query("INSERT INTO course(cno,cname,classroom,credit,plan_time,tno1) 
      	 VALUES ('$cno','$cname','$classroom','$credit','$plan_time','$login_user')");
      	 if(!$ins)
      	 {
      	 	echo"<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>";
      	 	echo"<script>alert('该课程号已被使用！开课失败');
				window.location.href='../html/teacher/teacher-class-open.php'</script>";
      	 }
      	 else 
      	 {
      	 	if ($tno2!='0') {
      	 		mysql_query("INSERT INTO course(cno,cname,classroom,credit,plan_time,tno1) 
      	 		VALUES ('$cno','$cname','$classroom','$credit','$plan_time','$tno2')");
 	
      	 	}
      	 	if ($tno3!='0') {
      	 		mysql_query("INSERT INTO course(cno,cname,classroom,credit,plan_time,tno1) 
      	 		VALUES ('$cno','$cname','$classroom','$credit','$plan_time','$tno3')");
 	
      	 	}
      	 	echo"<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>";
      	 	echo"<script>alert('开课成功！');
		 	window.location.href='../html/teacher/teacher-index.php'</script>";
		 }
		 
    }
?>