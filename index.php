<?php
    require "includes/common.php";
?>

<html>
    <head>
        <title>Index</title>
        <link rel="stylesheet" href="bootall3/css/bootstrap.min.css" type="text/css"/>
        <script src="bootall3/js/bootstrap.min.js"></script>
        <script src="bootall3/js/jquery-3.6.0.min.js"></script>
        <link rel="shortcut icon" href="fun with math.ico" type="image/ico" />
		
        <style>
            body{
                
                background-repeat: no-repeat; 
                background-size: 100% 100%;
                font-family: 'Luckiest Guy', cursive;
            }
            section{
    max-width: 1600px;
    margin: auto;
    width: 100%;
    min-height: 730px;
    /* display: flex; */
    background: url(images/index.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center left;
}

            .box{
                height:400px;
                width:700px;
                background: #000000cc;
                margin-top: -150px;
                margin-left: 400px;
                border-radius: 20px;
            }

        </style>
		<script language="javascript" >
            b = new Array('images/Car1.jpg','images/Car2.jpg','images/Car3.jpg');
            banner=0;
            function start()
            {
                if(document.images)
                {
                    banner++;
                    if(banner==b.length)
                    {
                        banner=0;
                    }
                    document.image.src=b[banner]
                    setTimeout("start()",3000);
                }
            }
        </script>
		
    </head>
    <body onload="start()">
    <section>









    <nav class=" navbar navbar-inverse" style="background-color: #d6d6d63a; border-color: transparent;min-height:120px;">
                <div class='container'>
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavBar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
            <div class=""></div>
                        <a href="#" class="navbar-brand"><strong><h1 style="color: rgb(250, 69, 69); font-size: 50px; background: #ccc84d9f; padding:10px; border-radius:15px;">FUN WITH MATH</h1></strong></a>
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
                            <h4 class="" style="color: rgb(250, 69, 69);" align="left">Welcome <?php echo $row['fname']; echo ' '; echo $row['lname']; ?></h4>
                            <li><a href="./home.php" style="font-size:20px; color: rgb(250, 69, 69);"><span class='glyphicon glyphicon-home' ></span>Home</a></li>
                            <li><a href="./setting.php" style="font-size:20px; color: rgb(250, 69, 69);"><span class='glyphicon glyphicon-cog'></span>Setting</a></li>
                            <li><a href="./feedback.php" style="font-size:20px; color: rgb(250, 69, 69);"><span class='glyphicon glyphicon-star-empty'></span>Rate Us..</a></li>
                            <li><a href="./logout.php" style="font-size:20px; color: rgb(250, 69, 69);"><span class='glyphicon glyphicon-log-out'></span>Log Out</a></li>
                        </ul>
                            <?php
                                }else{
                            ?>
                        <ul class='nav navbar-nav navbar-right'>
                            <li><a href="./login.php" style="font-size:20px; color: rgb(250, 69, 69);" ><span class='glyphicon glyphicon-user'></span>Login</a></li>
                            <li><a href="./signup.php" style="font-size:20px; color: rgb(250, 69, 69);"><span class='glyphicon glyphicon-log-in'></span>Sign UP</a></li>
                        </ul>
                            <?php
                                }
                            ?>
                    </div>
                </div>
            </nav>







        <!-- header start -->
        <!-- <nav class=" navbar navbar-default" style="background-color: transparent; border-color: transparent;">
                <div class='container'>
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavBar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
                        <a href="#" class="navbar-brand"><h1>FUN WITH MATH</h1></a>
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
                            <li><a href="./logout.php"><span class='glyphicon glyphicon-log-out'></span>Log Out</a></li>
                        </ul>
                            <?php
                                }else{
                            ?>
                        <ul class='nav navbar-nav navbar-right'>
                            <li><a href="./login.php"><span class='glyphicon glyphicon-user'></span>Login</a></li>
                            <li><a href="./signup.php"><span class='glyphicon glyphicon-log-in'></span>Sign UP</a></li>
                        </ul>
                            <?php
                                }
                            ?>
                    </div>
                </div>
            </nav> -->
        <!-- header end -->
		<br><br><br><br><br><br><br><br><br><br><br><br>
	
            <div class="box">
                <h1 style="padding:80 30 0 30; color:#fff; margin-top:px;">Welcome to World Of Mathematics.</h1>
                <h3 style="padding:20px; margin-left:270px; color:#fff;">Let's Play</h3>
                
			<a href="home.php"><button class=" btn-info btn-danger" style="width: 85px;height: 50px; font-size: 25px; margin-top:25px; margin-left:300px; border-radius: 5px;">Play</button></a>
            
        </div>
        </section>
    </body>
</html>