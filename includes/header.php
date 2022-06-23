<?php
    require "common.php";
?>
<!doctype html>
<html>
    <head>
        <link href="../bootall3/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="../bootall3/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="../bootall3/js/jquery-3.6.0.min.js" type="text/javascript"></script>
        <style>
            .navbar-brand{
                padding-bottom: 100px;
                padding-top: 5px;
            }
        </style>
		<link rel="shortcut icon" href="../fun with math.ico" type="image/ico" />
    </head>
    <body style="font-family: 'Luckiest Guy', cursive;">
            <nav class=" navbar navbar-inverse" style="min-height:100px;">
                <div class='container'>
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavBar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
                        <a href="index.php" class="navbar-brand"><h1>FUN WITH MATH</h1></a>
                    </div>
                    <div class='collapse navbar-collapse' id="mynavBar">
                            <?php
                                if(isset($_SESSION["email_id"]))
                                {
                                    $email = $_SESSION["email_id"];
                                    $query = "SELECT fname,lname FROM `users` WHERE `email` = '$email';";
                                    
                                    $result = mysqli_query($con, $query) or die(mysqli_error($con));
                                    $row = mysqli_fetch_array($result)
                                    
                            ?>
                        <ul class='nav navbar-nav navbar-right'>
                            <h4 class="" style="color: white;" align="left">Welcome <?php echo $row['fname']; echo ' '; echo $row['lname']; ?></h4>
                            <li><a href="./home.php"><span class='glyphicon glyphicon-home'></span>Home</a></li>
                            <li><a href="./setting.php"><span class='glyphicon glyphicon-cog'></span>Setting</a></li>
                            <li><a href="./feedback.php"><span class='glyphicon glyphicon-star-empty'></span>Rate Us..</a></li>
                            <li><a href="./logout.php"><span class='glyphicon glyphicon-log-out'></span>Log Out</a></li>
                        </ul>
                            <?php
                                }else{
                            ?>
                        <ul class='nav navbar-nav navbar-right'>
                            <li><a href="./login.php" style="font-size:20px;" ><span class='glyphicon glyphicon-user'></span>Login</a></li>
                            <li><a href="./signup.php" style="font-size:20px;"><span class='glyphicon glyphicon-log-in'></span>Sign UP</a></li>
                        </ul>
                            <?php
                                }
                            ?>
                    </div>
                </div>
            </nav>
        
    </body>
    