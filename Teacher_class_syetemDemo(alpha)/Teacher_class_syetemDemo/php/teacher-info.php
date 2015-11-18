
<?php 
  session_start();
   echo"<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>";
  $workNumber = $_SESSION["temp"][0];
  $name = $_POST["name"];
  $sex =$_POST["sex"];
  $birthday=$_POST["birthday"];
  $department=$_POST["department"];
  $telephone = $_POST["telephone"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $repassword = $_POST["repassword"];
  //判断表格是否未填写
  $empty = 0;
  
  //判断两次密码是否一致
  $equal_pwd = 1;

  // var_dump($major);
  // echo count($major)."</br>";
  if($name==''&&$sex==''&&$password==''&&$repassword==''&&$birthday==''&&$department==''&&$telephone==''&&$email=='')
    {
      $empty=1;
      //echo $empty."</br>";
    }
  else
    {
        if($password!=$repassword)
          $equal_pwd=0;
        else{
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
                 
                  echo"<script>alert('修改信息成功！');
                  window.location.href='../html/index.php'</script>";
                }
            }
          }
        //不合法的处理
        if($empty==1){
          echo"<script>alert('未填写内容，无信息修改！');
          window.location.href='../html/teacher/teacher-information-change.php'</script>";
          }
        else if($password!=''&&$repassword!=''&&$equal_pwd==0) 
          { 
          echo"<script>alert('两次密码输入不一致！')
          window.location.href='../html/teacher/teacher-information-change.php'</script>";
          } 
          
    
    ?>
  