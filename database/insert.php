<?php
$con=mysql_connect("localhost","root","");
$connection=mysql_select_db("student",$con);
if(isset($_POST['submit']))
{	$id = $_POST['id'];	
    $name = $_POST['name'];
    $avg = $_POST['avg'];

    $insert = mysql_query("INSERT INTO `j`(`id`,`name`, `avg`) VALUES ('$id','$name','$avg')");

    if(!$insert)
    {
        echo mysql_error();
    }
    else
    {
        echo "Records added successfully.";
    }
}

mysql_close($con); // Close connection
?>