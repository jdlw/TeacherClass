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
                      $result = mysql_query("SELECT * FROM teacher where tno=$sno");
                      $row = mysql_fetch_array($result);
                      $GLOBALS['name']=$row['tname'];
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
               <li class="now_li"><a class="a_sider a_now" href="teacher-index.php"  >开课信息</a></li>
              <li><a class="a_sider" href="teacher-information.php">个人信息</a></li>  
              <li><a class="a_sider" href="teacher-class-open.php">新开课程</a></li>
            </ul>
          </div>
          <div id="right-text">
            <table id="table_cl_info" class="table_gen" border="1">
              <tbody>
                <tr>
                <th>学号</th>    
                <th>姓名</th>
                <th>性别</th>               
                <th>年龄</th>
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
                  
                      $cno=$_SESSION["temp"][1];
                      $result = mysql_query("SELECT distinct student.*,sc.* FROM student,course,sc,teacher
                      where sc.tno = '$sno' and sc.cno='$cno'and  sc.sno=student.sno
                      order by cname");
                      while($row = mysql_fetch_array($result))
                      {
                          //var_dump($row);
                              $row_cno = $row['cno'];
                              echo"<tr><td>".$row['sno']."</td>";
                               echo"<td>".$row['sname']."</td>"; 
                              echo"<td>".$row['ssex']."</td>";
                              echo"<td>".$row['sage']."</td>";
                            
                             
                              echo"</tr>";
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
