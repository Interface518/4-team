﻿<?php  
error_reporting(E_ALL); 
ini_set('display_errors',1); 

$link=mysqli_connect("localhost","interface518","518interface","interface518"); 
if (!$link)  
{ 
   echo "MySQL 접속 에러 : ";
   echo mysqli_connect_error();
   exit();
}  


mysqli_set_charset($link,"utf-8");  

//POST 값을 읽어온다.
$id=isset($_POST['id']) ? $_POST['id'] : '';  
$name=isset($_POST['name']) ? $_POST['name'] : '';  
$phone=isset($_POST['phone']) ? $_POST['phone'] : '';  
$department=isset($_POST['department']) ? $_POST['department'] : ''; 
 

if ($id !="" and $name !="" and $phone !=""){   
  
    $sql="insert into Person(id, name, phone, department) values('$id','$name','$phone','$department')";  
    $result=mysqli_query($link,$sql);  

    if($result){  
       echo "SQL문 처리 성공";  
    }  
    else{  
       echo "SQL문 처리중 에러 발생 : "; 
       echo mysqli_error($link);
    } 
 
} else {
    echo "데이터를 입력하세요 ";
}


mysqli_close($link);
?>

<?php

$android = strpos($_SERVER['HTTP_USER_AGENT'], "Android");

if (!$android){
?>

<?php
}
?>
