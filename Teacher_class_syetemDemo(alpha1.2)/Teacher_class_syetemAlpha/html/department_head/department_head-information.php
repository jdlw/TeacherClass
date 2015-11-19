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
                 $workNumber = $_SESSION["temp"][0];
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
                      $result = mysql_query("SELECT * FROM user_department_head where workNumber=$workNumber");
                      $row = mysql_fetch_array($result);
                      $GLOBALS['name']=$row['name'];
                  }
            ?>
            <a class="a_exit" href="../index.php">退出系统</a>
            <p>欢迎您，<span>
              <?php  
               echo $name;
                   ?> 
            </span>系负责人</p>
          </div>
          <div id="status2">
            <a class="a_success" title="Go to Home" href="department_head-index">回到首页</a>

            <div id="refer-to-change">
              <a class="btn-recover" href="department_head-information-change.php">修改信息</a>
            </div>
          </div>
        </div>
        <div id="main-content">
          <div id="sider">
            <ul>
              <li><a class="a_sider" href="department_head-index">报课情况</a></li>  
              <li><a class="a_sider" href="department_head_manager-teacher.php">管理教师</a></li>
              <li class="now_li"><a class="a_sider a_now" href="department_head-information.php">个人信息</a></li>
            </ul>
          </div>
          <div id="right-text">

            <table class="table_gen" border="1">
              <tbody>
                <tr>
                <th>工号</th>
                <th>密码</th>
                <th>姓名</th>
                <th>性别</th>
                <th>生日</th>
                <th>所属系别</th>
                <th>电话</th>
                <th>邮箱</th>
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
                      mysql_select_db("teacher_class_system", $con);
                       mysql_query("SET NAMES UTF8");
                      $result = mysql_query("SELECT * FROM user_department_head");
                      while($row = mysql_fetch_array($result))
                            {
                              if( $workNumber==$row['workNumber'])
                              {
                                echo"<tr><td>".$row['workNumber'];
                                echo"<td>".$row['password']."</td>";
                                echo"<td>".$row['name']."</td>";
                                echo"<td>".$row['sex']."</td>";
                                echo"<td>".$row['birthday']."</td>";
                                echo"<td>".$row['department']."</td>";
                                echo"<td>".$row['telephone']."</td>";
                                echo"<td>".$row['email']."</td>";
                              }
                              echo"</td></tr>";
                            }
                  }  
                ?>
            <tbody>
            </table>
            <table class="table_gen" border="1">
            <tbody>
            <tr>
              <th>负责的专业：</th>
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
                      $result = mysql_query("SELECT * FROM department_head_majors");
                      while($row = mysql_fetch_array($result))
                            {
                              if($workNumber==$row['workNumber'])
                              {
                               switch ($row['major']) {
                            case 'tc_com_exc':
                              $major_name='计算机卓越班';
                              break;
                            case strstr($row['major'], 'tc_com_ope'):
                              $major_name='计算机实验班';
                              break;
                            case strstr($row['major'],'tc_com_nor'):
                              $major_name='计算机普通班';
                              break;
                            case strstr($row['major'],'tc_inf_sec'):
                              $major_name='信息安全';
                              break;
                            case strstr($row['major'],'tc_math_nor'):
                              $major_name='数学普通班';
                              break;
                            case strstr($row['major'],'tc_math_ope'):
                              $major_name='数学实验班';
                              break;
                            case strstr($row['major'],'tc_net_pro'):
                              $major_name='网络工程';
                              break;
                            case strstr($row['major'],'tc_soft_pro'):
                              $major_name='软件工程';
                              break;                     
                            default:
                                
                              }
                              echo"<td>".$major_name."</td>";
                            }
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
