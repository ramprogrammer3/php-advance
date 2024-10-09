<?php

    $name =  $_POST['name'];
    $address =  $_POST['address'];
    $class =  $_POST['class'];
    $phone =  $_POST['phone'];

    $conn = mysqli_connect('localhost','root','','crud') or die("DB Connection failed");

    $sql = "INSERT INTO students(name,address,class,phone) 
            VALUES 
            ('{$name}','{$address}','{$class}','{$phone}')";
    
    $result = mysqli_query($conn,$sql) or die("Query failed");
    
    header('Location:http://localhost/php/basic/crud/index.php');
    mysqli_close($conn);
    
?>