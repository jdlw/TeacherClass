
<?php 
  session_start();
  $workNumber = $_SESSION["temp"][0];
  $name = $_POST["name"];
  $sex =$_POST["sex"];
  $birthday=$_POST["birthday"];
  $department=$_POST["department"];
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
      mysql_query("UPDATE user_teacher SET name = '$name'               WHERE   workNumber = '$workNumber' AND '$name' != ''");
      mysql_query("UPDATE user_teacher SET sex = '$sex'                 WHERE   workNumber = '$workNumber' AND '$sex' != ''");
      mysql_query("UPDATE user_teacher SET birthday = '$birthday'       WHERE   workNumber = '$workNumber' AND '$birthday' != ''");
      mysql_query("UPDATE user_teacher SET department = '$department'   WHERE   workNumber = '$workNumber' AND '$department' != ''");
      mysql_query("UPDATE user_teacher SET telephone = '$telephone'     WHERE   workNumber = '$workNumber' AND '$telephone' != ''");
      mysql_query("UPDATE user_teacher SET email = '$email'               WHERE   workNumber = '$workNumber' AND '$email' != ''");
      mysql_query("UPDATE user_teacher SET password = '$password'       WHERE   workNumber = '$workNumber' AND '$password' != ''");
      
      echo"<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>";
      if ($name != "" || $sex != "" || $birthday != "" || $department != "" || $telephone != "" || $email != "" || $password != "" ) {
        if($td==true){
          echo"<script>alert('两次密码输入不一致，密码修改失败！ 其余信息修改成功!');
          window.location.href='../html/teacher/teacher-information.php'</script>";
          } else{
             echo"<script>alert('修改信息成功！');
             window.location.href='../html/teacher/teacher-information.php'</script>";
             }
        }else{
          if($td == false){
          echo"<script>alert('未填写内容，无信息修改！');
          window.location.href='../html/teacher/teacher-information-change.php'</script>";
          }else{
          echo"<script>alert('两次密码输入不一致，修改信息失败！');
          window.location.href='../html/teacher/teacher-information-change.php'</script>";
          }
        }
    }
  

    ?>
  