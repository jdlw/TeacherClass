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
       function setSize(){
            var height1 = $("#bgConsure").height();
            var height2 = $("#footer").height();
            var number = parseInt(height1);
            var right_nav = $("#right-nav").height();
            var min_height = number - 110;
             var r_min_height = min_height - right_nav;
            $("#register-content").css('min-height', min_height);
             $("#right-content").css('height', r_min_height);
            var left = $("#left").height();
            //alert(left);
        };
    </script> 
    <script>
            $(function(){
 
                var ok1=false;
                var ok2=false;
                var ok3=false;
                var ok4=false;
                var ok5=false;
                var ok6=false;
 
                // 验证课程号
                $('input[name="cno"]').focus(function(){
                  $(this).next().text('填写课程号').removeClass('state1').addClass('state2');
                }).blur(function(){
                    if($(this).val().length ==3 && $(this).val()!=''){
                        $(this).next().text('输入成功').removeClass('state1').addClass('state4');
                        ok1=true;
                    }else{
                        $(this).next().text('课程号应该为3位数字').removeClass('state1').addClass('state3');
                    }
                     
                });
                // 验证课程号
                $('input[name="cname"]').focus(function(){
                  $(this).next().text('填写课程名称').removeClass('state1').addClass('state2');
                }).blur(function(){
                    if($(this).val().length >0 && $(this).val()!=''){
                        $(this).next().text('输入成功').removeClass('state1').addClass('state4');
                        ok2=true;
                    }else{
                        $(this).next().text('课程名不能为空！').removeClass('state1').addClass('state3');
                    }
                     
                });
                 // 验证课程名称
                $('input[name="cname"]').focus(function(){
                  $(this).next().text('填写课程名称').removeClass('state1').addClass('state2');
                }).blur(function(){
                    if($(this).val().length >0 && $(this).val()!=''){
                        $(this).next().text('输入成功').removeClass('state1').addClass('state4');
                        ok3=true;
                    }else{
                        $(this).next().text('课程名不能为空！').removeClass('state1').addClass('state3');
                    }
                     
                });
                // 验证授课地点
                $('input[name="classroom"]').focus(function(){
                  $(this).next().text('填写授课地点如西一201').removeClass('state1').addClass('state2');
                }).blur(function(){
                    if($(this).val().length >0 && $(this).val()!=''){
                        $(this).next().text('输入成功').removeClass('state1').addClass('state4');
                        ok4=true;
                    }else{
                        $(this).next().text('授课地点不能为空！').removeClass('state1').addClass('state3');
                    }
                     
                });
                // 验证学分
                $('input[name="credit"]').focus(function(){
                  $(this).next().text('填写学分如2.5').removeClass('state1').addClass('state2');
                }).blur(function(){
                    if($(this).val().length >0 && $(this).val()!=''){
                        $(this).next().text('输入成功').removeClass('state1').addClass('state4');
                        ok5=true;
                    }else{
                        $(this).next().text('学分不能为空！').removeClass('state1').addClass('state3');
                    }
                     
                });
                // 验证计划学时
                $('input[name="plan_time"]').focus(function(){
                  $(this).next().text('填写学时如64').removeClass('state1').addClass('state2');
                }).blur(function(){
                    if($(this).val().length >0 && $(this).val()!=''){
                        $(this).next().text('输入成功').removeClass('state1').addClass('state4');
                        ok6=true;
                    }else{
                        $(this).next().text('学时不能为空！').removeClass('state1').addClass('state3');
                    }
                     
                });
                 // 验证授课教师2
                $('input[name="tno2"]').focus(function(){
                  $(this).next().text('若无其他授课教师请填写0').removeClass('state1').addClass('state2');
                }).blur(function(){
                    if($(this).val()!=''){
                        $(this).next().text('输入成功').removeClass('state1').addClass('state4');
                        ok6=true;
                    }else{
                        $(this).next().text('若无其他授课教师请填写0').removeClass('state1').addClass('state3');
                    }
                     
                });
                 // 验证授课教师3
                $('input[name="tno3"]').focus(function(){
                  $(this).next().text('若无其他授课教师请填写0').removeClass('state1').addClass('state2');
                }).blur(function(){
                    if($(this).val()!=''){
                        $(this).next().text('输入成功').removeClass('state1').addClass('state4');
                        ok6=true;
                    }else{
                        $(this).next().text('若无其他授课教师请填写0').removeClass('state1').addClass('state3');
                    }
                     
                });
                
 
             
                //提交按钮,所有验证通过方可提交
 
              
                 
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
            <a class="a_success" title="Go to Home" href="student-index.php">回到首页</a>
            
          </div>

      </div>

      <div id="main-content">
          <div id="sider">
            <ul>
               <li><a class="a_sider"  href="teacher-index.php" >开课信息</a></li>
              <li><a class="a_sider"  href="teacher-information.php">个人信息</a></li>
             
              <li><a class="a_sider a_now" href="teacher-class-open.php">新开课程</a></li>
            </ul>
          </div>

          <div id="right-text">
            
            <div id="re-text">
                <form action="../../php/te-class_open-info.php" method="post">
                <input placeholder="课程号:"  class="re-input" type="text"   name="cno" required="required"/> <span class='state1'>课程号</span>
                <input placeholder="课程名:"  class="re-input" type="text"   name="cname" required="required"/> <span class='state1'>课程名</span>
                <input placeholder="地点:"  class="re-input" type="text"   name="classroom" required="required"/> <span class='state1'>地点</span>
                <input placeholder="学分:"  class="re-input" type="text"   name="credit" required="required"/> <span class='state1'>学分</span>
                <input placeholder="计划学时:"  class="re-input" type="text"   name="plan_time" required="required"/> <span class='state1'>计划学时</span>
                <input placeholder="授课教师2（选填）:"  class="re-input" type="text"   name="tno2" required="required"/> <span class='state1'>填写职工号2</span>
                <input placeholder="授课教师3（选填）:"  class="re-input" type="text"   name="tno3" required="required"/> <span class='state1'>填写职工号3</span>
                    </br>                
                  <input type="submit" id="change_submit" class=" btn-success btn-submit"  value="确认开课" />
               </form>
            </div>
          <div>
    </div>
 </div>
  <div id ="footer">
    <p>2015@stc system by Mr.Linlin ma</p>
  </div>
 </body>
</html>
