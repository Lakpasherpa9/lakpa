<?php

include "connection.php";
session_start();
if(isset($_POST["send"])) //checks if the user has clicked on the submit button or not
{
    
    
    $name = $_POST["name"];
    
    $email = $_POST["email"];

    $addr = $_POST["address"];

    $message = $_POST["message"];

    $Query = "INSERT INTO `feedback` (`id`, `name`, `email`, `address`, `message`) VALUES (NULL, '$name', '$email', '$adddress', '$message')";
    $insertquery=mysqli_query($conn,$Query);
    if($insertquery)
    {
        header('Location: ../index.php');
    }
    else{
        echo "response not recorded";
    }

    
}
?>
    
   
