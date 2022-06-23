<?php

require "../includes/common.php";

    $score=$_POST['score'];
    $user_id = $_SESSION["uid"];
    
    $query_for_high="SELECT `highscore` FROM `div10` WHERE `uid`=$user_id";
    $result=mysqli_query($con,$query_for_high);
    $row = mysqli_fetch_array($result);
    
    $high_from_db=$row['highscore'];
    echo "$high_from_db<br>";
    
    if($score>$high_from_db)
    {
        $update_query="UPDATE `div10` SET `highscore` = '$score' WHERE `div10`.`uid` = $user_id";
        mysqli_query($con, $update_query);
    }
    else
    {
        echo "else part";
    }
    
    echo $score;
    
    header("location: ../home.php");
/*
    $query = "INSERT INTO `prime` (`uid`, `highscore`) VALUES ($user_id, $score);";
    
   
    $query_result = mysqli_query($con, $query);

    if(mysqli_num_rows($query_result) == 0){
        echo "Score does not exists.";
    }
    else
    {   
        header("location: home.php");
    }*/
?>