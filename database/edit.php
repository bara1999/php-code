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

if(isset($_POST['update']))
  {
  $name=$_POST['name'];
  $avg = $_POST['avg'];
  
  $updated=mysql_query("UPDATE j SET 
  name='$name',avg='$avg' WHERE id='$id'");

  if($updated)
  {
  
  header('Location:get.php');
  }
  else{
  echo mysql_error();
  }
}
  
?>
<h3>Edit Data</h3>

<form method="POST">
 Name: <input type="text" name="name"  placeholder="Enter Name" >
 Avg: <input type="text" name="avg"  placeholder="Enter Avg" >
  <input type="submit" name="update" value="Update">
</form>
</body>
</html>

