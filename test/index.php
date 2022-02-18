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
        <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
        <script src="js/map.js"></script>
        <link rel="stylesheet" href="style/map.css">
        <style>
                @import url('https://fonts.googleapis.com/css2?family=Inter:wght@200&display=swap'); 
        </style>
    </head>
    
    <body> 

        <!--header-->

        <nav class="navbar navbar-expand-sm navbar-dark shadow-5-strong" id="navbar">
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
                        <a href="#about-sec" class="nav-link">ABOUT</a>
                    </li>
                    
                    <li class="nav-item">
                        <a href="#contact-sec" class="nav-link">CONTACT US </a>
                    </li>
                    <li class="nav-item">
                        <a href="#covid-sec" class="nav-link">COVID-19 </a>
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
        <section class="services-section bg-light" id="home-sec">
            <div class="container">
                <div class="row d-flex">
                    <div class="column-cont col-md-3 d-flex align-self-stretch">
                    <div class="link"><a href="culture.php">
                        <div class="block-6 services d-block text-center">
                            <div class="d-flex justify-content-center">
                                <div class="icon">
                                    <span class="pic-icon"><img src="images/temple.png" height="80px"></span>
                                </div>
                            </div>
                            <div class="media-body p-2 mt-2">
                                <h3 class="heading mb-3">CULTURE</h3>
                                <p class="ling">The temples, stupas, religious and culturally important sites.</p>
                            </div>
                        </div></a>
                    </div>
            
                </div>
                </button>
                <div class="column-cont col-md-3 d-flex align-self-stretch">
                     <div class="link"><a href="./site.php">
                    <div class="block-6 services d-block text-center">
                        <div class="d-flex justify-content-center">
                            <div class="icon">
                                <span class="pic-icon"><img src="images/mountain.png" height="80px"></span>
                            </div>
                           
                        </div>
                       
                        <div class="media-body p-2 mt-2">
                            <h3 class="heading mb-3">Sites</h3>
                            <p class="ling">Immersive scenary of rivers, lakes, hills, valleys and mountains as rarely found in the world.</p>
                        </div>
                        </div></a>
                    </div>
                </div>
    
                <div class="column-cont col-md-3 d-flex align-self-stretch">
                <div class="link"><a href="adventure.php">
                    <div class="block-6 services d-block text-center">
                        <div class="d-flex justify-content-center">
                            <div class="icon">
                                <span class="pic-icon"><img src="images/paragliding.png" height="80px"></span>
                            </div>
                        </div>
                        <div class="media-body p-2 mt-2">
                            <h3 class="heading mb-3">Adventure</h3>
                            <p class="ling">Seek the thrill for your life with paragliding, rafting, mountain climbing, bungy jumping and many more.</p>
                        </div>
                        </div></a>
                    </div>                    
                </div>
                <div class="column-cont col-md-3 d-flex align-self-stretch">
                <div class="link"><a href="food.php">
                    <div class="block-6 services d-block text-center">
                        <div class="d-flex justify-content-center">
                            <div class="icon">
                                <span class="pic-icon"><img src="images/food.png" height="80px"></span>
                            </div>
                        </div>
                        <div class="media-body p-2 mt-2">
                            <h3 class="heading mb-3">Food</h3>
                            <p class="ling">Find most unique food available in this country. Every corner might have a food you will love.</p>
                        </div>
                    </div></a>
                    </div>        
                </div>        
            
            </div>
        </section>
        
            <!--Carousel-->
            <div class="container">
                <div class="row justify-content-start mb-5 pb-3">
                    <div class="col-md-7 heading-section">
                        <br>
                        <h2 class="topd"><u>TOP Destinations</u></h2>
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
                <h2><u>TOP  Food and Cuisines </u></h2>
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

            <img src="./images/pic01-2.jpg" width="85%" height="1%" style="margin-left: 5%">

             <br>
                  
        <!-- Covid Section -->
        <!-- Covid Section -->
        <section id="#covid-sec">
            <div class="container Heading mt-4 mb-4" style="padding-top: 20px;">
                <h2>Covid Regulations</h2>
                <ul>
                   <li>COVID-19 vaccination certificate showing full does of vaccination with the last does taken at least 14 days prior to arriving in Nepal,</li>
                   <li>All foreigners arriving in Nepal must make COVID-19 test at the immigration point in Nepal. If one is found COVID-19 positive, s/he shall go to any isolation center or hospital designated by the Ministry of Health and Population.</li>
                   <li>Travelers without certificate of full doze vaccination are not eligible for visa-one-arrival. They must take visa from the Embassy to enter into Nepal.  Such persons require to go for 10 days of hotel quarantine in Kathmandu to the designated hotels</li>
                   <li>COVID-19 test report (RT-PCR, Gene Expert, True NAAT or WHO accredited test) showing negative result done within last 72 hours of boarding from the first airport or, if the traveler is entering through land boarder, taken within 72 hours of entry. This report will not required for the children below 5 years. </li>
                   <li>If any symptom of COVID-19 is found or suspected you must make COVID-19 test as soon as possible and remain in isolation if found positive. 
                       You must bear all the expenses of COVID-19 tests, hotel quarantine, hospitalization, remaining in isolation etc.</li> 
                    <li>The list of hotels to stay in quarantine can be found <a href="https://mofa.gov.np/wp-content/uploads/2021/06/Updated-hotel-quarantine-list-by-DOT-8june-1.pdf" target="_blank"><b>here</b></a>.</li>

               </ul>
            </div>
        </section>

        <img src="./images/pic01-2.jpg" width="85%" height="1%" style="margin-left: 5%">

        <br>
        <!--Map Section-->
        <section id="map">
                 <div class="Nmap" id="map">  
                        <script
                                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAdtcMGNEfENFFYXxSa2LrRixcxpnDksDY&callback=initMap&v=weekly"
                                 async>
                        </script>
                 </div>
             </section>  

