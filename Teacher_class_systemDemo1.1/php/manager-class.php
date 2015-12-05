<?php

	$cno = $_POST["cno_detail"];
	$tno = $_POST["tno_detail"];
	session_start();
	//echo $cno.$tno;
	
	$_SESSION["temp"][2] = $cno;
	$_SESSION["temp"][3] = $tno;
	$con = mysql_connect("localhost","root","");
	echo"
	<script>
	window.location.href='../html/manager/manager-index-detail.php'</script>";
	
?>