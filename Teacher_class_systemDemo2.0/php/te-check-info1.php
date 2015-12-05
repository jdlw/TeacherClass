
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
  $major=$_POST["major"];
  // if(!isset($_POST["major"]))
  // {
  //   $major=$_POST["major"];
  //   for($i=0;$i<count($major);$i++){
  //     echo "专业被选中".$i.":".$major[$i];//显示哪些复选框被选中
  //        }
  // }


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
      mysql_query("UPDATE user_department_head SET name = '$name'               WHERE   workNumber = '$workNumber' AND '$name' != ''");
      mysql_query("UPDATE user_department_head SET sex = '$sex'                 WHERE   workNumber = '$workNumber' AND '$sex' != ''");
      mysql_query("UPDATE user_department_head SET birthday = '$birthday'       WHERE   workNumber = '$workNumber' AND '$birthday' != ''");
      mysql_query("UPDATE user_department_head SET department = '$department'   WHERE   workNumber = '$workNumber' AND '$department' != ''");
      mysql_query("UPDATE user_department_head SET telephone = '$telephone'     WHERE   workNumber = '$workNumber' AND '$telephone' != ''");
      mysql_query("UPDATE user_department_head SET email = '$email'               WHERE   workNumber = '$workNumber' AND '$email' != ''");
      mysql_query("UPDATE user_department_head SET password = '$password'       WHERE   workNumber = '$workNumber' AND '$password' != ''");
      if(count($major)==1 && $major[0]!="软件工程"){
      //教学办导入系主任信息表时，后台要默认每个系主任负责的专业为软件工程并更新表department_head_majors。如此一来，没有勾选对应专业，默认勾选选项不更新数据表department_head_majors
        mysql_query("DELETE FROM department_head_majors WHERE workNumber='$workNumber'");
        for($i=0;$i<count($major);$i++){
          mysql_query("INSERT INTO  department_head_majors(workNumber,major)  VALUES('$workNumber','$major[$i]')");
          //echo "专业被选中".$i.":".$major[$i];//显示哪些复选框被选中
        }
      }else{
        mysql_query("DELETE FROM department_head_majors WHERE workNumber='$workNumber'");
        for($i=0;$i<count($major);$i++){
          mysql_query("INSERT INTO  department_head_majors(workNumber,major)  VALUES('$workNumber','$major[$i]')");
          echo "专业被选中".$i.":".$major[$i];//显示哪些复选框被选中
        }
      }
      echo"<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>";
      if ($name != "" || $sex != "" || $birthday != "" || $department != "" || $telephone != "" || $email != "" || $password != "" ) {
        if($td==true){
          echo"<script>alert('两次密码输入不一致，密码修改失败！</br> 其余信息修改成功!');
          window.location.href='../html/department_head/department_head-information.php'</script>";
          } else{
             echo"<script>alert('修改信息成功！');
             window.location.href='../html/department_head/department_head-information.php'</script>";
             }
        }else{
          if($td == false){
          echo"<script>alert('未填写内容，无信息修改！');
          window.location.href='../html/department_head/department_head-information.php'</script>";
          }else{
          echo"<script>alert('两次密码输入不一致，修改信息失败！');
          window.location.href='../html/department_head/department_head-information.php'</script>";
          }
        }
    }
  

    ?>
  