<?php
	require './includes/common.php';
	
	if(!isset($_SESSION["email_id"])){
		header("location: index.php");
	}
?>
<html>
    <head>
        <title>Setting</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link href="bootall3/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="bootall3/js/bootstrap.min.js" ></script>
        <script src="bootall3/js/jquery-3.6.0.min.js"></script>
        <style>
            
        </style>
    </head>
    <body>
        <!-- header start -->
            <?php
                require './includes/header.php';
            ?>
        <!-- header end -->
        
        
        <!<!-- Login panel start -->
        <div class="container">
            <div class="row">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h2><span class="glyphicon glyphicon-cog"></span>Setting</h2>
                    </div>
                    <div class="panel-body">
                        <h3 class="text-warning">Change Password</h3>
                        <form class="form-group col-lg-4" method="post" action="setting_script.php">
                            <div>
                                <label>New Password: </label><input type="password" name="new_password" class="form-control">
                            </div><br>
                            <div>
                                <label>Retype Password: </label><input type="password" name="retype_password" class="form-control">
                            </div><br><br>  
                                <button class="btn btn-info">Change</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!<!-- Login Panel end -->
        <br><br><br><br><br>
        <br><br><br>
        <!-- Footer start -->
            <?php
		require "./includes/footer.php";
            ?>
        <!-- Footer end -->
    </body>
</html>
