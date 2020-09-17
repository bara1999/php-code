<!doctype html>
<html>
<head>
<title>edit</title>


</head>
<body>



<?php
$con=mysql_connect("localhost","root","");
$connection=mysql_select_db("student",$con);

$id = $_GET['id'];
$del = mysql_query("delete from j where id = '$id'");
if($del)
{
    mysql_close($con); 
    header("location:get.php"); 
    exit;	
}
else
{
    echo mysql_error();
    echo "Error deleting record"; 
}
  
?>


