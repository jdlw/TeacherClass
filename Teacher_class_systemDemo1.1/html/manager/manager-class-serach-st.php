<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>
  <title>manager</title>
  <script type="text/javascript" src="../../js/jquery.min.js"></script>
   <script type="text/javascript">
    jQuery.fn.rowspan = function(colIdx) { //封装的一个JQuery小插件
    return this.each(function(){
    var that;
    $('tr', this).each(function(row) {
    $('td:eq('+colIdx+')', this).filter(':visible').each(function(col) {
    if (that!=null && $(this).html() == $(that).html()) {
    rowspan = $(that).attr("rowSpan");
    if (rowspan == undefined) {
    $(that).attr("rowSpan",1);
    rowspan = $(that).attr("rowSpan"); }
    rowspan = Number(rowspan)+1;
    $(that).attr("rowSpan",rowspan);
    $(this).hide();
    } else {
    that = this;
    }
    });
    });
    });
    }
    $(function() {
    $("#table_cl_info").rowspan(0);//
    $("#table_cl_info").rowspan(1);//
    $("#table_cl_info").rowspan(2);//传入的参数是对应的列数从0开始，哪一列有相同的内容就输入对应的列数值
    $("#table_cl_info").rowspan(3);//
    $("#table_cl_info").rowspan(4);
    });
</script> 
  
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
            $("#left").css('min-height', min_height);
            $("#right").css('min-height', min_height);
            $("#left").css('height', min_height);
            $("#right").css('height', min_height);
           
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
                 $sno = $_SESSION["temp"][0];
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
                      $result = mysql_query("SELECT * FROM manager where mno=$sno");
                      $row = mysql_fetch_array($result);
                      $GLOBALS['name']=$row['mname'];
                  }
            ?>
            <a class="a_exit" href="../login.html">退出系统</a>
            <p>欢迎您，<span>
              <?php  
               echo $name;
                   ?> 
            </span>管理员</p>
          </div>
          <div id="status2">
            <a class="a_success" title="Go to Home" href="teacher-index.php">回到首页</a>
          </div>
        </div>
        <div id="main-content">
          <div id="sider">
            <ul>
               <li class="now_li"><a class="a_sider" href="manager-index.php"  >个人信息</a></li>
              <li><a class="a_sider" href="manager-student.php">管理学生</a></li>  
              <li><a class="a_sider" href="manager-teacher.php">管理教师</a></li>
             <li><a  class="a_sider a_now" class="a_sider" href="manager-class.php">课程情况</a></li>
            </ul>
          </div>
          <div id="right-text">
            <div id="serach-box">
            <form action="../../php/manager-serach.php" method="post">
              <input type="text" name="serach_sno">
              <input type="submit" class="btn-success re-btn" value="按学号查询">
            </br>
              <input type="text" name="serach_tno">
              <input type="submit" class="btn-success re-btn" value="按职工号查询">
            </form>
          </div>
            <table id="table_cl_info" class="table_gen" border="1">
               
              <tbody>
                <tr>
                <th>课程名</th>    
                <th>上课地点</th>
                <th>总学分</th>
                <th>计划课时</th>
                
                <th>选课人数</th>
                <th>授课教师</th>
                </tr>
                <?php 
                
                 $sno = $_SESSION["serach"][0];
                
                if (!$con)
                  {
                    die('Could not connect: ' . mysql_error());
                  }
                  else
                  {
                       mysql_select_db("stc", $con);
                        mysql_query("SET NAMES UTF8");
                       $result = mysql_query("SELECT distinct student.*,sc.*,teacher.*,course.* FROM student,course,sc,teacher
                          where student.sno = '$sno' and sc.sno=student.sno and teacher.tno=sc.tno and sc.cno=course.cno and sc.tno=course.tno1
                        order by sc.cno");
                       while($row = mysql_fetch_array($result))
                            {
                              echo"<form action='../../php/class-back.php' method='post'>";
                              echo"<tr><td>".$row['cno'];     
                              echo"<td>".$row['cname']."</td>";
                              echo"<td>".$row['classroom']."</td>";
                              echo"<td>".$row['credit']."</td>";
                              echo"<td>".$row['plan_time']."</td>";
                              echo"<td>".$row['tname']."</td>";
                              echo"<input type='hidden' name='re_cno' value={$row['cno']}>";
                              echo"<input type='hidden' name='re_tno' value={$row['tno1']}>";
                              echo"<input type='hidden' name='re_sno' value={$row['sno']}>";
                              
                              echo"</form>";
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
