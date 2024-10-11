<?php
include 'config.php';

$id = $_GET['id'];
$slq = "DELETE FROM user WHERE user_id = {$id}";
if(mysqli_query($conn,$slq)){
    header("Location: {$hostname}/admin/users.php");
}else{
    echo "<h2 class = 'text-warning'>Unable to delete user</h2>";
}
mysqli_close($conn);


?>