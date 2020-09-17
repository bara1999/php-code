<!doctype html>
<html>
<head>
<title>name</title>
<style>
table{
    border-collapse: collapse;
    width: 100%;
    color:#588c7e;
    font-family: monospace;
    font-size: 25px;
    text-align: left;

}
th{
    background-color: #588c7e;
    color: white;  
}

</style>
</head>
<body>

<?php
$con=mysql_connect("localhost","root","");
$connection=mysql_select_db("student",$con);
$result=mysql_query("SELECT * FROM j");

echo "<table >
<tr>

<th>name</th>
<th>edit</th>
<th>delete</th>
</tr>";
while($row = mysql_fetch_array($result)){
   
    $id = $row['id'];
    $name = $row['name'];
    
    echo "<tr>";
    echo '<td><a href="db.php?id=' . $id . '">' . $name . '</a></td>'  ;
    echo '<td><a href="edit.php?id=' . $id . '">  edit  </a></td>'  ;
    echo '<td><a href="delete.php?id=' . $id . '">  delete  </a></td>'  ;
    echo "</tr>";
}

mysql_close($con);


?>
<button onclick="location.href='insert.html'">insert new student</button>
</body>
</html>

