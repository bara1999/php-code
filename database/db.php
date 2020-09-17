<!doctype html>
<html>
<head>
<title>database</title>

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

$id = $_GET['id'];


$result=mysql_query("SELECT * FROM j WHERE id =" . $id );
echo "<table >
<tr>
<th>ID</th>
<th>name</th>
<th>AVG</th>
</tr>";

while($row = mysql_fetch_array($result)){
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['avg'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysql_close($con);
?>
</body>
</html>

