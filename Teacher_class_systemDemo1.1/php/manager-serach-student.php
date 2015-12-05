<?php 
$serach = $_POST["serach_sno"]; 
if($serach!=NULL)
{
	session_start();
	$_SESSION["serach"][0]=$serach;
	echo"<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>";
		echo"
		<script>
		window.location.href='../html/manager/manager-class-serach.php'</script>";
}
else
{
	$serach = $_POST["serach_tno"]; 
	if($serach!=NULL)
	{
		session_start();
		$_SESSION["serach"][0]=$serach;
		echo"<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>";
		echo"
		<script>
		window.location.href='../html/manager/manager-class-serach.php'</script>";

	}
	else
	{
		echo"<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>";
		echo"
		<script>alert('输入为空！');
		window.location.href='../html/manager/manager-class.php'</script>";
	}
}
//echo $serach;
?>