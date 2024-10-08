
<?php
if(isset($_FILES['image'])){
    echo "<pre>";
    print_r($_FILES);
    echo "</pre>";

    $name = $_FILES['image']['name'];
    $size = $_FILES['image']['size'];
    $temp = $_FILES['image']['tmp_name'];
    $type = $_FILES['image']['type'];
    
    move_uploaded_file($temp,"upload_images/".$name);
}

?>



<html lang="en">
<head>
   
</head>
<body>
  <form action="" method="POST" enctype="multipart/form-data">
    <input type="file" name="image">
    <input type="submit">
  </form>
</body>
</html>