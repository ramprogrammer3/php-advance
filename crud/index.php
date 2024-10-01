<?php
include 'header.php';
?>
    <div id="main-content">
        <h2>All Records</h2>

        <?php 

        $conn = mysqli_connect('localhost',"root","","crud") or die('Connection failed');
        $sql = "SELECT * FROM students join studentclass WHERE students.class = studentclass.cid";
        $result = mysqli_query($conn,$sql) or die("Query Failed");

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
                            <td>
                                <?= $row['id']; ?>
                            </td>
                            <td>
                                <?= $row['name']; ?>
                            </td>
                            <td>
                                <?= $row['address']; ?>
                            </td>
                            <td>
                                <?= $row['cname']; ?>
                            </td>
                            <td>
                                <?= $row['phone']; ?>
                            </td>
                            <td>
                                <a href='edit.php'>Edit</a>
                                <a href='delete-inline.php'>Delete</a>
                            </td>
                        </tr>
                        <?php } ?>

                </tbody>
            </table>

            <?php } else {
        echo '<h1>No Data Found </h1>';
    } ?>
    </div>
    </div>
    </body>

    </html>