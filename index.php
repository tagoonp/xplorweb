<?php session_start(); ?>
<?php include "core/connect.php"; ?>
<?php include "core/componant.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title><?php echo $config_default['title']; ?></title>

    <!-- Favicon  -->
    <link rel="shortcut icon" href="img/core-img/favicon.ico">

    <!-- ************** All CSS Files ************** -->

    <!-- Style css -->
    <link rel="stylesheet" href="style.css">

    <!-- Responsive css -->
    <link rel="stylesheet" href="css/responsive.css">

    <!--[if IE]>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>

<body>
    <!-- preloader start -->
    <div id="preloader"></div>
    <!-- /.end preloader -->

    <!-- ***************** Header Start ***************** -->
    <header class="header_area">
        <!-- Search Box Area Start -->
        <div id="search">
            <div class="search_box_area">
                <form action="#" method="post">
                    <input type="text" name="s" id="search_box" placeholder="Type your keyword and hit enter">
                    <input type="submit" value="Submit" id="sub">
                </form>
            </div>
        </div>
        <!-- Search Box Area End -->

        <!-- Top Header Area Start -->
        <div class="top_header_area hidden-xs">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3 col-md-5">
                        <!--  Top Quote Area Start -->
                        <div class="top_quote hidden-sm">
                            <p>http://medipe2.psu.ac.th</p>
                        </div>
                    </div>
                    <div class="col-sm-9 col-md-7">
                        <div class="social_reg_log_area">
                            <!--  Top Social bar start -->
                            <div class="top_social_bar">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Header Area End -->

        <!-- Main Header Area Start -->
        <div class="main_header_area" id="sticky_menu">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3 col-xs-12">
                        <!-- Logo Area:: For better view in all device please use logo image max-width 120px -->
                        <div class="logo_area" >
                            <a href="index.html"><img src="img/medipe2-logo-2.png" alt="" style="height: 35px" ></a>
                        </div>
                    </div>

                    <div class="col-sm-9 col-xs-12">
                        <!-- Menu Area Start -->
                        <div class="main_menu_area">
                            <div class="mainmenu">
                                <nav>
                                    <ul id="nav">
                                        <li class="current_page_item"><a href="#">Home<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                            <ul class="sub-menu">
                                                <li><a href="index.html">Home-1</a></li>
                                                <li><a href="index-two.html">Home-2</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">pages<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                            <ul class="sub-menu">
                                                <li><a href="#">Home Pages<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                                    <ul class="sub-menu">
                                                        <li><a href="index.html">Home-1</a></li>
                                                        <li><a href="index-two.html">Home-2</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Other Pages<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                                    <ul class="sub-menu">
                                                        <li><a href="about-us.html">About Us</a></li>
                                                        <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                                        <li><a href="pricing-plan.html">Pricing Plan</a></li>
                                                        <li><a href="faq.html">FAQ</a></li>
                                                        <li><a href="login.html">Login</a></li>
                                                        <li><a href="register.html">register</a></li>
                                                        <li><a href="404.html">404 Not Found</a></li>
                                                        <li><a href="cooming-soon.html">Cooming Soon</a></li>
                                                        <li><a href="maintenence.html">Maintenence</a></li>
                                                        <li><a href="page.html">Blank Page</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Service Pages<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                                    <ul class="sub-menu">
                                                        <li><a href="service.html">All Service</a></li>
                                                        <li><a href="service-details-1.html">Investment Planning</a></li>
                                                        <li><a href="service-details-2.html">Financial Planning</a></li>
                                                        <li><a href="service-details-3.html">Educational Support</a></li>
                                                        <li><a href="service-details-4.html">Business Advisor</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Project Pages<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                                    <ul class="sub-menu">
                                                        <li><a href="gallery-fullwidth.html">Project Fullwidth</a></li>
                                                        <li><a href="gallery-4-column.html">Project 4 Column</a></li>
                                                        <li><a href="gallery-3-column.html">Project 3 Column</a></li>
                                                        <li><a href="gallery-2-column.html">Project 2 Column</a></li>
                                                        <li><a href="gallery-single.html">Project Details</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Shop Pages<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                                    <ul class="sub-menu">
                                                        <li><a href="shop-fullwidth.html">Shop Fullwidth</a></li>
                                                        <li><a href="single-product.html">Product Details</a></li>
                                                        <li><a href="cart.html">Cart page</a></li>
                                                        <li><a href="checkout.html">Checkout page</a></li>
                                                        <li><a href="invoice.html">Invoice page</a></li>
                                                        <li><a href="order-history.html">Order History</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Advisor Pages<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                                    <ul class="sub-menu">
                                                        <li><a href="advisors.html">Advisors</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Blog Pages<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                                    <ul class="sub-menu">
                                                        <li><a href="blog.html">Blog - 1</a></li>
                                                        <li><a href="blog-sidebar.html">Blog - 2</a></li>
                                                        <li><a href="single.html">Single Blog - 1</a></li>
                                                        <li><a href="single-sidebar.html">Single Blog - 2</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="contact.html">Contact Page<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                                    <ul class="sub-menu">
                                                        <li><a href="contact.html">Contact - 1</a></li>
                                                        <li><a href="contact-two.html">Contact - 2</a></li>
                                                        <li><a href="contact-three.html">Contact - 3</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Project<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                            <ul class="sub-menu">
                                                <li><a href="gallery-fullwidth.html">Project Fullwidth</a></li>
                                                <li><a href="gallery-4-column.html">Project 4 Column</a></li>
                                                <li><a href="gallery-3-column.html">Project 3 Column</a></li>
                                                <li><a href="gallery-2-column.html">Project 2 Column</a></li>
                                                <li><a href="gallery-single.html">Project Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Service<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                            <ul class="sub-menu">
                                                <li><a href="service.html">All Service</a></li>
                                                <li><a href="service-details-1.html">Investment Planning</a></li>
                                                <li><a href="service-details-2.html">Financial Planning</a></li>
                                                <li><a href="service-details-3.html">Educational Support</a></li>
                                                <li><a href="service-details-4.html">Business Advisor</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Shop<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                            <ul class="sub-menu">
                                                <li><a href="shop-fullwidth.html">Shop Fullwidth</a></li>
                                                <li><a href="single-product.html">Product Details</a></li>
                                                <li><a href="cart.html">Cart page</a></li>
                                                <li><a href="checkout.html">Checkout page</a></li>
                                                <li><a href="invoice.html">Invoice page</a></li>
                                                <li><a href="order-history.html">Order History</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">Contact<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                            <ul class="sub-menu">
                                                <li><a href="contact.html">Contact - 1</a></li>
                                                <li><a href="contact-two.html">Contact - 2</a></li>
                                                <li><a href="contact-three.html">Contact - 3</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <!-- Menu Area End -->
                            <!-- Search Button Icon -->
                            <div class="search_button hidden-xs">
                                <a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Header Area End -->
    </header>
    <!-- ***************** Header End ***************** -->

    <!-- ***************** Welcome Area Start ***************** -->
    <section class="welcome_area">
        <!-- slider area start -->
        <div class="slider-area educamp">
            <!-- slider -->
            <div class="edu-c edu-d edu-pre">
                <div id="edu-n-slider" class="slides">
                    <!-- Background Image 1 -->
                    <img src="img/bg-pattern/background-image-2.jpg" alt="" title="#slider-direction-1">
                    <!-- Background Image 2 -->
                    <img src="img/bg-pattern/background-image-2.jpg" alt="" title="#slider-direction-2">
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <!-- direction 1 -->
                            <div id="slider-direction-1" class="slider-direction">
                                <div class="slider-content text-left lft-pr d-table slider-1">
                                    <div class="title-container d-table-c title-compress">
                                        <h2 class="title1"><span>WE BUILD </span>YOUR FUTURE</h2>
                                        <h3 class="title2">We're all working together; that's the secret.</h3>
                                        <a class="btn btn-default" href="#" role="button">Get a Quote</a>
                                    </div>
                                </div>
                                <!-- layer 1 -->
                                <div class="layer-1">
                                    <img src="img/bg-pattern/layer-1.png" alt="">
                                </div>
                            </div>

                            <!-- direction 2 -->
                            <div id="slider-direction-2" class="slider-direction">
                                <div class="slider-content text-left d-table slider-2 lft-pr">
                                    <div class="title-container d-table-c">
                                        <h2 class="title1">CREATE, WORK <span>AND INSPIRE</span></h2>
                                        <h3 class="title2">If you don't drive your business, you will be driven out of business.</h3>
                                        <a class="btn btn-default" href="#" role="button">Learn More</a>
                                    </div>
                                </div>
                                <!-- layer 2 -->
                                <div class="layer-2">
                                    <img src="img/bg-pattern/layer-2.png" alt="">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- slider end -->
        </div>
        <!-- end slider -->
    </section>
    <div class="clearfix"></div>
    <!-- ************** Welcome Area End ************** -->

    <!-- ************** About Us Area Start ************** -->
    <div class="clearfix"></div>
    <section class="about_area home2 section_padding_100">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <!-- Section Heading Start -->
                    <div class="section_heading">
                        <h3>Epidemiology <span>Unit</span></h3>
                        <div class="color_border"></div>
                    </div>
                    <!-- Section Heading End -->
                    <!-- About Us Text Start -->
                    <div class="about_us_text">
                        <p>The Epidemiology Unit is located in the Faculty of Medicine, Prince of Songkla University and was established in 1986 by Professor Virasakdi Chongsuvivatwong, Head of Unit. Our unit is divided into 3 main sections: research, service and education. Research projects have been supported widely for national and international publications, including National Database Utilisation, Research and Development for Southern Health, Cesarean Section Project, Traveler’s Diarrhoea, Arsenic and Lead Project, R Software and Development Project, Dissemination of WHO Reproductive Health Library, Child Cohort Project, Drug abuse/HIV, Violence & Health, Reproductive Epidemiology and Maternal and Child Health. Candidates who are interested in research projects can receive partial funding towards their thesis. In addition to research projects and teaching programmes, our unit is also involved in research consultation, cross border projects, intra- and extramural short-course training, database service, cancer registry network, and dissemination of reproductive health library. These research projects will be integrated into our international MSc and PhD programme.</p>

                        <!-- About Us Button -->
                        <div class="about_us_button">
                            <a class="btn btn-default" href="#" role="button">Learn More</a>
                        </div>
                    </div>
                </div>
                <!-- About Us Chart Area -->
                <div class="col-xs-12 col-md-6 wow fadeInRight" data-wow-delay="0.4s">
                    <canvas id="myChart"></canvas>
                </div>
            </div>
            <!-- end./ row -->
        </div>
        <!-- end./ container -->

        <!-- ============================= Top Feature Area Start ================================== -->
        <div class="top_feature_area clearfix">

            <!-- Single Feature Area Start -->
            <div class="single_feature wow fadeInUp" data-wow-delay="0.2s">
                <div class="feature_img">
                    <img src="img/medipe2-who-cc-2.png" alt="">
                </div>
                <!-- Single Feature Image Area End -->
                <div class="feature_text" style="padding: 20px; height: 350px;">
                    <h5>WHO Collaborating Centre for Research and Training on Epidemiology</h5>
                    <p>WHO collaborating centres are institutions such as research institutes, parts of universities or academies, which are designated by the Director-General to carry out activities in support of the Organization’s programmes.</p>
                    <p style="padding-top: 20px;">- Read more -</p>
                </div>
                <!-- Single Feature Text Area End -->
            </div>

            <!-- Single Feature Area Start -->
            <div class="single_feature wow fadeInUp" data-wow-delay="0.4s">
                <div class="feature_img">
                    <img src="img/medipe2-r-logo.png" alt="">
                </div>
                <!-- Single Feature Image Area End -->
                <div class="feature_text" style="padding: 20px; height: 350px;">
                    <h5>Data Analysis using R Software</h5>
                    <p>Researchers in developing countries usually cannot afford purchasing propriety statistical software. Training from our programe equips them with the knowledge and skills to use R software in which we have contributed by developing the powerful and friendly epicalc package, used by epidemiologists and researchers worldwide.</p>
                    <p style="padding-top: 20px;">- Read more -</p>
                </div>
                <!-- Single Feature Text Area End -->
            </div>

            <!-- Single Feature Area Start -->
            <div class="single_feature wow fadeInUp" data-wow-delay="0.6s" style="background-color: #ac3882;">
                <div class="feature_img">
                    <img src="img/medipe2-epi-icon.png" alt="">
                </div>
                <!-- Single Feature Image Area End -->
                <div class="feature_text" style="padding: 20px; height: 350px;">
                    <h5>International programme in Epidemiology</h5>
                    <p>International programme is designed to provide a sound grounding in the principles and practices of research in the health sciences, with an emphasis on epidemiological applications.</p>
                    <p style="padding-top: 20px;">- Read more -</p>
                </div>
                <!-- Single Feature Text Area End -->
            </div>

            <!-- Single Feature Area Start -->
            <div class="single_feature wow fadeInUp" data-wow-delay="0.8s">
                <div class="feature_img">
                    <span class="icon-adjustments"></span>
                </div>
                <!-- Single Feature Image Area End -->
                <div class="feature_text" style="padding: 20px; height: 350px;">
                    <h5>Business Advisor</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                    <p style="padding-top: 20px;">- Read more -</p>
                </div>
                <!-- Single Feature Text Area End -->
            </div>

        </div>
        <!-- Single Feature Area End -->
    </section>
    <!-- ************** Awesome Feature Area End ************** -->



    <!-- ************** Blog Area Start ************** -->
    <section class="blog_area section_padding_100_50" style="padding-top: 80px;">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <!-- Section Heading Start -->
                    <div class="section_heading">
                        <h3>Latest <span>News</span></h3>
                        <div class="color_border"></div>
                    </div>
                    <!-- Section Heading End -->
                </div>
            </div>
            <div class="row">

                <!-- single latest news area start -->
                <div class="col-xs-12">
                    <div class="single_latest_news_area wow fadeInUp" data-wow-delay="0.2s">
                        <!-- single latest news thumb -->
                        <div class="single_latest_news_img_area">
                            <img src="img/news-img/blog-2.jpg" alt="">
                            <!-- single latest news published date -->
                        </div>
                        <div class="single_latest_news_text_area">
                            <!-- single latest news title -->
                            <div class="news_title">
                                <a href="single.html"><h4>We dream of a sustainable economy where SME is the core.</h4></a>
                            </div>
                            <div class="author_name_comments">
                                <div class="author">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                    <p>Jerin Ikbal</p>
                                </div>
                                <div class="comments">
                                    <i class="fa fa-comments" aria-hidden="true"></i>
                                    <p>12</p>
                                </div>
                            </div>
                            <!-- single latest news excerp -->
                            <div class="news_content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam ipsum totam quaerat nobis quam, deleniti ad, eveniet fuga molestiae, neque id nam rerum reprehenderit! Quasi facere quod dolor, ab nam dolores accusamus molestias eveniet et ipsum aperiam sunt at id, repellendus corrupti! Laborum, voluptatum odit error expedita doloremque pariatur! Odio.</p>
                            </div>
                            <div class="published_date">
                                <p class="date">01</p>
                                <p class="month">Aug</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- single latest news area start -->
                <div class="col-xs-12">
                    <div class="single_latest_news_area wow fadeInUp" data-wow-delay="0.4s">
                        <!-- single latest news thumb -->
                        <div class="single_latest_news_img_area">
                            <img src="img/news-img/blog.jpg" alt="">
                            <!-- single latest news published date -->
                        </div>
                        <div class="single_latest_news_text_area">
                            <!-- single latest news title -->
                            <div class="news_title">
                                <a href="single.html"><h4>We dream of a sustainable economy where SME is the core.</h4></a>
                            </div>
                            <div class="author_name_comments">
                                <div class="author">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                    <p>Jerin Ikbal</p>
                                </div>
                                <div class="comments">
                                    <i class="fa fa-comments" aria-hidden="true"></i>
                                    <p>12</p>
                                </div>
                            </div>
                            <!-- single latest news excerp -->
                            <div class="news_content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam ipsum totam quaerat nobis quam, deleniti ad, eveniet fuga molestiae, neque id nam rerum reprehenderit! Quasi facere quod dolor, ab nam dolores accusamus molestias eveniet et ipsum aperiam sunt at id, repellendus corrupti! Laborum, voluptatum odit error expedita doloremque pariatur! Odio.</p>
                            </div>
                            <div class="published_date">
                                <p class="date">01</p>
                                <p class="month">Aug</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- end. row -->
        </div>
        <!-- end. container -->
    </section>
    <!-- ************** Blog Area End ************** -->

    <!-- ************** Call to action Area Start ************** -->
    <div class="call_to_action section_padding_60">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <!-- call to action text -->
                    <div class="call_to wow fadeInUp" data-wow-delay="0.2s">
                        <h3>We provide the best service. <i class="fa fa-heart" aria-hidden="true"></i> our template.</h3>
                        <div class="call_to_action_button">
                            <div class="caption">
                                <p>Purchase Theme</p>
                            </div>
                            <a href="#">Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ************** Call to action Area End ************** -->

    <!-- ************** Partner Area Start ************** -->
    <div class="partner_area section_padding_60_30">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="partners_thumbs slide">
                        <!-- Single Partner Logo Area -->
                        <div class="single_partner_area">
                            <a href="">
                                <div class="single_partner_thumb">
                                    <img src="img/partners-img/1.png" alt="">
                                </div>
                            </a>
                        </div>
                        <!-- Single Partner Logo Area -->
                        <div class="single_partner_area">
                            <a href="">
                                <div class="single_partner_thumb">
                                    <img src="img/partners-img/2.png" alt="">
                                </div>
                            </a>
                        </div>
                        <!-- Single Partner Logo Area -->
                        <div class="single_partner_area">
                            <a href="">
                                <div class="single_partner_thumb">
                                    <img src="img/partners-img/3.png" alt="">
                                </div>
                            </a>
                        </div>
                        <!-- Single Partner Logo Area -->
                        <div class="single_partner_area">
                            <a href="">
                                <div class="single_partner_thumb">
                                    <img src="img/partners-img/4.png" alt="">
                                </div>
                            </a>
                        </div>
                        <!-- Single Partner Logo Area -->
                        <div class="single_partner_area">
                            <a href="">
                                <div class="single_partner_thumb">
                                    <img src="img/partners-img/5.png" alt="">
                                </div>
                            </a>
                        </div>
                        <!-- Single Partner Logo Area -->
                        <div class="single_partner_area">
                            <a href="">
                                <div class="single_partner_thumb">
                                    <img src="img/partners-img/6.png" alt="">
                                </div>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ************** Partner Area End ************** -->

    <!-- ************** Footer Area Start ************** -->
    <?php include "core/footer.php" ?>
    <!-- ************** Footer Area End ************** -->

    <!-- ************** All jQuery Plugins ************** -->

    <!-- jQuery (necessary for all JavaScript plugins) -->
    <script src="js/jquery-1.12.3.min.js"></script>

    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Nivoslider js -->
    <script src="js/jquery.nivoslider.js"></script>
    <script src="js/nivoslider-active.js"></script>

    <!-- Chart js -->
    <script src="js/Chart.bundle.js"></script>
    <script src="js/chart.active.js"></script>

    <!-- Owl-carousel js -->
    <script src="js/owl.carousel.min.js"></script>

    <!-- Ajax Contact js -->
    <script src="js/ajax-contact.js"></script>

    <!-- Coundown js -->
    <script src="js/coundown-timer.js"></script>

    <!-- Meanmenu js -->
    <script src="js/meanmenu.js"></script>

    <!-- Magnific Popup js -->
    <script src="js/jquery.magnific-popup.min.js"></script>

    <!-- Counterup and Waypoint js -->
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/counterup.min.js"></script>

    <!-- Back to top js -->
    <script src="js/jquery.scrollUp.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>

    <!-- Sticky js -->
    <script src="js/jquery.sticky.js"></script>

    <!-- Simple-lens js -->
    <script src="js/simple-lens.js"></script>

    <!-- WoW js -->
    <script src="js/wow.min.js"></script>

    <!-- Active js -->
    <script src="js/custom.js"></script>

</body>

</html>
