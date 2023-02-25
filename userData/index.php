<?php
include 'users.php';
include "link.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users data table</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-6 mx-auto">
                <div class="card mt-3">
                    <div class="card-header bg-primary text-light">
                        <h2>User Details</h2>
                    </div>
                    <div class="card-body bg-secondary">
                        <form method="post">
                            <div class="table table-bordered">
                                <label class="text-light" for="">First Name:</label>
                                <input type="text" name="fname" class="form-control" placeholder="type your name">
                            </div>
                            <?php
                                if (isset($error['fnameError'])) {
                                    echo '<div class="text-danger">%s</div>', $error['fnameError'];
                                }
                            ?>
                            <div class="table table-bordered">
                                <label class="text-light" for="">Last Name:</label>
                                <input type="text" name="lname" class="form-control" placeholder="type your name">
                            </div>
                            <?php
                                if (isset($error['lnameError'])) {
                                    echo '<div class="text-danger">%s</div>', $error['lnameError'];
                                }
                            ?>
                            <div class="table table-bordered">
                                <label class="text-light" for="">Email</label>
                                <input type="email" name="email" class="form-control" placeholder="type your name">
                            </div>
                            <?php
                                if (isset($error['emailError'])) {
                                    printf('<div class="text-danger">%s</div>', $error['emailError']);
                                }
                            ?>
                            <div class="table table-bordered">
                                <label class="text-light" for="">Password</label>
                                <input type="password" name="password" class="form-control" placeholder="type your name">
                            </div>
                            <?php
                                if (isset($error['passwordError'])) {
                                    printf('<div class="text-danger">%s</div>', $error['passwordError']);
                                }
                            ?>
                            <div class="table table-bordered">
                                <label class="text-light" for="">Image</label>
                                <input type="file" name="image" class="form-control" placeholder="type your name">
                            </div>
                            <div>
                                <input class="btn btn-primary" name="submit" type="submit" value="SUBMIT">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>