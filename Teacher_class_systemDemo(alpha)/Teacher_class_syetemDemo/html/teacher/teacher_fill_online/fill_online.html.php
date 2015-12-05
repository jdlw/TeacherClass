<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>
  <title>教师报课管理系统</title>
  <script type="text/javascript" src="../../../js/jquery.min.js"></script>
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
  <link href="../../../css/base.css" type="text/css" rel="stylesheet"/>
 </head>
 <body>

 <div id="container">
      <div id="head">
          <div id="logo">
            <img src="../../../image/logo.png" width="220" height="78">
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
                      $result = mysql_query("SELECT * FROM user_teacher where workNumber=$work_number");
                      $row = mysql_fetch_array($result);          
                      $GLOBALS['name']=$row['name'];
                  }
            ?>
            <a class="a_exit" href="../../index.php">退出系统</a>
            <p>欢迎您，<span>
              <?php  
               echo $name;
                   ?> 
            </span>老师</p>
          </div>
          <div id="status2">
          </div>
        </div>
        <div id="main-content">
          <div id="sider">
            <ul>    
               <li><a class="a_sider" href="../teacher_table_overview"  >查看表格</a></li>
              <li class="now_li"><a class="a_sider a_now" href="../teacher_fill_online">填写表格</a></li>
              <li><a class="a_sider" href="../teacher-information.php">个人信息</a></li>
            </ul>
          </div>
          <div id="right-text">
           
              <!--在线填写demo示例-->
               <form method="post" action="../../../php/writeOnline.php">
               <input type="hidden" name="class_select[]" value="0">  
              <table class="table_gen" border="1">
                 
                 <?php 
                 $table_name=$_GET["table_name"];

                 echo"<input type='hidden' name='table_name' value='".$table_name."'>";
                 //$row_begin = 100;
                 $result = mysql_query("SELECT * FROM $table_name where teacherName = '' or  teacherName ='任课教师'");
                 while($row = mysql_fetch_array($result))

                 echo "<input type='hidden' name='table_name' value='".$table_name."'>";
                 $row_begin = -1;
                 $result = mysql_query("SELECT * FROM $table_name where teacherName = '' or  teacherName ='任课教师'");
                 while($row = mysql_fetch_assoc($result))

                      {
                        if(empty($row['grade']) && empty($row["major"])){
                          //跳过缺损的行
                          continue;
                        }
                        echo '<tr>';
                        if($row_begin == -1 && empty($row["major"])){
                          echo '<td colspan="'.(count($row)-2).'">'.$row["grade"].'</td>';
                        }else{
                        echo '<td>'.$row["grade"].'</td>';
                        echo '<td>'.$row["major"].'</td>';
                        echo '<td>'.$row["people"].'</td>';
                        echo '<td>'.$row["courseName"].'</td>';
                        echo '<td>'.$row["courseType"].'</td>';
                        echo '<td>'.$row["courseCredit"].'</td>';
                        echo '<td>'.$row["courseHour"].'</td>';
                        echo '<td>'.$row["practiceHour"].'</td>';
                        echo '<td>'.$row["onMachineHour"].'</td>';
                        echo '<td>'.$row["timePeriod"].'</td>';
                      }
                        if($row["people"]=='')
                          $row_begin=0;
                        $row_begin++;
                        if($row_begin==2){
                          echo '<td>选择该门课</td>';
                          echo '<td>填写备注</td>';
                        }
                        else
                            {
                                if($row_begin>2)
                              {
                                echo '<td>'.'选课<input type="checkbox" name="class_select[]" value="'.$row["insertTime"].'">'.'</td>';
                                echo '<td><input type="text" name="'.$row["insertTime"].'"></td>';
                              }
                              else if($row_begin != 1)
                              {
                               echo '<td>'.$row["teacherName"].'</td>';
                               echo '<td>'.$row["remark"].'</td>';
                              }
                           }
                        
                        echo '</tr>';
                          
                      }
                 ?>
                
           
          </table>
           <input type="submit" class="btn-success" value="提交表格">
             </form>    
            <div>
        </div>
 </div>
  <div id ="footer">
    <p>2015@stc system by Mr.Linlin ma</p>
  </div>
 </body>
</html>
