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
                        <a href="index.php" class="nav-link">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">ABOUT</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">BLOG</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">CONTACT US </a>
                    </li>
                </ul>
            </div> 
            <a class="cta" href="php/login.php"><button class="button1">Log In</button></a>  
        </nav> 
        
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <!--Main Content-->

            <!--Big Buttons-->

        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <h1 class="exnp mb-4" style="opacity: 0.833836; font-size:8vw; color: white;">
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
        
            <!--Carousel-->
            <div class="container">
                <div class="row justify-content-start mb-5 pb-3">
                    <div class="col-md-7 heading-section">
                        <br>
                        <h2><strong>TOP</strong> Destinations</h2>
                    </div>
                </div>
            </div>
        
            <div id="demo" class="cara carousel slide" data-ride="carousel">
                <ul class="carousel-indicators">
                  <li data-target="#demo" data-slide-to="0" class="active"></li>
                  <li data-target="#demo" data-slide-to="1"></li>
                  <li data-target="#demo" data-slide-to="2"></li>
                  <li data-target="#demo" data-slide-to="3"></li>
                  <li data-target="#demo" data-slide-to="4"></li>
                </ul>
                <div class="carousel-inner">
                  <div class="effsed carousel-item active">
                      <figure class="effect">
                    <img src="images/pok1.jpg" class="d-block w-100" alt="Los Angeles" width="1200" height="600">
                    <div class="carousel-caption">
                        <figcaption>
                      <h3>Pokhara</h3>
                      <p>The valley of beauty where lakes and mountains can merge in one.</p>
                        </figcaption>
                    </div>
                    </figure>   
                  </div>
                  <div class="effsed carousel-item">
                    <figure class="effect">
                    <img src="images/img1.jpg" class="d-block w-100" alt="Chicago" width="1200" height="600">
                    <div class="carousel-caption">
                        <figcaption>
                      <h3>Solukhumbu</h3>
                      <p>Welcome to the base of Mount Everest.</p>
                    </figcaption>
                    </div>   
                </figure> 
                  </div>
                  <div class="effsed carousel-item">
                    <figure class="effect">
                    <img src="images/Mustang.jpg" class="d-block w-100" alt="New York" width="1100" height="600">
                    <div class="carousel-caption">
                        <figcaption>
                      <h3>Mustang</h3>
                      <p>Behind the mountain range of Himalayas the rocky mountains prevail.</p>
                    </figcaption>
                    </div>   
                </figure> 
                  </div>
                  <div class="effsed carousel-item">
                    <figure class="effect">
                    <img src="images/Chitwan.jpg" class="d-block w-100" alt="Chicago" width="1100" height="600">
                    <div class="carousel-caption">
                        <figcaption>
                      <h3>Chitwan</h3>
                      <p>Find the great animals that live here.</p>
                    </figcaption>
                    </div>  
                </figure>  
                  </div>
                  <div class="effsed carousel-item">
                    <figure class="effect">
                    <img src="images/Karnali.jpeg" class="d-block w-100" alt="Chicago" width="1100" height="500">
                    <div class="carousel-caption">
                        <figcaption>
                      <h3>Karnali</h3>
                      <p>Eye catching and breath taking.</p>
                    </figcaption>
                    </div> 
                    </figure>   
                  </div>
                </div>
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                  <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                  <span class="carousel-control-next-icon"></span>
                </a>
              </div>

            <!--Top Food-->
            <div class="container Heading mt-4 mb-4" style="padding-top: 20px;">
                <h2><strong>TOP</strong> Food and Cuisines</h2>
            </div>
            <section id="delicacies">
                <div class="container">
                    <div class="row row-cols-1 row-cols-md-2 g-4 ">
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="card1  mt-5">
                                <img src="images/Dhido.jpg" class="card-img-top" alt="..." height="150px">
                                <div class="card-body">
                                    <h5 class="card-title">Dhido</h5>
                                    <p class="card-text">Dhindo (Nepali: ढिँडो) is a meal prepared in Nepal. It is prepared by gradually adding flour to boiling water while stirring. It is a staple meal in various parts of Nepal and the Sikkim and Darjeeling regions of India.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="card1 mt-5">
                                <img src="images/Thakali.jpg" class="card-img-top" alt="..." height="150px">
                                <div class="card-body">
                                    <h5 class="card-title">Thakali</h5>
                                    <p class="card-text">Thakali food comprises of dal-bhat-tharkari − lentils, rice and vegetables, with meat for non-vegetarians. Buckwheat breads  may be served with the basic curry and kachhyamba as an appetizer. Desserts include sweet curd or phopké (fermented rice).

                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="card1 mt-5">
                                <img src="images/Samaybaji.jpg" class="card-img-top" alt="..." height="150px">
                                <div class="card-body">
                                    <h5 class="card-title">Samay Baji</h5>
                                    <p class="card-text">Samay Baji (Nepal Bhasa: समय् बजि) is an authentic traditional dish of Newar community in Nepal. In recent years this food has become one of the main attractions of Nepal. It is considered as a typical dish of the Nepalese people. It is mostly served during auspicious occasion, in family get-together and Newari Festivals. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="card1 mt-5">
                                <img src="images/Chhoylaa.png" class="card-img-top" alt="..." height="150px">
                                <div class="card-body">
                                    <h5 class="card-title">Chhoylaa</h5>
                                    <p class="card-text">Chhoyla/Chhwela (Nepali: छ्वेला) is a typical Newari dish that consists of spiced grilled buffalo meat. The meat is usually eaten with rice flakes (chiura), this dish is typically very spicy.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

