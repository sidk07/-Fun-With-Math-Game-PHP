<?php

    require './includes/common.php';
     if(!isset($_SESSION['email_id']))
     {
         header("location: index.php");
     }
     else
     {
        $user_id = $_SESSION["uid"];
        $email = $_SESSION["email_id"];

        // get the newly typed password
        
        $box = $_POST["new_password"];
        $num = strlen($box);
        
        $new_password = md5($box);
        $retype_password = md5($_POST["retype_password"]);

        // check if the typed new passwords match
        if($new_password != $retype_password)
        {
            echo "The passwords do not match. Try again."; die();
        }
        else
        {
            if($num<6)
            {
                echo 'Enter password minimum 6 character :)'; die();   
            }
            $query = "UPDATE users SET password = '$new_password' WHERE email = '$email' AND uid = '$user_id'";

            $result = mysqli_query($con, $query) or die(mysqli_error($con));

            header("location: setting.php");
        }
    }

?>

