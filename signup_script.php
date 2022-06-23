<?php
    
    require "./includes/common.php";
    
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password =  $_POST['password'];
    $retype_password =  $_POST['retype_password'];
    
    if($password != $retype_password)
    {
        echo 'Password does not match.'."<br>";
        echo 'Please enter correct password';
        die();
    }
    
    // hash password
    $hashed_password = md5($password);
    $query1 = "SELECT uid FROM users WHERE email = '$email' AND password = '$hashed_password';";
    $query2 = "INSERT INTO `users` (`uid`, `fname`, `lname`, `email`, `password`, `registration_time`) VALUES (NULL, '$first_name', '$last_name', '$email', '$hashed_password', CURRENT_TIMESTAMP);";
    // check if already registered user
    $result = mysqli_query($con, $query1);
    if(mysqli_num_rows($result) > 0){
        // email already exists
        echo "Email id already exists. Try another";
    }
    else
    {
        // perform query operation
        $result = mysqli_query($con, $query2);
        $_SESSION["email_id"] = $email;
        $_SESSION["uid"] = mysqli_insert_id($con);
        
        $user_id = $_SESSION["uid"];
        
        $query3 = "INSERT INTO `prime` (`uid`, `highscore`) VALUES ($user_id, '0');";
        mysqli_query($con, $query3);

        $query4 = "INSERT INTO `div2` (`uid`, `highscore`) VALUES ($user_id, '0');";
        mysqli_query($con, $query4);

        $query5 = "INSERT INTO `div3` (`uid`, `highscore`) VALUES ($user_id, '0');";
        mysqli_query($con, $query5);

        $query6 = "INSERT INTO `div5` (`uid`, `highscore`) VALUES ($user_id, '0');";
        mysqli_query($con, $query6);

        $query7 = "INSERT INTO `div10` (`uid`, `highscore`) VALUES ($user_id, '0');";
        mysqli_query($con, $query7);

        $query8 = "INSERT INTO `sqroot` (`uid`, `highscore`) VALUES ($user_id, '0');";
        mysqli_query($con, $query8);
        
        // This following link will redirect to home page
        header("location: home.php");
    }
?>