
<?php
require './includes/common.php';
$user_id = $_SESSION["uid"];

$query_for_high="SELECT * FROM `users` WHERE `uid` = $user_id;";
    $result=mysqli_query($con,$query_for_high);
    $row = mysqli_fetch_array($result);
$user_id = $row['uid'];
$name=$row['fname'];
$lname = $row['lname'];
// $temp=$_POST['temp'];

// $feed = $_POST['feed'];

// echo $user_id. $temp. $name. $feed. "<br><br>";
// echo $temp."<br>";

//  $feedback=$_POST['feed'];
//  echo $feedback."<br>";

//  $query3 = "INSERT INTO `feedback` (`uid`, `name`, `feeback`, `rating`) VALUES ('$user_id', '$name', '$feed', '$temp')";
//         mysqli_query($con, $query3);

?>



<html>
    <head>
        <title>Feedback</title>
        <link href="bootall3/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="bootall3/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="bootall3/js/jquery-3.6.0.min.js" type="text/javascript"></script>
        <script lang="javascript">
            function fun(val)
            {
                window.alert("Thanks for giving feedback. Visit Again!");
                document.forms.form1.temp.value=val;
            }
            </script>
    </head>
    <body style="background-color: #5cb85c;">
            <?php
                require './includes/header.php';
            ?>
        <br>
        <div class="" style="margin-right: 250px;margin-left: 250px;">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h1><span class="glyphicon glyphicon-thumbs-up"></span>Help us to improve.</h1>
                </div>
                
                
                    <div class="panel-body">
                        <form method="post" action="feedback_script.php" name="form1" class="form-group">
                        <!-- <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>" name="form1" class="form-group"> -->
                        <div class="row">
                            <div class="col-lg-offset-1 col-lg-3">
                                <label for="name">Name:</label>
                            </div>
                            <div class="col-lg-6">
                                <input class="form-control" type="text" name="user" value="<?php echo $name." ".$lname ?>" disabled="True"/><br><br>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-lg-offset-1 col-lg-3">
                                <label for="feed">Feedback:</label>
                            </div>
                            <div class="col-lg-6">
                                <textarea class="form-control" id="id" name="feed" rows="5" cols="10"></textarea>
                                <input name="temp" type="hidden"/>
                            </div>
                        </div>
                        <br><br>
                        
                        <label style="margin-left: 150px;">Click one to submit.</label><br><br>
                        <div class="row">
                            <div class="col-lg-offset-2 col-lg-2">
                                <input src="images/emoji5.jpg" type="image" name="5" width="78" height="89" onclick="fun(this.name)" /></a>
                            </div>
                            <div class="col-lg-2">
                                <input src="images/emoji4.jpg" type="image" name="4" width="78" height="89" onclick="fun(this.name)"/></a>
                            </div>
                            <div class="col-lg-2">
                                <input src="images/emoji3.jpg" type="image" name="3" width="78" height="89" onclick="fun(this.name)"/></a>
                            </div>
                            <div class="col-lg-2">
                                <input src="images/emoji2.jpg" type="image" name="2" width="78" height="89" onclick="fun(this.name)"/></a>
                            </div>
                            <div class="col-lg-2">
                                <input src="images/emoji1.jpg" type="image" name="1" width="78" height="89" onclick="fun(this.name)"/></a>
                            </div>
                            
                        </div>
                        </form>
                    </div>
                <div class="panel-footer">
                </div>
            </div>
        </div>
        <?php
            // $temp=$_POST['temp'];

            // $feed = $_POST['feed'];
            
            // echo $user_id. $temp. $name. $feed. "<br><br>";
            // echo $temp."<br>";
            
            //  $feedback=$_POST['feed'];
            //  echo $feedback."<br>";
            
            //  $query3 = "INSERT INTO `feedback` (`uid`, `name`, `feeback`, `rating`) VALUES ('$user_id', '$name', '$feed', '$temp')";
            //         mysqli_query($con, $query3);
        ?>
    </body>
</html>
