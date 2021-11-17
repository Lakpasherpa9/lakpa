<?php
//session_start();
require_once "server/dbconnect.php";   //connecting the database using include method
// $conn = mysqli_connect('localhost','root','','project');

if(isset($_POST["submit"])) //checks if the user has clicked on the submit button or not
{

    //real_escape_string() for extra layer of protection
    $fname = mysqli_real_escape_string($conn,$_POST["fname"]);
    
    $lname = mysqli_real_escape_string($conn,$_POST["lname"]);

    $email = mysqli_real_escape_string($conn,$_POST["email"]);

    $addr = mysqli_real_escape_string($conn,$_POST["address"]);
    $phone = mysqli_real_escape_string($conn,$_POST["phone"]);
    // $username = mysqli_real_escape_string($conn,$_POST["name"]);
    $pass = mysqli_real_escape_string($conn,$_POST["password"]);
    $cpass = mysqli_real_escape_string($conn,$_POST["cpassword"]);

    $password = password_hash($pass,PASSWORD_BCRYPT);// hashing the password using blowfish algorithm
    $cpassword = password_hash($cpass,PASSWORD_BCRYPT);

    //making query
    $email_query = "SELECT * FROM users WHERE email = '$email'";
    
    //Fetching query
    $query = mysqli_query($conn, $email_query);
    
    $emailcount = mysqli_num_rows($query);


    if($emailcount>0)
    {
        ?>
                    <script>
                    alert("Email Already Exists");
                    </script>
        <?php
    }
    else
    {
        //retype pass checking
         if($pass==$cpass)
         {
             //
             $insertquery = "INSERT INTO users (fname, lname, email, address, phone, password, cpassword)
            VALUES ('$fname','$lname','$email','$addr','$phone','$password','$cpassword')";
             
            $iqeury = mysqli_query($conn,$insertquery);

            if($iqeury)
            {
                echo "Registered successfully";
                //    header('location: mainpage.php');
//                    ob_end_flush();

                
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
