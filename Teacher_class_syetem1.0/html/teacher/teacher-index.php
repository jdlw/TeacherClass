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
          </div>
        </div>
        <div id="main-content">
          <div id="sider">
            <ul>
               <li class="now_li"><a class="a_sider a_now" href="teacher-index.php"  >填写表格</a></li>
              <li><a class="a_sider" href="teacher-information.php">查看表格</a></li>  
              <li><a class="a_sider" href="teacher-class-open.php">新开课程</a></li>
            </ul>
          </div>
          <div id="right-text">
            <ul class="list_table">

                <li class="list-group-item">
                  <span class="table_name">计算机专业报课表</span>
                  <span class="table_download"><a class="list-group-item-a" href='../file/计算机专业.xls'>下载</a></sapn>
                </li>
                <li class="list-group-item">
                  <span class="table_name">计算机专业（实验班）报课表</span><a class="list-group-item-a" href='../file/计算机（实验班）.xls'>下载</a>
                </li>
                <li class="list-group-item">
                  <span class="table_name">计算机专业（卓越班）报课表</span><a class="list-group-item-a" href='../file/计算机（卓越班）.xls'>下载</a>
                </li>
            <ul>
              <a class="table-submit-a" href="teacher-index-input.php">提交表格>></a>
            <!--
            <table id="table_cl_info" class="table_gen" border="1">     
              <tbody>
                <tr>
                <th>课程名</th>    
                <th>上课地点</th>
                <th>总学分</th>
                <th>计划课时</th>
                <th>选课人数</th>
                <th>操作</th>
                </tr>
                <?php 
                  //$sno = '350001';
                  $dsn = "mysql:host=localhost;dbname=stc";
                  $db = new PDO($dsn, 'root', '');
                  $db->query("set names utf8");
                  /*
                  $sql_course = "SELECT distinct student.*,sc.*,teacher.*,course.* FROM student,course,sc,teacher
                        where sc.tno = '$sno' and sc.sno=student.sno and teacher.tno=sc.tno and sc.cno=course.cno and sc.tno=course.tno1
                        order by cname";*/
                       // echo $sno;
                        //不能查到
                  $sql_course = "select * from course where tno1='$sno'";
                  $re_course = $db->query($sql_course);
                  $recourse_row = $re_course->fetchAll();
                  //var_dump($recourse_row);
                  foreach($recourse_row as $vo){
                    $row_cno = $vo['cno'];
                    $sql_course_count = "select * from sc where cno = '$row_cno' and tno = '$sno' ";
                    $re_course_count = $db->query($sql_course_count);
                    $course_count_row = $re_course_count->fetchAll();
                    //echo $row_cno.' ';
                    //var_dump($course_count_row);
                    //echo "num=".count($course_count_row);
                    //echo "<br>";
                  
                    echo"<tr><form action='../../php/teacher-class.php' method='post'><td>".$vo['cname']."</td>";
                    echo"<td>".$vo['classroom']."</td>";
                    echo"<td>".$vo['credit']."</td>";
                    echo"<td>".$vo['plan_time']."</td>";
                    echo"<td>".count($course_count_row)."</td>";
                    echo"<td>"."<input type='submit' class='btn-recover'  value='查看详情'>"."</td>";  
                    echo"<input type='hidden' name='cno_detail' value={$vo['cno']}>";
                    echo"</td></form></tr>";
                    
                  }
                
                ?>
              
                <tr>
                </tr>
                <tbody>
            </table>
            -->
            <div>
        </div>
 </div>
  <div id ="footer">
    <p>2015@stc system by Mr.Linlin ma</p>
  </div>
 </body>
</html>
