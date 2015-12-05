<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>
  <title>student</title>
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
                 $GLOBALS['sno'] = $_SESSION["temp"][0];
                 header("Content-type: text/html; charset:utf-8");                 
                   $con = mysql_connect("localhost","root","");
                   if (!$con)
                  {
                         die('Could not connect: ' . mysql_error());
                  }
                  else
                  {
                      mysql_select_db("stc", $con);
                      mysql_query("SET NAMES UTF8");
                      $result = mysql_query("SELECT * FROM student where sno=$sno");
                      $row = mysql_fetch_array($result);
                      $GLOBALS['name']=$row['sname'];
                  }
            ?>
            <a class="a_exit" href="../login.html">退出系统</a>
            <p>欢迎您，<span>
              <?php
                 echo $name; 
              ?> </span>同学</p>
            </div>
          </div>
          <div id="status2">
            <a class="a_success" title="Go to Home" href="student-index.php">回到首页</a>
            <div id="refer-to-change">
              <a class="btn-recover" href="student-information-change.php">修改信息</a>
            </div>
          </div>
        </div>
        <div id="main-content">
          <div id="sider">
            <ul>
               <li><a class="a_sider"  href="student-index.php" >已选课程</a></li>
              <li class="now_li"><a class="a_sider a_now" href="student-information.php">个人信息</a></li>
             
              <li><a class="a_sider" href="student-class-select.php">选课</a></li>
            </ul>
          </div>
          <div id="right-text">

            <table class="table_gen" border="1">
              <tbody>
                <tr>
                <th>学号</th>
                <th>姓名</th>
                <th>性别</th>
                <th>年龄</th>
                <th>密码</th>
               
                </tr>
                <?php 
                  header("Content-type: text/html; charset:utf-8");                 
                   $con = mysql_connect("localhost","root","");
                   if (!$con)
                  {
                         die('Could not connect: ' . mysql_error());
                  }
                  else
                  {
                      mysql_select_db("stc", $con);
                       mysql_query("SET NAMES UTF8");
                      $result = mysql_query("SELECT * FROM student");
                      while($row = mysql_fetch_array($result))
                            {
                              if( $sno==$row['sno'])
                              {
                                echo"<tr><td>".$row['sno'];
                                echo"<td>".$row['sname']."</td>";
                                echo"<td>".$row['ssex']."</td>";
                                echo"<td>".$row['sage']."</td>";
                                echo"<td>".$row['spassword']."</td>";
                              }
                              /*
                               echo"<td>";
                              echo "<input type='submit' class='btn-recover' value = '取消该门课'>";
                              echo"</td>";
                              */
                              echo"</td></tr>";
                            }
                  }  
                ?>
              
                <tr>
                </tr>
                <tbody>
            </table>
            <div>
        </div>
 </div>
  <div id ="footer">
    <p>2015@stc system by Mr.Linlin ma</p>
  </div>
 </body>
</html>
