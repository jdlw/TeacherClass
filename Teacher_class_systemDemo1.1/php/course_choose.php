<?php 
	$thr = $_POST["se_cno"];
	//var_dump($_POST);
	//var_dump($thr);	
	$arr = array();
	foreach($thr as $v){
		if(isset( $_POST[$v] )){
			$temp = explode('.', $_POST[$v]);
			$arr[] = array(
				'cno'=>$temp[0],
				'tno'=>$temp[1]	
				);
			unset($_POST[$v]);

		}
	}
	 session_start();
	 $snoo = $_SESSION["temp"][0];
	//var_dump($arr);
	$con = mysql_connect("localhost","root","");
	mysql_query("SET NAMES UTF8");
	mysql_select_db("stc", $con);
	for($i = 0; $i < count($arr); $i++){
		$cnoo=$arr[$i]['cno'];
		$tnoo=$arr[$i]['tno']; 
		mysql_query("INSERT INTO `sc` (`cno`, `tno`, `sno`) VALUES ('$cnoo','$tnoo','$snoo') ");
		echo"<script>
		window.location.href='../html/student/student-index.php'</script>";
	}



?>