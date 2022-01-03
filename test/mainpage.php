

<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home Page</title>
        <link rel="stylesheet" href="style.css">
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
                <img src="images/Logo 03.png" height="60px">   
            </a>
                <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">
                    <span class="navbar-toggler-icon"></span>
                </button> 
            <div class="collapse navbar-collapse" id="navbarMenu">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="#" class="nav-link">HOME</a>
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
            <!-- </div> 
            <a class="cta" href="#"><button class="button1"></strong></button></a>   -->
        </nav> 
        
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <!--Main Content-->

        <div class="start">
        <h4> Welcome <?php session_start(); echo $_SESSION['name'] ?></h4>


        </div>
        
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <h1 class="mb-4" style="opacity: 0.833836; font-size:8vw; color: white;">
                        <strong>Explore</strong>
                        <br>
                        NEPAL
                    </h1>
                </div>
            </div>
        </div> 
        <section class="services-section bg-light">
            <div class="container">
                <div class="row d-flex">
                    
                    <div class="column-cont col-md-3 d-flex align-self-stretch">
                        <div class="block-6 services d-block text-center">
                            <div class="d-flex justify-content-center">
                                <div class="icon">
                                    <span class="pic-icon"><img src="images/temple.png" height="80px"></span>
                                </div>
                            </div>
                            <div class="media-body p-2 mt-2">
                                <h3 class="heading mb-3">CULTURE</h3>
                                <p>The temples, stupas, religious and culturally important sites.</p>
                            </div>
                        </div>
                        
                </div>
                <div class="column-cont col-md-3 d-flex align-self-stretch">
                    <div class="block-6 services d-block text-center">
                        <div class="d-flex justify-content-center">
                            <div class="icon">
                                <span class="pic-icon"><img src="images/mountain.png" height="80px"></span>
                            </div>
                        </div>
                        <div class="media-body p-2 mt-2">
                            <h3 class="heading mb-3">Sites</h3>
                            <p>Immersive scenary of rivers, lakes, hills, valleys and mountains as rarely found in the world.</p>
                        </div>
                    </div>
                </div>
                <div class="column-cont col-md-3 d-flex align-self-stretch">
                    <div class="block-6 services d-block text-center">
                        <div class="d-flex justify-content-center">
                            <div class="icon">
                                <span class="pic-icon"><img src="images/paragliding.png" height="80px"></span>
                            </div>
                        </div>
                        <div class="media-body p-2 mt-2">
                            <h3 class="heading mb-3">Adventure</h3>
                            <p>Seek the thrill for your life with paragliding, rafting, mountain climbing, bungy jumping and many more.</p>
                        </div>
                    </div>                    
                </div>
                <div class="column-cont col-md-3 d-flex align-self-stretch">
                    <div class="block-6 services d-block text-center">
                        <div class="d-flex justify-content-center">
                            <div class="icon">
                                <span class="pic-icon"><img src="images/food.png" height="80px"></span>
                            </div>
                        </div>
                        <div class="media-body p-2 mt-2">
                            <h3 class="heading mb-3">Food</h3>
                            <p>Find most unique food available in this country. Every corner might have a food you will love.</p>
                        </div>
                    </div>        
                </div>        
            </>
            </div>
        </section>
        


        <!-- footer -->

        <section class="footer">
            <div class="container tex-center">
                <div class="row">
                    <div class="col-md-3">
                        <h1>Useful Links</h1>
                        <p>Privacy Policy</p>
                        <p>Terms of Use</p>
                    </div>
            
                    <div class="col-md-3">
                        <br>
                        <a href="#" class="nav-link">Home</a>
                        <a href="#" class="nav-link">About Us</a>
                        <a href="#" class="nav-link">Places to Visit</a>
                        <a href="#" class="nav-link">Contact</a>                       
                    </div>
                    <div class="col-md-3">
                        <h1>Follow Us On</h1>
                        <p><i class="fa fa-facebook-official"></i> Facebook</p>
                        <p><i class="fa fa-twitter"></i> Twitter</p>
                    </div>
                </div>
                <hr>
                <p class="copyright">Made by Sagyan Sachin Lakpa</p>
            </section>

    </body>
</html>
