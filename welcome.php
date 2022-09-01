<?php

// start the session

session_start();

// Check if the user is not logged in, then redirect the user to login page

if (!isset($_SESSION["userid"]) || $_SESSION["userid"] !== true) {

    header("location: login.php");

    exit;

}

?>



<!DOCTYPE html>

<html lang="en">

    <head>

        <meta charset="UTF-8">

        <title>Welcome <?php echo $_SESSION["name"]; ?></title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    </head>

    <body>

        <div class="container">

            <div class="row">

                <div class="col-md-12">
                
                    <h1>Hello, <strong><?php echo $_SESSION["name"]; ?></strong>. Welcome to GUVI</h1>
                    
                    <form action="" method="post">

                        <div class="form-group">

                            <label>Age</label>

                            <input type="text" name="text" class="form-control" required>

                        </div>    

                        <div class="form-group">

                            <label>Date Of Birth</label>

                            <input type="text" name="text" class="form-control" required />

                        </div>    

                        <div class="form-group">

                            <label>Mobile Number</label>

                            <input type="text" name="text" class="form-control" required>

                        </div>

                        <div class="form-group">

                            <input type="submit" name="submit" class="btn btn-primary" value="Submit">

                        </div>

                       
                    </form>
                </div>

                <p>

                    <a href="logout.php" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Log Out</a>

                </p>

            </div>

        </div>

    </body>

</html>
