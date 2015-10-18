<?php
    header("Content-type: text/html; charset=utf-8"); 
	  //引入PHPExcel库文件
    include 'PHPExcel_1.8.0_doc/Classes/PHPExcel.php';
    //创建对象
    $excel = new PHPExcel();
    //Excel表格式,这里简略写了8列
    $letter = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q');
    //表头数组
    //$tableheader = array('学号','姓名','性别','年龄','班级');
    //填充表头信息
    //for($i = 0;$i < count($tableheader);$i++) {
    //$excel->getActiveSheet()->setCellValue("$letter[$i]1","$tableheader[$i]");
   // }
    //表格数组
    $con = mysql_connect("localhost","root","");
    if (!$con)
    {
      die('Could not connect: ' . mysql_error());
    }
    else
    {
      mysql_select_db("teacher_class_system", $con);
         mysql_query("SET NAMES UTF8");
         $result = mysql_query("SELECT grade,major,num,class_name,class_type,class_credit,class_time,op_time, 
        pr_time,fl_time,teacher_name,addition FROM teacher_class_computer_normal");
         
        while($row = mysql_fetch_row($result)){$data[] = $row;}
        //var_dump($data);

       
      
/*

     
    */
 
    for ($i =1;$i <=count($data);$i++) {
          $j = 0;
          foreach ($data[$i-1] as $key=>$value) {
          $excel->getActiveSheet()->setCellValue("$letter[$j]$i","$value");
          $j++;
        }
    }
  }
 
    //echo $data[1][0]." ".$data[1][1];
    
    //创建Excel输入对象
    $write = new PHPExcel_Writer_Excel5($excel);
    header("Pragma: public");
    header("Expires: 0");
    header("Cache-Control:must-revalidate, post-check=0, pre-check=0");
    header("Content-Type:application/force-download");
    header("Content-Type:application/vnd.ms-execl");
    header("Content-Type:application/octet-stream");
    header("Content-Type:application/download");;
    header('Content-Disposition:attachment;filename="testdata.xls"');
    header("Content-Transfer-Encoding:binary");
    $write->save('php://output');
    
?>