<?php
    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server , $username ,  $password);

    if(!$con){
        die("connection to this database is failed due to" . mysqli_connect_error());
    }
    echo "Success connecting to the db";

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Code Arcade</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" media="screen and (max-width: 1350px)" href="css/phone.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Arvo&family=Kanit:wght@1000&display=swap');
    </style>

</head>

<body>
    <!--------------- HEADER START---------------->
    <div class="outer">
        <div class="subcontainer1">
            <p class="row-1">
                <a href="9837726806"><span class="fa fa-phone "></span> +919837726806</a>
                <a href="mail.google.com"><span class="fa fa-paper-plane "></span> codearcade.lavish@gmail.com</a>
            </p>
        </div>
        <div class="subcontainer2">
            <p class="row-2">
                <a href="#"><span class="fa fa-whatsapp "></span></a>
                <a href="#"><span class="fa fa-facebook "></span></a>
                <a href="#"><span class="fa fa-instagram "></span></a>
                <a href="#"><span class="fa fa-linkedin "></span></a>

            </p>
        </div>
    </div>
    <!--------------- HEADER END---------------->

    <!--------------- NAVBAR START ------------->
    <div class="navbar">
        <div class="logo">
            <img href="#" src="asset/logo.png" alt="This is an image">
        </div>


        <div class="tools">
            <a href="#HOME">HOME</a>
            <a href="service.html" target="_blank" class="serv">SERVICES</a>
            <a href="#why" class="scrollto">FEATURES</a>
            <a href="#aboutus" class="scrollto">ABOUT US</a>
        </div>

        <div class="contact">
            <a href="#contact" class="scrollto">Contact Us</a>
        </div>
    </div>
    <!--------------- NAVBAR END ------------->

    <!--------------- HERO SECTION STARTS ------------->
    <section>
        <div class="hero">
            <div class="hero_subcontainer">
                <h1>Get Powerful Software Solutions With Code Arcade</h1>
                <h2>We are team of talented Software Engineers</h2>
            </div>
        </div>
    </section>
    <!--------------- HERO SECTION ENDS ------------->

    <!--------------- ABOUT SECTION STARTS ------------->

    <section id="aboutus" class="about">
        <div class="about_us">
            <img src="/asset/about3.jpg" alt="">
        </div>
        <div class="content">
            <h3>ABOUT US</h3>
            <p class="fst-italic">
                Our company is on a mission to digitalised all the work from large MNCs to small businesses, brands,
                outlets, etc. We are here to contribute in the enhancement of technology. We provide all services
                related to website development, app development, SEO,SME,
                and all type of IT consulting.

            </p>
            <ul>
                <li><i class="bi bi-chevron-double-right"></i>Code Arcade is founded by a group of Engineers, to give
                    their
                    contribution in Digital India.</li>
                <li><i class="bi bi-chevron-double-right"></i> With a aim to push up all startups to next level in this
                    21st
                    century startups era.</li>
                <li><i class="bi bi-chevron-double-right"></i> We are an IT Solution which help businesses to grow and
                    provides software solutions with new marketing tactics to provide exponential growth to the
                    businesses.</li>
            </ul>

        </div>
    </section>
    <!--------------- ABOUT SECTION ENDS ------------->

    <!--------------- SERVICE SECTION STARTS ------------->
    <section>
        <div class="service">
            <div class="service_container1">
                <h2>Let's take a glance of our Services <span style="color: #ffc700;">!!</span></h2>
                <p>We always work to enhance our services to fulfill the satisfactory need of our customer and
                    continously upgrading our skills and methods to hit your valuable deadline.</p>
            </div>
            <div class="service_container2">
                <div class="iconbox">
                    <div class="icon">
                        <img src="asset/WEBD logo.png" alt="">
                    </div>
                    <div class="webD">
                        <a href="service.html">WEB DEVELOPMENT</a>
                    </div>
                </div>
                <div class="iconbox">
                    <div class="icon">
                        <img src="asset/APPD logo.png" alt="">
                    </div>
                    <div class="webD">
                        <a href="service.html">APP DEVELOPMENT</a>
                    </div>
                </div>
                <div class="iconbox">
                    <div class="icon">
                        <img src="asset/ss logo.png" alt="">
                    </div>
                    <div class="webD">
                        <a href="service.html">SOFTWARE SOLUTIONS</a>
                    </div>
                </div>
            </div>
            <div class="btn">
                <a href="service.html" target="_blank">KNOW MORE</a>
            </div>
    </section>
    <!--------------- SERVICE SECTION ENDS ------------->

    <!--------------- HERO2 SECTION STARTS ------------->
    <!-- 
    <div class="hero2">
        <div class="hero_subcontainer2">
            <h1> "Grow your business with Us"</h1>
        </div>
    </div> -->
    <!--------------- HERO2 SECTION ENDS ------------->

    <!--------------- WHY US SECTION STARTS ------------->

    <section id="why" class="whyus">
        <div class="feature">
            <img src="/asset/features.jpg" alt="">
        </div>
        <div class="content2">
            <h2>WHY US?</h2>
            <div class="features">
                <h4>Legal Documentation</h4>
                <p>A legal contract will be signed by the client and the company before starting any project.</p>
            </div>
            <div class="features">
                <h4>Premium Tools and Services</h4>
                <p>We use premium tools and services for the projects and provides at reasonable cost.</p>
            </div>
            <div class="features">
                <h4>Responsive Layout</h4>
                <p>We provide Responsive layouts of websites and App at zero cost.</p>
            </div>
            <div class="features">
                <h4>Security and Privacy</h4>
                <p>No any personal details of the client leaked from the side of company.</p>
            </div>
        </div>
        <!--------------- WHY US SECTION END ------------->

        <!--------------- CONTACT US SECTION STARTS ------------->

        <section id="contact" class="contactus">
            <div id="handles" class="contact2">
                <h3>CODE ARCADE</h3>
                <p>
                    <strong>Phone:</strong>+91 8700734343<br>
                    <strong>Email:</strong> codearcade.lavish@gmail.com<br>
                </p>

                <div class="subcontainer2 contact">
                    <p class="row-2">
                        <a href="#" style="border: none;"><span class="fa fa-whatsapp "></span></a>
                        <a href="#" style="border: none;"><span class="fa fa-facebook "></span></a>
                        <a href="#" style="border: none;"><span class="fa fa-instagram "></span></a>
                        <a href="#" style="border: none;"><span class="fa fa-linkedin "></span></a>
                    </p>
                </div>
            </div>
            <div id="usefullinks" class="contact2">
                <h4>Useful Links</h4>
                <ul>
                    <li><i class="bi bi-chevron-right"></i><a href="">Home</a></li>
                    <li><i class="bi bi-chevron-right"></i><a href="">Services</a></li>
                    <li><i class="bi bi-chevron-right"></i><a href="">About Us</a></li>
                    <li><i class="bi bi-chevron-right"></i><a href="">Contact Us</a></li>
                </ul>
            </div>
            <div id="ourservices" class="contact2">
                <h4>Services</h4>
                <ul>
                    <li><i class="bi bi-chevron-right"></i><a href="">Web Development</a></li>
                    <li><i class="bi bi-chevron-right"></i><a href="">App Development & Optimisation</a></li>
                    <li><i class="bi bi-chevron-right"></i><a href="">SEO</a></li>
                    <li><i class="bi bi-chevron-right"></i><a href="">Software Solutions</a></li>
                    <li><i class="bi bi-chevron-right"></i><a href="">E-Commerce Solutions</a></li>
                    <li><i class="bi bi-chevron-right"></i><a href="">IT Consulting</a></li>
                </ul>
            </div>

            <div id="connect" class="contact2">
                <h4>Connect With Us</h4>
                <p>Please Mention your Contact details</p>
                <form action="index.php" method="post">
                    <input type="name" name="name" placeholder="Name">
                    <input type="email" name="email" placeholder="E-mail">
                    <input type="text" name="service" placeholder="Services you need">
                    <input type="text" name="message" id="message" placeholder="Drop your message here">
                    <!-- <input type="submit" value="Submit" class="submit" target="_blank" > -->
                    <button class="submit">Submit</button>
                </form>
            </div>
        </section>
        <!--------------- CONTACT US SECTION ENDS ------------->


</body>

</html>