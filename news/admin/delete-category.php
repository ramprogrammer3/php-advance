<?php
include 'config.php';


if($_SESSION['role'] == '0'){
    header("Location: {$hostname}/admin/post.php");
}


$id = $_GET['id'];
$slq = "DELETE FROM category WHERE category_id = {$id}";
if(mysqli_query($conn,$slq)){
    header("Location: {$hostname}/admin/category.php");
}else{
    echo "<h2 class = 'text-warning'>Unable to delete user</h2>";
}
mysqli_close($conn);

?>