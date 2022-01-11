

<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Main Page</title>
        <link rel="stylesheet" href="style/mainpagestyle.css">
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
                        <a href="mainpage.php" class="nav-link">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">ABOUT</a>
                    </li>
                   
                    <li class="nav-item">
                        <a href="./todolist.php" class="nav-link">TODO-List</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">COVID-19</a>
                    </li>
                    <li class="nav-item">
                        <a href="./php/logout.php" class="nav-link">LOG-OUT</a>
                    </li>
                    
                </ul>
            <!-- </div> 
            <a class="cta" href="#"><button class="button1"></strong></button></a>   -->
        </nav> 
        
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <!--Main Content-->

       
        
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <h1 class="mb-4" style="opacity: 0.833836; font-size:8vw; color: white;">
                        <strong>Welcome</strong>
                        <br>
                        <?php session_start(); echo $_SESSION['name'] ?>
                        <br>
                       
                    </h1>
                </div>
            </div>
        </div> 
      
        <section> 
             <h1 style="margin-right:40px;text-align:right;font-size:6vw; color:skyblue; opacity:0.9"> 
              <br><strong> Under-rated</strong> places  </h1>                
    
            </div>
        </section>

     
        <br><br><br><br><br><br>
        <section>
        <div class="container">
                 <h2>Humla</h2>
                 
                 <div class="row">
                 <div class="col-lg-6">
                    <img src="./images/humla.webp" alt=""  width="80%">
                 </div>
                <div class="col-lg-6">
                    <img src="./images/humla1.webp" alt="" width="80%" >
                    </div>
                    </div>
                    <br>
                    <p>Humla is a paradise for those seeking an authentic cultural and wilderness trekking experience. 
                        The lower and the middle portion of the region is home to the Khas ethnic 
                        communities (Chettri, Bahun, Thakuri, Damai, and Kami), while the
                        upper section is populated by Buddhist communities that migrated from Tibet ages ago</p>
                
            
            <div>
                <h2>Dolpa</h2>
                <div class="row">
                 <div class="col-lg-6">
                    <img src="./images/Dolpa1.jpg" alt=""  width="80%">
                 </div>
                <div class="col-lg-6">
                    <img src="./images/dolpa3.jpg" alt="" width="80%" >
                    </div>
                    </div>
                    <br>
                <p>Dolpa region leads through scenic, hidden valley and ancient shrines like Shey Gompa.
                     Enjoying views of the pristine waters of Phoksundo Lake, encountering yak caravans that 
                     cross the high-Himalayan passes and mountain people
                     who live in some of the highest settlements on earth like the Dho-Tarap valley.</p>
            </div>
        </div>
        </section>


        <!-- footer -->
        <footer class="footer-area">
        <div class="footer-wave-box">
            <div class="footer-wave footer-animation"></div>
        </div>
        <div class="main">
            <div class="footer">
                <div class="single-footer">
                    <h4>Connect With us</h4>
                    <p>We are here to help and answer any question you might have. We look forward to hearing from you
                    </p>
                    <div class="footer-social">
                        <a href="" class="color"><i class="icon fa fa-facebook"></i></a>
                        <a href="" class="color"><i class="icon fa fa-instagram"></i></a>
                        <a href="" class="color"><i class="icon fa fa-linkedin"></i></a>
                        <a href="" class="color"><i class="icon fa fa-twitter"></i></a>
                    </div>
                </div>
                <div class="single-footer">
                    <h4>main menu</h4>
                    <ul>
                        <li><a href=""><i class="fas fa-angle-right"></i> Home</a></li>
                        <li><a href=""><i class="fas fa-angle-right"></i> About us</a></li>
                        <li><a href=""><i class="fas fa-angle-right"></i> Contact us</a></li>
                    
                    </ul>
                </div>
                <div class="single-footer">
                    <h4>Helpful links</h4>
                    <ul>
                        <li><a href=""><i class="fas fa-angle-right"></i> Services</a></li>
                        <li><a href=""><i class="fas fa-angle-right"></i> Supports</a></li>
                        <li><a href=""><i class="fas fa-angle-right"></i> Privacy Policy</a></li>
                        <li><a href=""><i class="fas fa-angle-right"></i> Terms & Conditions</a></li>
                        <li><a href=""><i class="fas fa-angle-right"></i> Disclaimer</a></li>
                    </ul>
                </div>
                <div class="single-footer">
                    <h4>contact us</h4>
                    <ul>
                        <li><a href=""><i class="fas fa-map-marker-alt"></i> Plot No 47,Amrit Bhavan,Opposite to Axis
                                Bank,Nagpur 440023</a></li>
                        <li><a href=""><i class="fas fa-mobile-alt"></i> +91 9397165725</a></li>
                        <li><a href=""><i class="fas fa-envelope"></i> hi@fashio.com</a></li>
                        <li><a href=""><i class="fas fa-globe"></i> www.fashionworld.com</a></li>
                    </ul>
                </div>
                <div class="single-footer">
                <p class="copyright">Made by Sagyan Sachin Lakpa</p>


                </div>
            <!-- </div>
            <div class="copy">
                <p>&copy;  | All rights reserved |2021 </p>
            </div>
        </div> -->
    </footer>
    
        <!-- <section class="footer">
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
            </section> -->

    </body>
</html>
