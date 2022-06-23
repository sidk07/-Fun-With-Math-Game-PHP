<html>
    <head>
        <title>Home</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<!-- link to Jquery minified-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<!-- link to Bootstrap JS -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<!-- link to fontawesome CSS-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            body{
               
            }
            .thumb{
                margin-right: 85px;
                max-width: 200px;
                background-color: #ccc;
                background-color: gray;
            }
        </style>
    </head>
    <body>
        <!-- header start -->
            <?php
                require './includes/header.php';
            ?>
        <!-- header end -->
            
    
        <div class="jumbotron container">
            <h1>Maths Quiz</h1>
            <p>Choose the module of quiz...</p>
	</div>
        
        <!-- Row 1 start -->
        <div class="container">
        <?php
        if(isset($_SESSION["email_id"]))
        {?>
            <a href="Arithmatic/add.php"><?php
        }
        else
        {?>
            <a href="#" onclick="javascript: alert('PLease Login!!!')";?><?php
        }?>
                <div class="col-xs-3  thumbnail thumb" style="background-color: gray;">

                    <div class="description">
                        <div style="background-color: darkviolet; text-align: center; min-height: 120px; ">
                            <span style="font-size: 100px; color: white;" class=""><b>+</b></span>
                        </div>
                        <div style=" text-align: center;">
                            <h3 style="color: white;"><b>Addition</b></h3>
                        </div>
                    </div>
                </div>
            </a>
            
            <?php
        if(isset($_SESSION["email_id"]))
        {?>
            <a href="Arithmatic/subtract.php"><?php
        }
        else
        {?>
            <a href="#" onclick="javascript: alert('PLease Login!!!')";?><?php
        }?>
                <div class="col-xs-3  thumbnail thumb" style="background-color: gray;">
                    <div class="description">
                        <div style="background-color: green; text-align: center; min-height: 120px; ">
                            <span style="font-size: 100px; color: white;" class=""><b>-</b></span>
                        </div>
                        <div style="color: blue; text-align: center;">
                            <h3 style="color: white;"><b>Subtraction</b></h3>
                        </div>
                    </div>
                </div>
            </a>
            
            <?php
        if(isset($_SESSION["email_id"]))
        {?>
            <a href="Arithmatic/multiply.php"><?php
        }
        else
        {?>
            <a href="#" onclick="javascript: alert('PLease Login!!!')";?><?php
        }?>
                <div class="col-xs-3  thumbnail thumb" style="background-color: gray;">
                    <div class="description">
                        <div style="background-color: gold; text-align: center; min-height: 120px; ">
                            <span style="font-size: 100px; color: white;" class=""><b>×</b></span>
                        </div>
                        <div style="color: blue; text-align: center;">
                            <h3 style="color: white;"><b>Multiplication</b></h3>
                        </div>
                    </div>
                </div>
            </a>
            
            <?php
        if(isset($_SESSION["email_id"]))
        {?>
            <a href="Arithmatic/divide.php"><?php
        }
        else
        {?>
            <a href="#" onclick="javascript: alert('PLease Login!!!')";?><?php
        }?>
                <div class="col-xs-3  thumbnail thumb" style="background-color: gray;">
                    <div class="description">
                        <div style="background-color: deepskyblue; text-align: center; min-height: 120px; ">
                            <span style="font-size: 100px; color: white;" class=""><b>÷</b></span>
                        </div>
                        <div style="color: blue; text-align: center;">
                            <h3 style="color: white;"><b>Division</b></h3>
                        </div>
                    </div>
                </div>
            </a>
        </div><br><br>
        <!-- Row 1 end -->
        
        <div class="jumbotron container">
            <h1>Match the Tile</h1>
            <p>Choose the Module of Match pattern Game You want to play...</p>
	</div>
        
        <!-- Row 2 start -->
            <div class=" text-center container">
                <div class="row">
                <?php
        if(isset($_SESSION["email_id"]))
        {?>
            <a href="match/imgGame.html"><?php
        }
        else
        {?>
            <a href="#" onclick="javascript: alert('PLease Login!!!')";?><?php
        }?>
                    <div class="col-md-4 col-sm-4">
                        <div class="thumbnail">
                            <img src="images/match_pattern.png" alt="camera">
                                <div class="caption">
                                    <h3>Match Images</h3>
                                     <p>Match similar images to win!!</p>		
                                    </div>
                        </div>
                    </div>
                    </a>
                    
                    <?php
        if(isset($_SESSION["email_id"]))
        {?>
            <a href="match/numGame.html"><?php
        }
        else
        {?>
            <a href="#" onclick="javascript: alert('PLease Login!!!')";?><?php
        }?>
                    <div class="col-md-4 col-sm-4">
                        <div class="thumbnail">
                            <img src="images/match_num.png" alt="camera">
                                <div class="caption">
                                    <h3>Match Numbers</h3>
                                    <p>Match similar numbers to win!!</p>
                                </div>
                        </div>
                    </div>
                    </a>
                    
                    <?php
        if(isset($_SESSION["email_id"]))
        {?>
            <a href="match/game.html"><?php
        }
        else
        {?>
            <a href="#" onclick="javascript: alert('PLease Login!!!')";?><?php
        }?>
                    <div class="col-md-4 col-sm-4">
                        <div class="thumbnail">
                            <img src="images/match_symbols.png" alt="camera">
                                <div class="caption">
                                    <h3>Match Symbols</h3>
                                    <p>Match similar symbols to win!!</p>
                                </div>
                        </div>
                    </div>
                    </a>
                </div>	
            </div>
        <!-- Row 2 end -->
        
            <div class="jumbotron container">
		<h1>Floating Numbers</h1>
		<p>Choose the Module of Float pattern Game You want to play...</p>
            </div>
        
        <!-- Row 3 start -->
            <div class="text-center container">
                <div class="row">
                <?php
        if(isset($_SESSION["email_id"]))
        {?>
            <a href="Number Games/Prime.php"><?php
        }
        else
        {?>
            <a href="#" onclick="javascript: alert('PLease Login!!!')";?><?php
        }?>
                    <div class="col-md-4 col-sm-4"> 
			<div class="thumbnail">
                            <img src="images/float_pattern.png" alt="camera">
                            <div class="caption">
				<h3>Floating Prime Numbers</h3>
				<p>Select Prime numbers to win!!</p>			
                            </div>
			</div>
                    </div>
                    </a>
                    
                    <?php
        if(isset($_SESSION["email_id"]))
        {?>
            <a href="Number Games/Div2.php"><?php
        }
        else
        {?>
            <a href="#" onclick="javascript: alert('PLease Login!!!')";?><?php
        }?>
                    <div class="col-md-4 col-sm-4">
			<div class="thumbnail">
                            <img src="images/float_div2.png" alt="camera">
                            <div class="caption">
                                <h3>Floating Divisible by2 Numbers</h3>
                                <p>Select Divisible by2 numbers to win!!</p>
                            </div>
			</div>
                    </div>
                    </a>
                    
                    <?php
        if(isset($_SESSION["email_id"]))
        {?>
            <a href="Number Games/Div3.php"><?php
        }
        else
        {?>
            <a href="#" onclick="javascript: alert('PLease Login!!!')";?><?php
        }?>
                    <div class="col-md-4 col-sm-4">
                        <div class="thumbnail">
                            <img src="images/float_div3.png" alt="camera">
                            <div class="caption">
                                    <h3>Floating Divisible by3 Numbers</h3>
                                    <p>Select Divisible by3 numbers to win!!</p>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
            </div>
        <!--     3 end -->
        
        <!-- Row 4 start -->
	<div class="text-center container">
            <div class="row">
            <?php
        if(isset($_SESSION["email_id"]))
        {?>
            <a href="Number Games/Div5.php"><?php
        }
        else
        {?>
            <a href="#" onclick="javascript: alert('PLease Login!!!')";?><?php
        }?>
                <div class="col-md-4 col-sm-4">
                    <div class="thumbnail">
                        <img src="images/float_div5.png" alt="camera">
                        <div class="caption">
                            <h3>Floating Divisible by5 Numbers</h3>
                            <p>Select Divisible by5 numbers to win!!</p>
                        </div>
                    </div>
                </div>
                </a>
                
                <?php
        if(isset($_SESSION["email_id"]))
        {?>
            <a href="Number Games/Div10.php"><?php
        }
        else
        {?>
            <a href="#" onclick="javascript: alert('PLease Login!!!')";?><?php
        }?>
                <div class="col-md-4 col-sm-4">
                    <div class="thumbnail">
                        <img src="images/float_div10.png" alt="camera">
                        <div class="caption">
                            <h3>Floating Divisible by10 Numbers</h3>
                            <p>Select Divisible by10 numbers to win!!</p>
                        </div>
                    </div>
                </div>
                </a>
                
                <?php
        if(isset($_SESSION["email_id"]))
        {?>
            <a href="Number Games/SqRoot.php"><?php
        }
        else
        {?>
            <a href="#" onclick="javascript: alert('PLease Login!!!')";?><?php
        }?>
                <div class="col-md-4 col-sm-4">
                    <div class="thumbnail">
                        <img src="images/float_sq.png" alt="camera">
                            <div class="caption">
                                <h3>Floating Perfect sq Numbers</h3>
                                <p>Select perfect sq numbers to win!!</p>
                            </div>
                    </div>
                </div>
                </a>
            </div>
        </div>
        <!-- Row 4 start -->
        <div class="jumbotron container">
            <h1>Other Games</h1>
            <p>Choose the Module of Match pattern Game You want to play...</p>
	    </div>

        <div class=" text-center container">
                <div class="row">
                <?php
        if(isset($_SESSION["email_id"]))
        {?>
            <a href="Tic-Tac-Toe/game.html"><?php
        }
        else
        {?>
            <a href="#" onclick="javascript: alert('PLease Login!!!')";?><?php
        }?> 
                    <div class="col-md-4 col-sm-4">
                        <div class="thumbnail">
                            <img src="images/tik-tak-toe.png" alt="camera">
                                <div class="caption">
                                    <h3>Tik-Tac-Toe</h3>
                                     <p>Make pair of 3 O's OR X's!!</p>		
                                    </div>
                        </div>
                    </div>
                    </a>
            </div>
        </div>
        <!-- Footer start -->
            <?php
		require "./includes/footer.php";
            ?>
        <!-- Footer end -->
    </body>
</html>