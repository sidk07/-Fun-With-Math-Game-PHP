<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        <link href="bootall3/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="bootall3/js/bootstrap.min.js" ></script>
        <script src="bootall3/js/jquery-3.6.0.min.js"></script>
        <style>
        </style>
    </head>
    <body style="font-family: 'Luckiest Guy', cursive;">
        <!-- header start -->
            <?php
                require './includes/header.php';
            ?>
        <!-- header end -->
        
        <!-- Login panel start -->
        <div class="container">
            <div class="row">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h2><span class="glyphicon glyphicon-user"></span>Login</h2>
                    </div>
                    <div class="panel-body">
                        <h3 class="text-warning"> Login to play...</h3><br>
                        <form class="form-group col-xs-5" method="post" action="login_submit.php">
                            <div class="">
                                <label>Email: </label><input type="email" name="email" class="form-control">
                            </div><br>
                            <div>
                                <label>Password: </label><input type="password" name="password" class="form-control">
                            </div><br>
                                <button type="submit" class="btn btn-info">Login</button>
                        </form>
                    </div>
                    <div class="panel-footer">
                        <h5>Don't have an account? <a href='signup.php'>Register</a></h5>
                    </div>
                </div>
            </div>
        </div>
        <!-- Login Panel end -->
        <br><br><br>
        <br><br>
        <!-- Footer start -->
            <?php
		require "./includes/footer.php";
            ?>
        <!-- Footer end -->
        
    </body>
</html>
