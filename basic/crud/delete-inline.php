<?php

$id = $_GET['id'];
$conn = mysqli_connect('localhost','root','','crud') or die("DB Connection failed");
$sql = "DELETE FROM students WHERE id = {$id}";
$result = mysqli_query($conn,$sql) or die("Query failed");

header("Location:http://localhost/php/basic/crud/index.php");
mysqli_close($conn);


?>


