<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>global variable</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 mb-3">
                <h3>Global variable in PHP </h3>
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Age</label>
                        <input type="text" class="form-control" name="age">
                    </div>
                    <button class="btn btn-sm btn-primary" name="save">Submit</button>
                </form>

                <div class="mb-3">
                    <?php
                        if(isset($_POST['save'])){
                            echo $_POST['name'] . "<br>";
                            echo $_POST['age'] . "<br>";
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>