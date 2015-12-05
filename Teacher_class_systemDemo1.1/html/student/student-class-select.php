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
    $("#table1").rowspan(0);//
    $("#table1").rowspan(1);//
    $("#table1").rowspan(2);//传入的参数是对应的列数从0开始，哪一列有相同的内容就输入对应的列数值
    $("#table1").rowspan(3);//
    $("#table1").rowspan(4);
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
                      $result = mysql_query("SELECT * FROM student where sno=$sno");
                      $row = mysql_fetch_array($result);
                      $GLOBALS['name']=$row['sname'];
                  }
            ?>
            <a class="a_exit" href="../login.html">退出系统</a>
            <p>欢迎您，<span>
              <?php  
               echo $name;
                   ?> 
            </span>同学</p>
          </div>
          <div id="status2">
            <a class="a_success" title="Go to Home" href="student-index.php">回到首页</a>
          </div>
        </div>
        <div id="main-content">
          <div id="sider">
            <ul>
               <li class="now_li"><a class="a_sider" href="student-index.php"  >已选课程</a></li>
              <li><a class="a_sider" href="student-information.php">个人信息</a></li>  
              <li><a class="a_sider a_now"  href="student-class-select.php">选课</a></li>
            </ul>
          </div>
          <div id="right-text">

          <form action="../../php/course_choose.php" method="post">

            <table  class="table_gen" border="1"  id="table1" >      
              <tbody>
                <tr>
                <th>课程号</th>
                <th>课程名</th>
                <th>上课地点</th>
                <th>总学分</th>
                <th>计划课时</th>
                <th>授课教师</th>
                <th>选择该门课</th>
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
                      $result = mysql_query("SELECT course.*,tname FROM course,teacher
                        where teacher.tno=course.tno1
                        and NOT EXISTS(SELECT sc.cno from sc,student where student.sno = sc.sno and student.sno ='$sno'and sc.cno=course.cno)
                        order by cno");
                      
                      while($row = mysql_fetch_array($result))
                            {
                              
                             
                              echo"<tr>";
                              echo"<td name='se_cno' value='1'><input type='hidden' name='se_cno[]' value='{$row['cno']}se_cho' />".$row['cno']."</td>";
                                                      
                              echo"<td name='se_cname'>".$row['cname']."</td>";
                              
                              echo"<td name='se_classroom'>".$row['classroom']."</td>";
                              
                              echo"<td name='se_credit'>".$row['credit']."</td>";
                             
                              echo"<td name='se_plan_time'>".$row['plan_time']."</td>";
                              
                              echo"<td name='se_tname' value='1'>".$row['tname']."</td>";
                             
                              echo"<td>"."<input type='radio' name='".$row['cno']."se_cho' value='{$row['cno']}.{$row['tno1']}'> 选择"."</td>";
                             
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
            <input id="btn-clse" class="btn-recover" type="submit" value="确认提交">
          </form>

            <div>
        </div>
 </div>
  <div id ="footer">
    <p>2015@stc system by Mr.Linlin ma</p>
  </div>
 </body> 
</html>
