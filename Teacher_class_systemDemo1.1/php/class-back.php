<?php
	$sno=$_POST["re_sno"];
	$cno=$_POST["re_cno"];
	$tno=$_POST["re_tno"];
	//echo $sno.$cno.$tno;
	$con = mysql_connect("localhost","root","");
	if (!$con)
  	{
  		die('Could not connect: ' . mysql_error());
  	}
  	else
  	{	    mysql_query("SET NAMES UTF8");
  			mysql_select_db("stc", $con);//连接到数据库
  			$result = mysql_query("DELETE from sc where sc.tno=$tno and sc.cno =$cno 
  				and  sc.sno=$sno");
  			if(!$result)
  			{
  				echo"<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>";
				echo"<script>alert('退选失败');
				window.location.href='../html/student/student-index.php'</script>";
			}
			else
			{
				echo"<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>";
				echo"<script>alert('退选成功');
				window.location.href='../html/student/student-index.php'</script>";
			}
			$jud=1;
							
						
  	}
?>