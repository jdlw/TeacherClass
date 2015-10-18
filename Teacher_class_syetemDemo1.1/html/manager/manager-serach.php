<?php 
$sercah = $_POST["serach_sno"]; 
if($sercah!=NULL)
{
	session_start();
	$_SESSION["serach"][0]=$serach;
}
else
{
	$sercah = $_POST["serach_tno"]; 
	session_start();
	$_SESSION["serach"][0]=$serach;
}
echo $serach;
?>