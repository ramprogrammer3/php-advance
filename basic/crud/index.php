<?php
include 'header.php';
?>
<div id="main-content">
    <h2>All Records</h2>

    <?php

        $conn = mysqli_connect('localhost','root','','crud') or die("DB Connection failed");
        $sql = "SELECT * FROM students join studentclass where students.class = studentclass.cid";
        $result = mysqli_query($conn,$sql) or die("Query failed");
        if(mysqli_num_rows($result) > 0){
    ?>

    <table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Address</th>
        <th>Class</th>
        <th>Phone</th>
        <th>Action</th>
        </thead>
        <tbody>

            <?php
                while($row = mysqli_fetch_assoc($result)){
            ?>
            <tr>
                <td> <?= $row['id']; ?> </td>
                <td> <?= $row['name']; ?> </td>
                <td> <?= $row['address']; ?> </td>
                <td> <?= $row['cname']; ?> </td>
                <td> <?= $row['phone']; ?> </td>
                <td>
                    <a href='edit.php?id=<?= $row['id'] ?>'>Edit</a>
                    <a href='delete-inline.php?id=<?= $row['id'] ?>'>Delete</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <?php }else{
        echo "<h2>Data not found </h2>";
    }
    ?>
</div>
</div>
</body>
</html>
