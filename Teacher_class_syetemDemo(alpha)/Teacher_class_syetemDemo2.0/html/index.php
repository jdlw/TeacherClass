<?php
  require dirname(__DIR__).'/lib/functions.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
  <title>教师报课系统-登录</title>
  <link href="../css/base.css" type="text/css" rel="stylesheet"/>
	  <script language="javascript"  src="../js/index.js" ></script>
	  
	  <script language="javascript"  src="../js/jquery.js" ></script>
	  <script type="text/javascript">
	  $(function(){
   	setSize();
   }
   	)
       $(window).resize(function(){
       		setSize();
       });
        function setSize() {
            var height1 = $("#bgConsure").height();
            var height2 = $("#footer").height();
            var number = parseInt(height1);
            var right_nav = $("#right-nav").height();
            var min_height = number - 110;
             var r_min_height = min_height - right_nav;
            $("#login-content").css('min-height', min_height);
            
            //alert(left);
        };
    </script> 
</head>

<body>

	<div id="bgConsure" style="position: absolute; z-index: -1px; height: 100%; width: 40px">
    </div>

	
		<div id="login-box">
			<form action="../php/login.php" method="post">
				<div id="login-head">
					<h3><img src="../image/form-logo1.png"></h3>
				</div>
				<div class="input-box">
				<input placeholder="工号:" id="login-user" type="text"   name="login-user" required="required"/>
				</div>
				<div class="input-box">
				<input placeholder="密码:" id="login-pass" type="password"   name="login-password" required="required"/></br>
				</div>
				<div id="iden">
					<input type="radio" name="ident" value="teacher"  checked="checked" /> 教师
					<input type="radio" name="ident" value="department_head" />系负责人
					<input type="radio" name="ident" value="teaching_office" />教学办
				</div>
				<div class="submit-box">
				<input type="submit" class=" btn-recover btn-submit" id="sub-recover" value="找回密码" class="btn-serach login-btn">
	           	 <input type="submit" class=" btn-success btn-submit" id="sub-login" value="登&nbsp;&nbsp;&nbsp; 录" />
	           	</div>
			</form>
		</div>
		
       <?php
		$year =date("Y");
		$date =date("Ymd");
		header("Content-type: text/html; charset:utf-8");                 
    $con = get_db();
    $result = mysql_query("SELECT * FROM task_info where year = '$year'");
    while($row = mysql_fetch_array($result))
    {
      $table_name=$row["relativeTable"];
      if($row["teacherDeadline"]<$date&&$row["taskState"]=='0')
      {
        $result1 = mysql_query("UPDATE `task_info` SET `taskState` = '1' where relativeTable='$table_name'");
      }
      if($row["departmentDeadline"]<$date&&$row["taskState"]=='1')
      {
        $result1 = mysql_query("UPDATE task_info SET taskState = '2' where relativeTable='$table_name'");
      }
    }
		?>
				
	<div id="footer">
	</div>
</body>
</html>