<!-- About Section -->

     <section id="about-sec">
      <div class="about-header">
        <h5 class="heading">Developers!</h5>
        <h2 class="about-body">
          Computer Engineering Students of KCC <br/>
        </h2>
      </div>
      <div class="about-info">
        <div class="about-block">
          <img src="./images/lakpa-modified.png" alt="Lakpa" class="about-img" />
          <div class="about-info-div">
            <h3 class="about-info-header">Lakpa sherpa</h3>
          </div>
         </div>
        

        <div class="about-block">
          <img src="./images/Sachin-modified.png" alt="Sachin" class="about-img" />
          <div class="about-info-div">
            <h3 class="about-info-header">Sachin Shrestha</h3>
          </div>
        </div>
      

      <div class="about-block">
          <img src="./images/sagyan-modified.png" alt="Sagyan" class="about-img" />
          <div class="about-info-div">
            <h3 class="about-info-header">Sagyan Shrestha</h3>
          </div>
        </div>
    </div>
    </section>       
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
                       <a class="color" href="https://github.com/Lakpasherpa9/lakpa"><i class="fa fa-github" aria-hidden="true"></i></a>
                       <a class="color" href="https://sachinshrestha10@protonmail.com"><i class="fa fa-envelope" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="single-footer">
                    <h4>main menu</h4>
                    <ul>
                    <!-- #home-sec -->
                        <li><a href=" #navbar"> Home</a></li>
                        <li><a href="#about-sec"> About us</a></li>
                        <li><a href="#contact-sec"> Contact us</a></li>
                    </ul>
                </div>
                <div class="single-footer">
                    <h4>Helpful links</h4>
                    <ul>

                        <li><a href="">Supports</a></li>
                        
                    </ul>
                </div>
                <div class="single-footer">
                    <h4>contact us</h4>
                    
         <section id="contact-sec>
         <div class ="contact-container">
        <form action="./php/message.php" class="contact-form" id="contact" method="POST">
          <div class="contact-input-container">
            <input type="text" class="input" placeholder="Name" name="name"/>
          </div>

          <div class="contact-input-container">
            <input type="email" class="input" placeholder="Email" name="email"/>
          </div>

          <div class="contact-input-container">
            <input type="text" class="input" placeholder="Address" name="address" />
          </div>

          <div class="contact-input-container">
            <textarea
              class="msg-input"
              rows="4"
              placeholder="Your message"
                name="message"
            ></textarea>
          </div>
          <div class="btn-box">
            <button type="submit" name="send" form="contact">Send</button>
          </div>
        </form>
      </div>
            </div>
      </section>
                    
         </div>
            <div class="single-footer">
                <p class="copyright"> Made by <br><b> Sagyan Sachin Lakpa </b> </p>

            </div>
            
    </footer>
    

    </body>
</html>