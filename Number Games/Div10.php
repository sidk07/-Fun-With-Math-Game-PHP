<?php
    require "../includes/common.php";

    $user_id = $_SESSION["uid"];
    $query_for_high="SELECT `highscore` FROM `div10` WHERE `uid`=$user_id";
    $result=mysqli_query($con,$query_for_high);
    $row = mysqli_fetch_array($result);
    
    $high_from_db=$row['highscore'];
?>
<html>
    <head>
        <title>Divisible by 10 Numbers.</title>
        <link href="bootall3/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="bootall3/js/bootstrap.min.js" ></script>
        <script src="bootall3/js/jquery-3.6.0.min.js"></script>
        <style>
            body{
                background-image: url("prime-bg.jpg");
            }
        </style>
    </head>
    <body onload="start();">
<div class="">
        <div class="row">
            <form name="scoreboard" action="div10_script.php" method="POST">
                <h1 style="font-size: 30px;"class="col-lg-1">Scrore:</h1>
                <h1 id="score" style="font-size: 30px;" class="col-lg-4">0</h1>
                <input type="hidden" id="score1" name="score">

                    <h3 style="" class="col-lg-2">Higest Scrore:</h3>
                    <h3 id="hscore" style=";" class="col-lg-1"><?php echo $row['highscore'] ?></h3>

                    <h3 style="" class="col-lg-2">Time Remaining:</h3>
                    <h3 id="time" style="" class="col-lg-2">60 Sec</h3>
            </form>
        </div> 
    </div>
<marquee scrollamount="5">
        <?php
        $arr= range(1,30);
        shuffle($arr);
            for($i=1;$i<count($arr);$i++)
                {
                 echo "<button id=\"btn$arr[$i]\""
                         . " class=\"btn-info btn-lg\""
                         . " onclick=\"check(this.value)\""
                         ."style=\"padding-right:20px;padding-left:20px;padding-top:0px;padding-bottom:0px; margin:10px; margin-right:30px;\""
                         . " value=\"$arr[$i]\" ><h3>$arr[$i]</h3></button>" ;
                 if($i%15==0)
                 {
                     echo "<br>";
                 }
                }
                
        ?>
</marquee>

<marquee scrollamount="6" direction="right">
        <?php
        $arr= range(31,60);
        shuffle($arr);
            for($i=1;$i<count($arr);$i++)
                {
                 echo "<button id=\"btn$arr[$i]\""
                         . " class=\"btn-info btn-lg\""
                         . " onclick=\"check(this.value)\""
                         ."style=\"padding-right:20px;padding-left:20px;padding-top:0px;padding-bottom:0px; margin:10px; margin-right:30px;\""
                         . " value=\"$arr[$i]\" ><h3>$arr[$i]</h3></button>" ;
                 if($i%15==0)
                 {
                     echo "<br>";
                 }
                }
                
        ?>
</marquee>

<marquee scrollamount="5">
        <?php
        $arr= range(61,90);
        shuffle($arr);
            for($i=1;$i<count($arr);$i++)
                {
                 echo "<button id=\"btn$arr[$i]\""
                         . " class=\"btn-info btn-lg\""
                         . " onclick=\"check(this.value)\""
                         ."style=\"padding-right:20px;padding-left:20px;padding-top:0px;padding-bottom:0px; margin:10px; margin-right:30px;\""
                         . " value=\"$arr[$i]\" ><h3>$arr[$i]</h3></button>" ;
                 if($i%15==0)
                 {
                     echo "<br>";
                 }
                }
                
        ?>
</marquee>

<script language="javascript">
        function start()
        {
            var t=59;
            t=parseInt(t);
            setInterval(func,1000);
            function func()
            {
                document.window.alert("called");
                t=t-1;
                document.getElementById("time").innerHTML="HI   ";
            }
        }

        var scr=0;
        function check(value)
        {
            var strValue="btn"+value.toString();
            
                n = value;
                    if (value % 10 == 0) {
                        document.getElementById(strValue).disabled = true;
                    document.getElementById(strValue).style.backgroundColor='Green';
                    scr=scr+1;
                    document.getElementById("score").innerHTML=scr;
                    document.getElementById("score1").value=scr;
                    }
                    else {
                        document.getElementById(strValue).style.backgroundColor='Red';
                    setInterval(function () {document.getElementById(strValue).style.backgroundColor='#5bc0de';},500);
                    }
        }     
        <!--Timer Start -->
            var seconds=30;
		function fun()
		{
			document.getElementById("time").innerHTML =seconds+" Sec";
			seconds=seconds-1;
			if(seconds==-1)
			{
				clearInterval(clearInter);
				//alert("Alert");
                alert("Time Up... \n Your Score : "+scr);
                                document.forms.scoreboard.submit();
			}
		}
		var clearInter=setInterval(fun,1000);
        <!--Timer End-->   
    </script>
</body>
</html>