<?php
	require "./includes/common.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Sign Up</title>
        
        <link href="bootall3/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="bootall3/js/bootstrap.min.js" ></script>
        <script src="bootall3/js/jquery-3.6.0.min.js"></script>
        <style>
            
        </style>
    </head>
    <body>
        <div>
        <!-- header start -->
            <?php
                require './includes/header.php';
            ?>
        <!-- header end -->
        
        
        <!-- Sign Up start -->
        <div class="container">
            <div class="panel panel-primary">
                <div class=" panel-heading">
                    <h2><span class="glyphicon glyphicon-log-in"></span>Sign Up</h2>
                </div>
                <div class=" panel-body">
                    <form class="form-group col-lg-5" method="post" action="signup_script.php">
                        <label>First Name:</label><input type="text" name="first_name" placeholder="Ramresh" class="form-control" required="true"><br>
                        <label>Last Name:</label><input type="text" name="last_name" placeholder="Jadhav" class="form-control" required="true"><br>
                        <label>E-mail:</label><input type="email" name="email" placeholder="ramesh123@gmail.com" class="form-control" required="true"><br>
                        <label>Password:</label><input type="password" name="password" placeholder="Ramesh@123" class="form-control" required="true"><br>
                        <label>Retype Password:</label><input type="password" name="retype_password" placeholder="Ramesh@123" class="form-control" required="true"><br>
                        <button type="submit" class="btn btn-info">Submit</button>
                    </form>
                </div>
                <div class="panel-footer">
			Already have an account?Click <a href="login.php">here</a> to login.
		</div>
            </div>
        </div>
        <!-- Sign Up end -->
        </div>
        
        <!-- Footer start -->
            <?php
		require "./includes/footer.php";
            ?>
        <!-- Footer end -->
    </body>
</html>
