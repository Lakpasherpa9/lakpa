<?php
$conn = mysqli_connect('localhost','root','root','project');  
session_start();
 if(isset($_POST["submit"]))
 {
     $email = $_POST["email"];  // Passes the name in the login form to this variable
     $pass =  $_POST["password"];     // Passes the Password in the login  form to this variable

     $name_search = "SELECT * FROM users WHERE email= '$email'";

     $runsql = mysqli_query($conn,$name_search);
     
    $result = mysqli_num_rows($runsql);
      if($result)
     {
             
         $name_pass = mysqli_fetch_assoc($runsql);

         $fetched_pass = $name_pass["password"];

         $pass_verify = password_verify($pass,$fetched_pass);

       if(!$pass_verify)
        {
          //  echo "Password not matched";
          header('Location: index.php');
        }
        else
        {

          $_SESSION['name']=$name_pass['fname'];
            // echo "Passwords matched";
           header("Location: ../mainpage.php");
           die;
        }

    }
    else
    {
        header("Location:login.php");
        die;
        //  echo "invalid Email";
    }
}
  
        
?>
