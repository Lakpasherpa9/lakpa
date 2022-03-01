<?php 

include "connection.php";
session_start();

if(isset($_POST['submit']))
{
  $email=$_POST['email'];
  $pass= $_POST['password'];

  $query="SELECT * FROM user WHERE email='$email'";

  $run = mysqli_query($conn,$query);

  $result = mysqli_num_rows($run);

  if($result)
  {
    $assoc=mysqli_fetch_assoc($run);
    
    $password=$assoc['password'];

    if($pass==$password)
  {
      $_SESSION['name']=$assoc['fname'];
      $_SESSION['email']=$assoc['email'];
      $_SESSION['address']=$assoc['address'];
      header('Location:../mainpage.php');

    }
    else
    {
      header('Location:login.php');

    }

  }
  else
  {
    header('Location:login.php');
  }

}
