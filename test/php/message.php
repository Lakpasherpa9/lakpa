<?php

include "connection.php";

session_start();
if(isset($_POST["send"])) //checks if the user has clicked on the submit button or not
{
    
    
    $name = $_SESSION['name'];
    
    $email = $_SESSION['email'];

    $addr = $_SESSION['address'];

    $message = $_POST["message"];

    $Query = "INSERT INTO `feedback` (`id`, `name`, `email`, `address`, `message`, `regtime`) VALUES
     (NULL, '$name', '$email', '$addr', '$message', current_timestamp())";
    $insertquery = mysqli_query($conn,$Query);
    if($insertquery)
    {
        header('Location: ../index.php');
    }
    else{
        echo "response not recorded";
    }

    
}
?>
    
   
