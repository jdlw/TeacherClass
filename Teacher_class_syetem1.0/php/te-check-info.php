
<?php 
  session_start();
  $tno = $_SESSION["temp"][0];
  $tname = $_POST["name"];
  $tsex = $_POST["sex"];
  $tage = $_POST["age"];
  $pwd = $_POST["password"];
  $con = mysql_connect("localhost","root","");
  if (!$con)
    {
      die('Could not connect: ' . mysql_error());
    }
    else
    {
      mysql_select_db("stc", $con);//连接到数据库
      mysql_query("SET NAMES UTF8");
      mysql_query("UPDATE teacher SET tname = '$tname'   WHERE   tno = '$tno'");
      mysql_query("UPDATE teacher SET tsex = '$tsex'     WHERE   tno = '$tno'");
      mysql_query("UPDATE teacher SET tage = '$tage'     WHERE   tno = '$tno'");
      mysql_query("UPDATE teacher SET tpassword = '$pwd' WHERE   tno = '$tno'");
      
      echo"<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>";
      echo"<script>alert('修改信息成功,请重新登录');
      window.location.href='../html/login.html'</script>";
    }

    ?>
  