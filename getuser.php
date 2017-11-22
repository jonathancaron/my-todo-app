<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$q = $_GET['q']);

$con = mysqli_connect('localhost','root','user','todo_app');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"task");
$sql="SELECT * FROM user WHERE id = '".$q."'";
$result = mysqli_query($con,$sql);
console.log($q);
echo "<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Age</th>
<th>Hometown</th>
<th>Job</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['task_id'] . "</td>";
    echo "<td>" . $row['task_title'] . "</td>";
    echo "<td>" . $row['task_description'] . "</td>";
    echo "<td>" . $row['task_start_timestamp'] . "</td>";
    echo "<td>" . $row['task_end_timestamp'] . "</td>";
    echo "<td>" . $row['task_ended_on_timestamp'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>
