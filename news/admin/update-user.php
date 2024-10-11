<?php include "header.php";?>

<?php
    if(isset($_POST['submit'])){
        include 'config.php';
        $id = $_GET['id'];
        $firstname = mysqli_real_escape_string($conn,$_POST['f_name']);
        $lastname = mysqli_real_escape_string($conn,$_POST['l_name']);
        $username = mysqli_real_escape_string($conn,$_POST['username']);
        $role = mysqli_real_escape_string($conn,$_POST['role']);

        $sql = "UPDATE user SET first_name = '{$firstname}', last_name = '{$lastname}', username = '{$username}', role = '{$role}' WHERE user_id = {$id}";
        if(mysqli_query($conn,$sql)){
            header("Location: {$hostname}/admin/users.php");
        }else{
            echo "<p class = 'text-danger'>Unable to update</p>";
        }
    }

?>
  <div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <h1 class="admin-heading">Modify User Details</h1>
              </div>
              <div class="col-md-offset-4 col-md-4">
                <?php 
                    include 'config.php';
                    $id = $_GET['id'];
                    $sql = "SELECT * FROM user WHERE user_id = {$id}";
                    $result = mysqli_query($conn,$sql) or die("Query failed");
                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_assoc($result)){
                ?>
                  <!-- Form Start -->
                  <form  action="<?php $_SERVER['PHP_SELF']; ?>" method ="POST">
                      <div class="form-group">
                          <input type="hidden" name="user_id"  class="form-control" 
                            value="<?= $row['user_id']; ?>" placeholder="" >
                      </div>
                          <div class="form-group">
                          <label>First Name</label>
                          <input type="text" name="f_name" class="form-control" 
                            value="<?= $row['first_name']; ?>" placeholder="" required>
                      </div>
                      <div class="form-group">
                          <label>Last Name</label>
                          <input type="text" name="l_name" class="form-control" 
                          value="<?= $row['last_name']; ?>" placeholder="" required>
                      </div>
                      <div class="form-group">
                          <label>User Name</label>
                          <input type="text" name="username" class="form-control" 
                            value="<?= $row['username']; ?>" placeholder="" required>
                      </div>
                      <div class="form-group">
                          <label>User Role</label>
                          <select class="form-control" name="role" value="<?php 
                            if($row['role'] == 1){
                                $select = 'selected';
                            }else{
                                $select = '';
                            }
                          ?>">
                              <option value="0">User</option>
                              <option <?php echo $select ?> value="1">Admin</option>
                          </select>
                      </div>
                      <input type="submit" name="submit" class="btn btn-primary" value="Update" required />
                  </form>
                  <!-- /Form -->
                   <?php }} ?>
              </div>
          </div>
      </div>
  </div>
<?php include "footer.php"; ?>