<!-- About Section -->

     <!-- <section id="about-sec">
      <div class="about-header">
        <h5 class="heading">Just show up!</h5>
        <h2 class="about-body">
          Create healthy change through body,<br />mind and spirit
        </h2>
      </div>
      <div class="about-info">
        <div class="about-block">
          <img src="./images/pic2.jpg" alt="lotus" class="about-img" />
          <div class="about-info-div">
            <h3 class="about-info-header">Reduce Stress</h3>
            <p>
              Lorem ipsum dolor sit amet, mind and spiritconsectetur adipiscing
              elit, mind and spiritconsectetur adipiscing do eiusmod tempor
              incididunt ut labore et dolore magna aliqua.
            </p>
          </div>
        </div>

        Lorem ipsum dolor sit amet, mind and spiritconsectetur adipiscing
              elit, mind and spiritconsectetur adipiscing do eiusmod tempor
              incididunt ut labore et dolore magna aliqua.
            </p>
          </div>
        </div>

        <div class="about-block">
          <img src="./images/pic01-2.jpg" alt="brain" class="about-img" />
          <div class="about-info-div">
            <h3 class="about-info-header">Reduce Stress</h3>
            <p>
              Lorem ipsum dolor sit amet, mind and spiritconsectetur adipiscing
              elit, mind and spiritconsectetur adipiscing do eiusmod tempor
              incididunt ut labore et dolore magna aliqua.
            </p>
          </div>
        </div>
      </div>
    </section>     <div class="about-block">
          <img src="./images/pic01.jpg" alt="yoga" class="about-img" />
          <div class="about-info-div">
            <h3 class="about-info-header">Reduce Stress</h3>
            <p>
              Lorem ipsum dolor sit amet, mind and spiritconsectetur adipiscing
              elit, mind and spiritconsectetur adipiscing do eiusmod tempor
              incididunt ut labore et dolore magna aliqua.
            </p>
          </div>
        </div>

        <div class="about-block">
          <img src="./images/pic01-2.jpg" alt="brain" class="about-img" />
          <div class="about-info-div">
            <h3 class="about-info-header">Reduce Stress</h3>
            <p>
              Lorem ipsum dolor sit amet, mind and spiritconsectetur adipiscing
              elit, mind and spiritconsectetur adipiscing do eiusmod tempor
              incididunt ut labore et dolore magna aliqua.
            </p>
          </div>
        </div>
      </div>
    </section> -->


    <!-- End of about section -->


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
                        <a href="" class="color"><i class="fab fa-facebook-f"></i></a>
                        <a href="" class="color"><i class="fab fa-instagram"></i></a>
                        <a href="" class="color"><i class="fab fa-linkedin-in"></i></a>
                        <a href="" class="color"><i class="fab fa-twitter"></i></a>

                    </div>
                </div>
                <div class="single-footer">
                    <h4>main menu</h4>
                    <ul>
                        <li><a href=""><i class="fas fa-angle-right"></i> Home</a></li>
                        <li><a href=""><i class="fas fa-angle-right"></i> About us</a></li>
                        <li><a href=""><i class="fas fa-angle-right"></i> Blog</a></li>
                        <li><a href=""><i class="fas fa-angle-right"></i> Events</a></li>
                        <li><a href=""><i class="fas fa-angle-right"></i> Contact us</a></li>
                    </ul>
                </div>
                <div class="single-footer">
                    <h4>Helpful links</h4>
                    <ul>

                        <li><a href=""><i class="fas fa-angle-right"></i> Supports</a></li>
                        <li><a href=""><i class="fas fa-angle-right"></i> Privacy Policy</a></li>
                        <li><a href=""><i class="fas fa-angle-right"></i> Terms & Conditions</a></li>
                        
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
            </div>
            <!-- <div class="copy">
                <p>&copy;  | All rights reserved |2021 </p>
            </div> -->
        </div>
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
