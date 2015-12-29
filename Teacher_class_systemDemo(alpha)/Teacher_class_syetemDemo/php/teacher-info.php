<?php 
require dirname(__DIR__).'/lib/functions.php';
  session_start();
   header("Content-type: text/html; charset=utf-8"); 
  $workNumber = $_SESSION["temp"][0];
  $name = $_POST["name"];
  $sex =$_POST["sex"];
  // $birthday=$_POST["birthday"];
  $department=$_POST["department"];
  $telephone = $_POST["telephone"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $repassword = $_POST["repassword"];
  //判断表格是否未填写
  $empty = 0;
  
  //判断两次密码是否一致
  $equal_pwd = 1;

  if($name==''&&$sex==''&&$password==''&&$repassword==''&&$department==''&&$telephone==''&&$email=='')
    {
      $empty=1;
    }
  else
    {
        if($password!=$repassword)
          $equal_pwd=0;
        else{
                $con = get_db();
                mysql_query("UPDATE user_teacher SET name = '$name'               WHERE   workNumber = '$workNumber' AND '$name' != ''");
                mysql_query("UPDATE user_teacher SET sex = '$sex'                 WHERE   workNumber = '$workNumber' AND '$sex' != ''");
                // mysql_query("UPDATE user_teacher SET birthday = '$birthday'       WHERE   workNumber = '$workNumber' AND '$birthday' != ''");
                mysql_query("UPDATE user_teacher SET department = '$department'   WHERE   workNumber = '$workNumber' AND '$department' != ''");
                mysql_query("UPDATE user_teacher SET telephone = '$telephone'     WHERE   workNumber = '$workNumber' AND '$telephone' != ''");
                mysql_query("UPDATE user_teacher SET email = '$email'               WHERE   workNumber = '$workNumber' AND '$email' != ''");
                mysql_query("UPDATE user_teacher SET password = '$password'       WHERE   workNumber = '$workNumber' AND '$password' != ''");
                jump_success('修改信息成功！','../index.php');
            }
          }
        //不合法的处理
        if($empty==1){
          jump_error('未填写内容，无信息修改！');
          }
        else if(($password!=''&&$repassword!='') || ($equal_pwd==0)) 
          { 
          jump_error('两次密码输入不一致！');
          } 
          
    
    ?>
  