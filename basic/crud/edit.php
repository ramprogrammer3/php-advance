<?php include 'header.php'; ?>

<?php 
$conn = mysqli_connect('localhost','root','','crud') or die("DB Connection failed");
$id = $_GET['id'];
$sql = "SELECT * FROM students WHERE id = {$id}";
$result = mysqli_query($conn,$sql) or die("Query failed");

if(mysqli_num_rows($result) > 0){
?>

<div id="main-content">
    <h2>Update Record</h2>
    <?php
        while($row = mysqli_fetch_assoc($result)){
    ?>
    <form class="post-form" action="updatedata.php" method="post">
      <div class="form-group">
          <label>Name</label>
          <input type="hidden" name="id" value="<?= $row['id']; ?>"/>
          <input type="text" name="name" value="<?= $row['name']; ?>"/>
      </div>
      <div class="form-group">
          <label>Address</label>
          <input type="text" name="address" value="<?= $row['address']; ?>"/>
      </div>
      <div class="form-group">
          <label>Class</label>

          <?php 
            $sql1 = "SELECT * FROM studentclass";
            $result1 = mysqli_query($conn,$sql1) or die("Query failed");
            if(mysqli_num_rows($result) > 0){
          ?>
          <select name="class">
            <?php
                while($row1 = mysqli_fetch_assoc($result1)){
                    $select;
                if($row['class'] === $row1['cid']){
                    $select = "selected";
                }else{
                    $select = "";
                }
            ?>
              <option <?php echo $select ?> value="<?= $row1['cid']; ?>"> <?= $row1['cname']; ?> </option>
              <?php } ?>
          </select>

          <?php }?>
      </div>
      <div class="form-group">
          <label>Phone</label>
          <input type="text" name="phone" value="<?= $row['phone']; ?>"/>
      </div>
      <input class="submit" type="submit" value="Update"/>
    </form>
    <?php } ?>
</div>

<?php }else{
    echo "No Data found ";
} ?>
</div>
</body>
</html>
