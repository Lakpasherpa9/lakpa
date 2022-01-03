<?php
//session_start();

include "connection.php";
session_start();
if(isset($_POST["submit"])) //checks if the user has clicked on the submit button or not
{
    
    //real_escape_string() for extra layer of protection
    $fname = $_POST["fname"];
    
    $lname = $_POST["lname"];

    $email = $_POST["email"];

    $addr = $_POST["address"];

    $phone = $_POST["phone"];
    // $username = $_POST["name"];
    $pass = $_POST["password"];

    $cpass = $_POST["cpassword"];

    $password = password_hash($pass,PASSWORD_BCRYPT);// hashing the password using blowfish algorithm
    $cpassword = password_hash($cpass,PASSWORD_BCRYPT);

    //making query
    $email_query = "SELECT * FROM users WHERE email = '$email'";
    
    //Fetching query
    $query = mysqli_query($conn, $email_query);
    
    $emailcount = mysqli_num_rows($query);

    if($emailcount == 1)
    {
        ?>
                     <script>
                    alert("Email Already Exists");
                     </script>
        <?php
      
        // header('Location: register.php');
        // die;
        // $_SESSION['error'] = true;
    }
    else
    {
        //retype pass checking
         if($pass==$cpass)
         {
             //
            $insertquery = "INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `address`, `phone`, `password`, `cpassword`) 
            VALUES (NULL, ' $fname', '$lname ', '$email ', '$addr ', '$phone ', '$password ', '$cpassword')";
             
            $iquery = mysqli_query($conn,$insertquery);

            if($iquery)
            {
                    $_SESSION['name']=$fname;
                   header('Location: ../mainpage.php');
                   die;
            } 
             else
             {
                    ?>
                    <script>
                    alert("Failed to Register");
                    </script>
                    <?php 
                

            }
    
         }
         else
         {
            ?>
                    <script>
                    alert("Passwords Don't match");
                    </script>
            <?php 
         }
    }

}
