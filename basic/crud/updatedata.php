<?php

    $name =  $_POST['name'];
    $address =  $_POST['address'];
    $class =  $_POST['class'];
    $phone =  $_POST['phone'];
    $id = $_POST['id'];

    $conn = mysqli_connect('localhost','root','','crud') or die("DB Connection failed");

    $sql = "UPDATE students 
            SET 
            name = '{$name}', address = '{$address}', class = '{$class}', phone = '{$phone}' 
            WHERE id = '{$id}'";
    
    $result = mysqli_query($conn,$sql) or die("Query failed");
    
    header('Location:http://localhost/php/basic/crud/index.php');
    mysqli_close($conn);
    
?>