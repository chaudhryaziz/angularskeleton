<?php
$data = json_decode(file_get_contents("php://input"));
$empno = mysql_real_escape_string($data->empno);
$fname = mysql_real_escape_string($data->fname);
$lname = mysql_real_escape_string($data->lname);
$dept = mysql_real_escape_string($data->dept);
mysql_connect("localhost","root","PASSWORD");
mysql_select_db("company");
mysql_query("INSERT INTO employee(`emp_no`, `first_name`, `last_name`, `dept_name`)VALUES('".$empno."','".$fname."','".$lname."','".$dept."')");


 ?>
