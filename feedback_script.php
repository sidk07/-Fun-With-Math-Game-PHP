<?php
require './includes/common.php';
$user_id = $_SESSION["uid"];

$query_for_high="SELECT * FROM `users` WHERE `uid` = $user_id;";
    $result=mysqli_query($con,$query_for_high);
    $row = mysqli_fetch_array($result);
$user_id = $row['uid'];
$temp=$_POST['temp'];
$name=$row['fname'];
$feed = $_POST['feed'];

// echo $user_id. $temp. $name. $feed. "<br><br>";
// echo $temp."<br>";

 $feedback=$_POST['feed'];
//  echo $feedback."<br>";

 $query = "INSERT INTO `feedback` (`uid`, `name`, `feeback`, `rating`) VALUES ('$user_id', '$name', '$feed', '$temp')";
       
 $result =  mysqli_query($con, $query);
 header("location: feedback.php");

    // if($result){
    //     header('location : feedback.php');
    // }else{
    //     echo "sddvvfd";
    // }

?>