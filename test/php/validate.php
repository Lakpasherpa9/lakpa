<?php
require_once "server/dbconnect.php";

 if(isset($_POST["submit"]))
 {
     $name = $_POST["email"];  // Passes the name in the login form to this variable
     $pass = $_POST["password"];     // Passes the Password in the login  form to this variable

     $name_search = "SELECT * FROM users WHERE email= '$name'";
     
     $runsql = mysqli_query($conn,$name_search);
     $result = mysqli_num_rows($runsql);
    
      if($result)
     {
             
         $name_pass = mysqli_fetch_assoc($runsql);

         $fetched_pass = $name_pass["password"];

          $pass_verify = password_verify($pass,$fetched_pass);

       if(!$pass_verify)
        {
          // echo "Password not matched";
           header('Location: index.php');
        }
        else
        {
            // echo "Passwords matched";
           header("Location: mainpage.php");
          die;

        }

    }
    else
    {
        header("Location:login.php");
       die;
      //  echo "invalid username";
    }
}

        
?>
