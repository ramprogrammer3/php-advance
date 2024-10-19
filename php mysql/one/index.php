<?php 

echo "Ram kumar <br>";

$conn = mysqli_connect("localhost","root","","test") or die("DB Connection failed");

$sql = "SELECT * FROM user";

$result = mysqli_query($conn,$sql) or die("Query Failed");

$row = mysqli_fetch_assoc($result);

echo "<pre>";
print_r($row);
echo "</pre>";

echo $row['first_name'];


?>