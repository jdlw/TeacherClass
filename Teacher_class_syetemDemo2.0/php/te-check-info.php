
<?php 
  session_start();
  $workNumber = $_SESSION["temp"][0];
  $name = $_POST["name"];
  $telephone = $_POST["telephone"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $repassword = $_POST["repassword"];
  $td=false;
  if ($password == ""){
    $td = false;
  }else if($password != $repassword) {
      $password = "";
      $td = true;
  }
  $con = mysql_connect("localhost","root","");
  if (!$con)
    {
      die('Could not connect: ' . mysql_error());
    }
    else
    {
      mysql_select_db("teacher_class_system", $con);//连接到数据库
      mysql_query("SET NAMES UTF8");
      mysql_query("UPDATE user_teaching_office SET name = '$name'               WHERE   workNumber = '$workNumber' AND '$name' != ''");
      mysql_query("UPDATE user_teaching_office SET telephone = '$telephone'     WHERE   workNumber = '$workNumber' AND '$telephone' != ''");
      mysql_query("UPDATE user_teaching_office SET email = '$email'               WHERE   workNumber = '$workNumber' AND '$email' != ''");
      mysql_query("UPDATE user_teaching_office SET password = '$password'       WHERE   workNumber = '$workNumber' AND '$password' != ''");
      
      echo"<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>";
      if ($name == "" && $telephone == "" && $email == "" && $password == ""){
          if($td == false ){
          echo"<script>alert('未填写内容，无信息修改！');
          window.location.href='../html/teaching_office/teaching_office-information.php'</script>";
          } else{
            echo"<script>alert('两次密码输入不一致，密码修改失败！');
            window.location.href='../html/teaching_office/teaching_office-information.php'</script>";
            }
        }else{
          if($td == false){
          echo"<script>alert('修改信息成功！');
          window.location.href='../html/teaching_office/teaching_office-information.php'</script>";
          }else{
            echo"<script>alert('两次密码输入不一致，密码修改失败！其余信息修改成功');
            window.location.href='../html/teaching_office/teaching_office-information.php'</script>";
          }
       }
    }

    ?>
  