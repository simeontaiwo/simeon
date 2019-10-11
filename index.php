<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Simeon ||website</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Google fonts - Roboto + Roboto Slab-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700%7CRoboto:400,700,300">
    <!-- owl carousel-->
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.css">
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.css">
    <!-- animate.css-->
    <link rel="stylesheet" href="vendor/animate.css/animate.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Leaflet CSS - For the map-->

    <!-- Favicon-->
    <link rel="shortcut icon" href="images/favicon.png">
    <!-- Tweaks for older IEs-->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>

<body>
    <!-- Reference item-->
    <!-- navbar-->
    <header class="header">
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container">
                <a href="#intro" class="navbar-brand scrollTo">SIMEON TAIWO.</a>
                <button type="button" data-toggle="collapse" data-target="#navbarcollapse"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"
                    class="navbar-toggler navbar-toggler-right">
                    <span class="fa fa-bars"></span></button>
                <div id="navbarcollapse" class="collapse navbar-collapse">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a href="#intro" class="nav-link link-scroll">Intro</a></li>
                        <li class="nav-item"><a href="#about" class="nav-link link-scroll">About</a></li>
                        <li class="nav-item"><a href="#services" class="nav-link link-scroll">Services</a></li>

                        <li class="nav-item"><a href="#references" class="nav-link link-scroll">My Portfolio</a></li>
                        <li class="nav-item"><a href="#contact" class="nav-link link-scroll">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- Intro Image-->

    <section id="intro" style="background: url(images/home.jpg) center center no-repeat; background-size: cover;"
        class="intro-section pb-2">
        <div class="container text-center">
            <div data-animate="fadeInDown" class="logo"><img src="images/logo-big.png" alt="logo" width="130"></div>
            <h1 data-animate="fadeInDown" class="text-shadow mb-5">Hello, SIMEON!</h1>
            <p data-animate="slideInUp" class="h3 text-shadow text-400 intro-subtitle"><span class="text-slider-items"></p>
        </div>
    </section>
    <!-- About-->
    <section id="about" class="about-mf sect-pt4 route">
        <div class="container">
        <?php
            $connection = mysqli_connect('localhost', 'root', '');
            if(!$connection){
                die("Database Connection Failed" . mysqli_error($connection));
            }
            $selectdb = mysqli_select_db($connection, 'simeon');
            if(!$selectdb){
                die("Database Selection Failed" . mysqli_error($connection));
            }else{

                if($_POST){
                    $name = $_POST['name'];
                    $surname = $_POST['surname'];
                    $email = $_POST['email'];
                    $phone = $_POST['phone'];
                    $message = $_POST['message'];

                    //Insert Query of SQL
                    $query = mysqli_query($connection, "insert into contact(firstName, lastName, email, phone_number, message) values ('$name','$surname', '$email', '$phone', '$message')");

                    if($query){
                        //echo "<span>Data Inserted successfully...!!</span>";
                    }
                }

                
            }

        ?>
            <div class="row">
                <div class="col-sm-12">
                    <div class="box-shadow-full">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-sm-6 col-md-5">
                                        <div class="about-img">
                                            <img src="./images/simeon T.jpg" class="img-fluid rounded b-shadow-a"
                                                alt="">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-7">
                                        <div class="about-info">
                                            <p><span class="title-s">Name: </span> <span>SIMEON TAIWO.</span></p>
                                            <p><span class="title-s">Profile: </span> <span>Software Developer</span>
                                            </p>
                                            <p><span class="title-s">Email: </span> <span>
                                                    <SIMEON class=" simeon.taiwo@outlook.com"></SIMEON>
                                                    simeon.taiwo@outlook.com
                                                </span></p>
                                            <p><span class="title-s">Phone: </span> <span>(+234) 8065057205</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="skill-mf">
                                    <p class="title-s">Skill</p>
                                    <span>HTML</span> <span class="pull-right">95%</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 85%;"
                                            aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span>CSS3</span> <span class="pull-right">91%</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 75%"
                                            aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span>BOOTSTRAP</span> <span class="pull-right">95%</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 90%"
                                            aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span>JAVASCRIPT</span> <span class="pull-right">80%</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 50%"
                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="about-me pt-4 pt-md-0">
                                    <div class="title-box-2">
                                        <h5 class="title-left">
                                            About me
                                        </h5>
                                    </div>
                                    <p class="lead">
                                        I'm an innovative software Developer with 4 years of experience managing all
                                        aspects of the development process for small to medium-sized companies.My last
                                        job was at Haptics, where I was in charge of the Google Digital marketing team.
                                        We
                                        designed customer attraction and retention plans beginning from the market
                                        research stage. Our 2017 goal was a 2% revenue increase over 2016 and we got
                                        3%.
                                    </p>
                                    <p class="lead">
                                        My Desire For Software Development Has Been My Driving Force Over The Last
                                        4-years. I Started From Web Development using WordPress and PHP.

                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Service-->
    <section id="services" class="bg-gradient services-section">
        <div class="container">
            <header class="text-center">
                <h2 data-animate="fadeInDown" class="title">Services</h2>
            </header>
            <div class="row services text-center">
                <div data-animate="fadeInUp" class="col-lg-4">
                    <div class="icon"><i class="ion-paintbrush"></i></div>
                    <h2 class="s-title">Graphiic Design</h2>
                    <p class="s-description text-center">
                        A single picture can capture a million words, I believe I can help you express your mixed
                        feelings in a single picture, I create web graphics and 3D animations for advertisement and
                        other purposes.
                    </p>
                </div>
                <div data-animate="fadeInUp" class="col-lg-4">
                    <div class="icon"><i class="ion-android-phone-portrait"></i></div>
                    <h2 class="s-title">App Development</h2>
                    <p class="s-description text-center">
                        With the rise in mobile phone, comes the urgent need for every organization to have a mobile app
                        for customers to communicate and also access their resources.
                    </p>
                </div>
                <div data-animate="fadeInUp" class="col-lg-4">
                    <div class="icon"><i class="ion-monitor "></i></div>
                    <h2 class="s-title">Web Design</h2>
                    <p class="s-description text-center">
                        My Love for a beautiful and an easy-to-navigate website, my goal is always to deliever an
                        optimized and dynamic website for you, My work is listed below, let me know what you think :)
                    </p>
                </div>
            </div>
            <hr data-animate="fadeInUp">

        </div>
    </section>
    <!-- Testimonials-->

    <!-- Statistics-->
    <section id="statistics" data-dir="up" style="background: url(&quot;images/parallax.jpg&quot;);"
        class="statistics-section text-white parallax parallax">
        <div class="container">
            <div class="row showcase text-center">
                <div data-animate="fadeInUp" class="col-lg-3 col-md-6">
                    <div class="item">
                        <div class="icon"><i class="fa fa-align-justify"></i></div>
                        <h5 class="text-400 mt-4 text-uppercase"><span class="counter">03</span><br>Websites</h5>
                    </div>
                </div>
                <div data-animate="fadeInUp" class="col-lg-3 col-md-6">
                    <div class="item">
                        <div class="icon"><i class="fa fa-users"></i></div>
                        <h5 class="text-400 mt-4 text-uppercase"><span class="counter">06</span><br>Satisfied Clients
                        </h5>
                    </div>
                </div>
                <div data-animate="fadeInUp" class="col-lg-3 col-md-6">
                    <div class="item">
                        <div class="icon"><i class="fa fa-copy"></i></div>
                        <h5 class="text-400 mt-4 text-uppercase"><span class="counter">03</span><br>Projects</h5>
                    </div>
                </div>
                <div data-animate="fadeInUp" class="col-lg-3 col-md-6">
                    <div class="item">
                        <div class="icon"><i class="fa fa-font"></i></div>
                        <h5 class="text-400 mt-4 text-uppercase"><span class="counter">12</span><br>Magazines and
                            Brochures</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="dark-mask"></div>
    </section>
    <!--
    *** REFERENCES IMAGE ***
    _________________________________________________________
    -->
    <section id="references">
        <div class="container">
            <div class="col-sm-12">
                <div class="mb-5 text-center">
                    <h2 data-animate="fadeInUp" class="title">My work</h2>
                    <p data-animate="fadeInUp" class="lead">I have worked on few of projects so I have picked only the
                        latest for you.</p>
                </div>
                <ul id="filter" data-animate="fadeInUp">
                    <li class="active"><a href="#" data-filter="all">All</a></li>
                    <li><a href="#" data-filter="webdesign">Webdesign</a></li>
                    <li><a href="#" data-filter="seo">SEO</a></li>
                    <li><a href="#" data-filter="marketing">Marketing</a></li>
                </ul>
                <div id="detail">
                    <div class="row">
                        <div class="col-lg-10 mx-auto"><span class="close">×</span>
                            <div id="detail-slider" class="owl-carousel owl-theme"></div>
                            <div class="text-center">
                                <h1 id="detail-title" class="title"></h1>
                            </div>
                            <div id="detail-content"></div>
                        </div>
                    </div>
                </div>
                <!-- Reference detail-->
                <div id="references-masonry" data-animate="fadeInUp">
                    <div class="row">
                        <div data-category="webdesign" class="reference-item col-lg-3 col-md-6">
                            <div class="reference">
                                <a href="#"><img src="images/portfolio-1.jpg" alt="" class="images-fluid">
                                    <div class="overlay">
                                        <div class="inner">
                                            <h3 class="h4 reference-title">PHILESTY CLEANING</h3>
                                            <p> </p>
                                        </div>
                                    </div>
                                </a>
                                <div data-images="images/main-slider1.jpg,images/main-slider2.jpg,images/main-slider3.jpg"
                                    class="sr-only reference-description">
                                    <p>You want to have a completely clean house, but it’s just too difficult to fit it in your hectic schedule. 
                                        That’s where PHILESTY CLEANING team comes in. Let our friendly, dependable professionals take care of your cleaning needs from top to bottom.
                                         PHILESTY CLEANING can custom design a cleaning solution to meet your needs.
                                         Let the PHILESTY CLEANING team give you back your precious time!</p>

                                    <p class="buttons text-center"><a href="javascript:void(0);"
                                            class="btn btn-outline-primary"><i class="fa fa-globe"></i>http://philesty.loluconcept.com.ng
                                            </a><a href="javascript:void(0);" class="btn btn-outline-primary"><i
                                                class="fa fa-download"></i> Download case study</a></p>
                                </div>
                            </div>
                        </div>
                        <div data-category="seo" class="reference-item col-lg-3 col-md-6">
                            <div class="reference">
                                <a href="#"><img src="images/portfolio-2.jpg" alt="" class="images-fluid">
                                    <div class="overlay">
                                        <div class="inner">
                                            <h3 class="h4 reference-title">OMOLOLU CONCEPT</h3>
                                           
                                        </div>
                                    </div>
                                </a>
                                <div data-images="images/main-slider3.jpg,images/main-slider1.jpg"
                                    class="sr-only reference-description">
                                    <p> Omololu concept is a Training and Technology Solutions Organization with the mission to Develop People and harness technology to accelerate the growth of Africa. 
                                        We help people on their path to discovery by training them on how to create and innovate using technology as a medium with the intention of developing a new generation of Entrepreneurs,
                                         Professionals and sustainable businesses that would write the next African story.</p>

                                    <p class="buttons text-center"><a href="javascript:void(0);"
                     class="btn btn-outline-primary"><i class="fa fa-globe"></i> http://loluconcept.com.ng/</a><a href="javascript:void(0);" class="btn btn-outline-primary"><i
                                                class="fa fa-download"></i> Download case study</a></p>
                                </div>
                            </div>
                        </div>
                        <div data-category="marketing" class="reference-item col-lg-3 col-md-6">
                            <div class="reference">
                                <a href="#"><img src="images/portfolio-3.jpg" alt="" class="images-fluid">
                                    <div class="overlay">
                                        <div class="inner">
                                            <h3 class="h4 reference-title">Google Digital Skill</h3>
                                            <p></p>
                                        </div>
                                    </div>
                                </a>
                                <div data-images="images/main-slider1.jpg,images/main-slider2.jpg,images/main-slider3.jpg"
                                    class="sr-only reference-description">
                                    <p>We offer Free & Paid training programs for Job seekers,  Graduates,
                                         & Career uppers/switchers looking to either acquire a new skill in technology or up their existing skill set. 
                                        We work in partnership with Global & local technical & academic partners to develop world class training curriculum and programs.
                                        We currently have training programs for Digital Marketing, Design and Software Development.
                                         Our goal is for at-least 80% of our academy graduates to get a job or go on to successfully start their own businesses.
                                        Are you Interested in improving your technical skills? Sign up to be a part of our first cohort in January 2018..</p>
                                    <p class="buttons text-center"><a href="javascript:void(0);"
                                            class="btn btn-outline-primary"><i class="fa fa-globe"></i>https://www.haptics.ng
                                                </a><a href="javascript:void(0);" class="btn btn-outline-primary"><i
                                                class="fa fa-download"></i> Download case study</a></p>
                                </div>
                            </div>
                        </div>
                        <div data-category="marketing" class="reference-item col-lg-3 col-md-6">
                            <div class="reference">
                                <a href="#"><img src="images/portfolio-4.jpg" alt="" class="images-fluid">
                                    <div class="overlay">
                                        <div class="inner">
                                            <h3 class="h4 reference-title">Project name</h3>
                                            <p> </p>
                                        </div>
                                    </div>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Customers-->

    <!-- Contact-->
    <section id="contact" data-animate="bounceIn" class="contact-section contact">
        <div class="container">
            <header class="text-center">
                <h2 class="title">Contact</h2>
            </header>
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <form id="contact-form" method="post" action="">
                        <div class="messages"></div>
                        <div class="controls">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" name="name" placeholder="FirstName *" required="required"
                                        class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="surname" placeholder="LastName *" required="required"
                                        class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="email" placeholder="Email *" required="required"
                                        class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="phone" placeholder="Phone_Number" class="form-control">
                                </div>
                                <div class="col-md-12">
                                    <textarea name="message" placeholder="Message *" rows="4" required="required"
                                        class="form-control"></textarea>
                                </div>
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-outline-primary">Send</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    
    <footer class="main-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-lg-left">
                    <p class="social">
                        <a href="https://www.facebook.com/simeon501"
                            class="external facebook wow fadeInUp"><i class="fa fa-facebook"></i></a>
                        <a href="https://www.instagram.com/simeonomololu/" data-wow-delay="0.2s"
                            class="external instagram wow fadeInUp"><i class="fa fa-instagram"></i></a>
                        <a href="https://twitter.com/SimeonTaiwo3"><span class="twitter wow fadeInUp"><i
                                    class="fa fa-twitter"></i></span></a>
                    </p>
                </div>

                <div class="col-md-6 text-center text-lg-right mt-4 mt-lg-0">
                    <p>© 2019 OMOLOLU CONCEPT All rights reserved.</p>
                    <p>Designed by Simeon Taiwo using </p> <a href="https://bootstrapmade.com/"></a>
                </div>
                <div class="col-12 mt-4">


                </div>
            </div>
        </div>
    </footer>
    <!-- JavaScript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js">
    </script>
    <script src="vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="vendor/waypoints/lib/jquery.waypoints.min.js"></script>
    <script src="vendor/jquery.counterup/jquery.counterup.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.4.0/leaflet.js">
    </script>
    <script src="js/front.js"></script>
</body>

</html>