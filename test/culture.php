<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Culture</title>
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Caramel&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            body {
                background-image: none;
            }
            
            .navbar {
                height: 50px;
            }
            
            /*image collage*/

            #collage-container{
                width:700px;
                height:500px;
                margin: 30px auto;
                position: relative;
	
            }
            #collage-one,#collage-two,#collage-three,#collage-four,
            #collage-five,#collage-six,#collage-seven{
                
                padding:10px;
                background:#eee;
                border-radius:20px;
                -moz-border-radius:20px;
                -webkit-border-radius:20px;
                position:absolute;
            }
            #collage-one{
                width:200px;
                height:254px;
                z-index:1;
                top:30px;
                left:20px;
                transform:rotate(-20deg);
                -o-transform:rotate(-20deg);
                -moz-transform:rotate(-20deg);
                -webkit-transform:rotate(-20deg);
            }
            #collage-two{
                width:200px;
                height:254px;
                z-index:2;
                top:200px;
                right:150px;
                transform:rotate(-30deg);
                -o-transform:rotate(-30deg);
                -moz-transform:rotate(-30deg);
                -webkit-transform:rotate(-30deg);
            }
            #collage-three{
                width:400px;
                height:324px;
                z-index:3;
                top:20px;
                left:150px;
                transform:rotate(20deg);
                -o-transform:rotate(20deg);
                -moz-transform:rotate(20deg);
                -webkit-transform:rotate(20deg);
            }
            #collage-four{
                width:300px;
                height:274px;
                z-index:4;
                top:200px;
                left:100px;
                transform:rotate(0deg);
                -o-transform:rotate(0deg);
                -moz-transform:rotate(0deg);
                -webkit-transform:rotate(0deg);
            }

            .container{
                font-size: 18px;
                padding-top: 20px; 
                padding-right: 220px;
            }

        </style>
    </head>
    
    <body> 

        <!--header-->
        
        <nav class="navbar navbar-expand-sm  bg-success navbar-dark">
            <a href="index.php" class="navbar-brand">
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
                        <a href="index.php" class="nav-link">ABOUT</a>
                    </li>
                    <li class="nav-item">
                        <a href="index.php" class="nav-link">BLOG</a>
                    </li>
                    <li class="nav-item">
                        <a href="./php/login.php" class="nav-link">CONTACT</a>
                    </li>
                </ul>
            </div> 
            <a class="cta" href="php/login.php"><button class="button1">Log In</button></a>  
        </nav> 
        
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <!--image-collage-->
        
        <div id="collage-container">
            <img src="images/dhime.jpg" id="collage-one" />
            <img src="images/magar lipi.png" id="collage-two" />
            <img src="images/gaijatra.jpg" id="collage-three" />
            <img src="images/krishna mandir.jpg" id="collage-four" />

            
        </div>
        
        <!--main content-->

        <div class="container mt-14 mb-20">

            <h5>Nepal is multiculture and multiethnic country. People of different ethnic group have inhabited different parts of country and have their own culture, language and tradition. Though majority of people speak Nepali other languages like Maithali, Newari, Rai, Gurung, Tamang, Magar, Sherpa, etc are also spoken within communities. Nepal is also secular country and people of different faith reside here, hindu is most prevalant religion with buddism very popular as well. </h5>    
            <br>
            <div class="mt-1  pb-5 ">
                <h2>Religion</h2>
                <p>There are 81 Hindus in the population. Buddhists – Theravada and Tantric – are the second largest group (10.2%). Tibetan refugees or ethnically Tibetan Buddhists are the majority of Nepali Buddhist practicing monks. The Muslim population is 4% and Kirant is 1.4%. The percentage of Christians (4%). In addition, there are other groups that make up the rest of the population (9%)</p>
            </div>

            <div>
                <figure>
                    <img src="images/dashain.jpg" class="rounded d-block w-100">
                    <figcaption style="font-size:14px;">Dashain is the biggest festival celebrated in Nepal.</figcaption>
            </div>

            <div class="mt-4  pb-5 ">
                <h2>Festivals</h2>
                <p>In Nepal there are many festivals that are celebrated by people all over the country. Dashain is the largest festival of the country that is celebrated by most of people specially hindus. But with many ethnic variety other festivals like Lhosar, Maghe Sankranti, Buddha Jayanti, Eid and in recent years Christmas has become more prevelant as well.</p>
            </div>

            <div>
                <figure>
                    <img src="images/ran lipi.png" class="rounded d-block w-100">
                    <figcaption style="font-size:14px;">Ranjana Script is one of native scripts used in Nepal.</figcaption>
            </div>

            <div class="mt-4  pb-5 ">
                <h2>Language</h2>
                <p>There are more than 100 language that are spoken in the country. Nepali is spoken by more than 44% of the population of the country. Other languages are Maithili, Tamang, Magar, Gurung, Sherpa, Newari, Rai and many more. English language is also spoken by most of younger people and also in locations where tourism is very popular business.</p>
            </div>

            <div>
                <figure>
                    <img src="images/music.jpg" class="rounded d-block w-100">
                    <figcaption style="font-size:14px;">Different traditional musical instruments of Nepal.</figcaption>
            </div>

            <div class="mt-4  pb-5 ">
                <h2>Music</h2>
                <p>Music has been vital part of country for very long time but every locality has its own style of music distinct from each other. Musical instruments like madal, sarangi, dhime, sanai, tabala, flute, etc have been used in traditional music in the country. Also with newer style of pop and rock music being widely present including foreign language songs that have become very popular</p>
            </div>

            <div>
                <figure>
                    <img src="images/mandala.jfif" class="rounded d-block w-100">
                    <figcaption style="font-size:14px;">Traditional "mandala" painting in Nepal.</figcaption>
            </div>

            <div class="mt-4  pb-5 ">
                <h2>Art and Literature</h2>
                <p>Art and sculpture is found around the country. Traditionally Kathmandu valley had arts like Saubha, Mandala paintings. Also sculpture of many deities and many important personalities fromm history can be found around the country.</p>
                <p>Literature of Nepali language though considered to have begun in 19th century by Bhanubhakta Acharya, literature in other languages has existed for more than half millenia. Many works of fiction has been found dating to 14th century.</p>
            </div>

            <div>
                <figure>
                    <img src="images/nyatapola.jpg" class="rounded d-block w-100">
                    <figcaption style="font-size:14px;">One of iconic architectural building in Bhaktapur of Nepal.</figcaption>
            </div>

            <div class="mt-4  pb-5 ">
                <h2>Architecture</h2>
                <p>Capital city of Nepal, Kathmandu and the Kathmandu valley is well known for the iconic architecture. Kathmandu Durbar Square, Kasthamandap, Nyatapola, Krishna Mandir, Changu Narayan and many other temples can be found as medieval architecture and other newer style of buildings like Singha Durbar, Nirmal Niwas, Naraynhiti palace are also found in amalgamation of tradition style and western design.</p>
            </div>
                
        </div>

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
                        <li><a href="#home-sec"><i class="fas fa-angle-right"></i> Home</a></li>
                        <li><a href="#about-sec"><i class="fas fa-angle-right"></i> About us</a></li>
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

                 
                    
                </div>
                <div class="single-footer ">
                <p class="copyright "> Made by <br><b> Sagyan Sachin Lakpa </b> </p>


                </div>
            
    </footer>

</body>
</html>