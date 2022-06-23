<!DOCTYPE html>
<html>
    <head>
        <title>Logout successfully!</title>
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
                session_start();
                session_unset();
                session_destroy();
                require './includes/header.php';
            ?>
        <!-- header end -->
        
        <!-- Logout start -->
        <div class=" container panel panel-primary">
        <h4>You have successfully logged out. Click <a href="index.php">here</a> to go back index page.</h4>
        <br>
        <h1>Visit Again :)</h1>
        </div>
        <!-- Logout end -->
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <br><br><br>
        <br><br><br>
        <!-- Footer start -->
            <?php
		require "./includes/footer.php";
            ?>
        <!-- Footer end -->
        
    </body>
</html>
