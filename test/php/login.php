
<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link rel="stylesheet" href="register.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Caramel&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    
    <body> 

        <!--header-->

        <nav class="navbar navbar-expand-sm navbar-dark shadow-5-strong">
            <a href="test002.html" class="navbar-brand">
                <img src="../images/Logo 03.png" height="60px">   
            </a>
                <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">
                    <span class="navbar-toggler-icon"></span>
                </button> 
            <div class="collapse navbar-collapse" id="navbarMenu">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="../index.php" class="nav-link">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">ABOUT</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">BLOG</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">CONTACT</a>
                    </li>
                </ul>
            </div> 
            <a class="cta" href="login.php"><button class="button1">Log In</button></a>  
        </nav> 
        
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<!-- Main Login code-->

	<div class="center">
		<h1>Login</h1>
		<form method="POST" action="validate.php" id="login">
			<div class="txt_field">
          <input type="text" required name="email" id="email">
          <span></span>
          <label>E-mail</label>
        </div>
        <div class="txt_field">
          <input type="password" required name="password" id="password">
          <span></span>
          <label>Password</label>
        </div>
        <!-- <div class="pass">Forgot Password?</div> -->
        <div class="submit">
        <button type="submit" name="submit" id = "submit" form="login">Log In </button>
        </div>
		<a href="index.php"></a>
        <div class="signup_link">
	
         <center> Not a member? <a href="signup.php">Signup</a></center>
            <br>
        <center> Login as Admin <a href="../admin/loginform.php"> Login </a></center>
        </div>
		</form>
	</div>
</body>
</html>
