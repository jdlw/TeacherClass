<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>
  <title>teacher</title>
  <script type="text/javascript" src="../../js/jquery.min.js"></script>
  
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
            var head = $("#head").height();
            var min_height = number - 110;
             var r_min_height = min_height - head;
            $("#sider").css('min-height', min_height);
            $("#right-text").css('min-height', min_height);
            $("#sider").css('height', min_height);
            $("#right-text").css('height', min_height);
             $("#right-content").css('height', r_min_height);
            var left = $("#left").height();
            var width1 = $("#container").width();
            var width11 = parseInt(width1);
            var width_status = width11 - 221;
            $("#status1").css('min-width',width_status);
             $("#status2").css('min-width',width_status);
            $("#right-text").css('width',width_status);
            //alert(left);
        }   
    </script> 
  <link href="../../css/base.css" type="text/css" rel="stylesheet"/>
 </head>
 <body>

 <div id="container">
      <div id="head">
          <div id="logo">
            <img src="../../image/logo.png" width="220" height="78">
          </div>
           <div id="status1">
            <?php 
                 session_start();
                 $work_number = $_SESSION["temp"][0];
                 header("Content-type: text/html; charset:utf-8");                 
                   $con = mysql_connect("localhost","root","");
                   if (!$con)
                  {
                         die('Could not connect: ' . mysql_error());
                  }
                  else
                  {
                      mysql_select_db("teacher_class_system", $con);
                      mysql_query("SET NAMES UTF8");
                      $result = mysql_query("SELECT * FROM user_teacher where work_number=$work_number");
                      $row = mysql_fetch_array($result);
                      $GLOBALS['name']=$row['name'];
                  }
            ?>
            <a class="a_exit" href="../login.html">退出系统</a>
            <p>欢迎您，<span>
              <?php  
               echo $name;
                   ?> 
            </span>老师</p>
          </div>
          <div id="status2">
            <a class="a_success" title="Go to Home" href="teacher-index.php">回到首页</a>
            <div id="refer-to-change">
              <a class="btn-recover" href="teacher-information-change.php">修改信息</a>
            </div>
          </div>
        </div>
        <div id="main-content">
          <div id="sider">
            <ul>
               <li><a class="a_sider"  href="teacher-index.php" >填写表格</a></li>
              <li class="now_li"><a class="a_sider a_now" href="teacher-information.php">查看表格</a></li>
             
              <li><a class="a_sider" href="teacher-class-open.php">新开课程</a></li>
            </ul>
          </div>
          <div id="right-text">
              
            
            <table class="table_gen" border="1">
              <tbody>
                <?php 
                  header("Content-type: text/html; charset:utf-8");                 
                   $con = mysql_connect("localhost","root","");
                   if (!$con)
                  {
                         die('Could not connect: ' . mysql_error());
                  }
                  else
                  {
                      mysql_select_db("teacher_class_system", $con);
                       mysql_query("SET NAMES UTF8");
                      $result = mysql_query("SELECT * FROM teacher_class_computer_excellent");
                      while($row = mysql_fetch_array($result))
                            {                   
                              echo"<tr><td>".$row['grade'];     
                              echo"<td>".$row['major']."</td>";
                              echo"<td>".$row['num']."</td>";
                              echo"<td>".$row['class_name']."</td>";
                              echo"<td>".$row['class_type']."</td>";
                              echo"<td>".$row['class_credit']."</td>";
                              echo"<td>".$row['class_time']."</td>";
                              echo"<td>".$row['op_time']."</td>";
                              echo"<td>".$row['pr_time']."</td>";
                              echo"<td>".$row['fl_time']."</td>";
                              echo"<td>".$row['teacher_name']."</td>";
                              echo"<td>".$row['addition']."</td>";
                              echo"</td></tr>";
                            }
                           
                  }  
                ?>
              
             
                </tbody>
            </table>
    




             <table class="table_gen" border="1">
              <tbody>
                <?php 
                  header("Content-type: text/html; charset:utf-8");                 
                   $con = mysql_connect("localhost","root","");
                   if (!$con)
                  {
                         die('Could not connect: ' . mysql_error());
                  }
                  else
                  {
                      mysql_select_db("teacher_class_system", $con);
                       mysql_query("SET NAMES UTF8");
                      $result = mysql_query("SELECT * FROM teacher_class_computer_operation");
                      while($row = mysql_fetch_array($result))
                            {                   
                              echo"<tr><td>".$row['grade'];     
                              echo"<td>".$row['major']."</td>";
                              echo"<td>".$row['num']."</td>";
                              echo"<td>".$row['class_name']."</td>";
                              echo"<td>".$row['class_type']."</td>";
                              echo"<td>".$row['class_credit']."</td>";
                              echo"<td>".$row['class_time']."</td>";
                              echo"<td>".$row['op_time']."</td>";
                              echo"<td>".$row['pr_time']."</td>";
                              echo"<td>".$row['fl_time']."</td>";
                              echo"<td>".$row['teacher_name']."</td>";
                              echo"<td>".$row['addition']."</td>";
                              echo"</td></tr>";
                            }
                           
                  }  
                ?>
                  </tbody>
            </table>
        
             <table class="table_gen" border="1">
              <tbody>
                <?php 
                  header("Content-type: text/html; charset:utf-8");                 
                   $con = mysql_connect("localhost","root","");
                   if (!$con)
                  {
                         die('Could not connect: ' . mysql_error());
                  }
                  else
                  {
                      mysql_select_db("teacher_class_system", $con);
                       mysql_query("SET NAMES UTF8");
                      $result = mysql_query("SELECT * FROM teacher_class_computer_normal");
                      while($row = mysql_fetch_array($result))
                            {                   
                              echo"<tr><td>".$row['grade'];     
                              echo"<td>".$row['major']."</td>";
                              echo"<td>".$row['num']."</td>";
                              echo"<td>".$row['class_name']."</td>";
                              echo"<td>".$row['class_type']."</td>";
                              echo"<td>".$row['class_credit']."</td>";
                              echo"<td>".$row['class_time']."</td>";
                              echo"<td>".$row['op_time']."</td>";
                              echo"<td>".$row['pr_time']."</td>";
                              echo"<td>".$row['fl_time']."</td>";
                              echo"<td>".$row['teacher_name']."</td>";
                              echo"<td>".$row['addition']."</td>";
                              echo"</td></tr>";
                            }
                          
                  }  
                ?>
                  </tbody>
            </table>
            <div>
        </div>
 </div>
  <div id ="footer">
    <p>2015@stc system by Mr.Linlin ma</p>
  </div>
 </body>
</html>
