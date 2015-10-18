<?php

	$cno = $_POST["cno_detail"];
	session_start();
	$_SESSION["temp"][1] = $cno;
	$con = mysql_connect("localhost","root","");
	echo"
	<script>
	window.location.href='../html/teacher/teacher-index-detail.php'</script>";
	
?>