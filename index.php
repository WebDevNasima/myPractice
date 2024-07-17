<?php
@include 'config/header_h.php';

?>
<title>Asma Ul Hosna - [ My Personal Portfolio Website ]</title>
</head>

<body>
    <div class="container-fluid">

        <!--==================
           Header StarT here 
        ===================-->
        <header>
            <nav class="navbar navbar-expand-md position-sticky sticky-top" id="top">

                <!--  Logo here -->
                <figure><a href="#" class="navbar-brand"><img src="gallery/logo.png" alt="Logo" width="80px" class="logo"></a>
                </figure>


                <button type="button" class="navbar-toggler ml-auto" data-toggle="collapse" data-target="#myNavbar">
                    <i class="fas fa-bars"></i>
                </button>

                <div class="collapse navbar-collapse mt-5 mb-4 mb-md-0 mt-md-0" id="myNavbar">
                    <ul class="navbar-nav ml-auto text-center">
                        <li><a href="index.php" class="active">HOME</a></li>
                        <li><a href="about.php">ABOUT</a></li>
                        <li><a href="#services">SERVICES</a></li>

                        <li><a href="#pricing"> PRICING</a>
                        </li>

                        <li><a href="portfolio.php">PORTFOLIO</a></li>
                        <li><a href="contact.php" class="contact-btn">CONTACT</a></li>
                        <li><a href="mailto:asmaulhosna.cse@gmail.com" class="hire-btn">Hire Me</a></li>
                    </ul>
                </div>
            </nav>

            <!-- Banner here -->

            <section id="banner">
                <img src="gallery/banner0.jpg" alt="Banner Image">
            </section>

            <!-- myDetails here -->
            <section id="myDetails">
                <div class="myPic"><img src="gallery/user.jpg" alt="" class="rounded-circle img-fluid img-thumbnail">
                </div>
                <div class="myInfo">
                    <h1>ASMA UL HOSNA</h1>
                    <h4>Web Developer</h4>

                </div>
                <button type="button" class="login-btn-H"><a href="login_system/login_form.php"><i class="fas fas fa-user-alt"></i>Login</a></button>
            </section>

        </header>
        <!-- ============== 
    Header Ends here ======= -->




        <!--=======================
           Main StarT here 
        ==================-->
        <main>

            <!-- Blog Section Here -->
            <section id="blog">

                <img src="gallery/blog1.jpg">

                <img src="gallery/blog2.jpg" alt=" My Photo">

                <img src="gallery/blog3.jpg">

            </section>

            <!-- About Section here -->
            <section id="about" class="about">
                <div class="row row-H">
                    <div class="col-12 col-md-5">
                        <img src="gallery/about1.jpg" alt="My Picture" class="img-fluid aboutH-img">
                    </div>
                    <div class="col-12 col-md-7">
                        <h2 class="h2-H"><span></span> ABOUT <span class="color-text"> ME </span> <span></span>
                        </h2>

                        <h6>Web Developer</h6>
                        <h3>Why Choose Me?</h3>
                        <p> I am a professional web developer. I've always been interested in technology and design,
                            and then I turn my passion into a career. Since then, I've honed my skills in HTML, CSS,
                            JavaScript,
                            and
                            other web technologies.
                            My goal is to create websites that are user-friendly and functional.
                            I'm always up for a challenge and love working with clients to bring their vision to
                            life.</p>
                        <p> Thank you for visiting my portfolio website, and I look forward to hearing from you soon!
                        </p>
                        <a href="about.php" class="offer-btn about-btn">About More &rarr;</a>
                    </div>
                </div>
            </section>


            <!-- Services Section here-->
            <section id="services">
                <div class="servicesTitle">

                    <h2> <span></span> <span class="color-text">MY </span>&nbsp; SERVICES <span></span></h2>
                    <p class="service-p">I provide custom web development services to create modern, responsive, and
                        scalable websites that drive business growth and engage users.</p>
                </div>


                <div class="serviceBody row">


                    <!-- Service Section Left -->
                    <div class="service-left col-12 col-md-6">
                        <h3> <span></span> Web Development <span></span></h3>
                        <ul>
                            <li><i class="fas  fa-square-check mr-2"></i> Front-End Development</li>
                            <li> <i class="fas  fa-square-check mr-2"></i>PHP Development</li>
                            <li> <i class="fas  fa-square-check mr-2"></i>Custom Website Design</li>
                            <li> <i class="fas fa-square-check mr-2"></i>PSD to HTML</li>
                            <li> <i class="fas  fa-square-check mr-2"></i>Landing Page Design</li>
                            <li> <i class="fas  fa-square-check mr-2"></i>e-Commerce Website</li>
                            <li> <i class="fas  fa-square-check mr-2"></i>Landing Page Design</li>

                        </ul>
                    </div>

                    <!-- Service Section Right -->
                    <div class="service-right col-12 col-md-6">
                        <div class="serviceR-top">
                            <div class="skill-icons">
                                <img src="gallery/skills_icon/html.png" alt="HTML Logo" class="img-fluid" width="30px">
                                <img src="gallery/skills_icon/css.png" alt="CSS Logo" class="img-fluid" width="40px">
                                <img src="gallery/skills_icon/js.png" alt="JS Logo" class="img-fluid" width="40px">
                                <img src="gallery/skills_icon/bts.png" alt="Bootstraps Logo" class="img-fluid" width="40px">
                                <img src="gallery/skills_icon/react.png" alt="React Logo" class="img-fluid" width="30px">
                                <img src="gallery/skills_icon/jquery.png" alt="jQuery Logo" class="img-fluid" width="50px">
                                <img src="gallery/skills_icon/php.png" alt="PHP Logo" class="img-fluid" width="50px">


                            </div>
                        </div>
                        <div class="serviceR-bottom">
                            <ul class="nav nav-tabs">
                                <li class="nav-item"><a href="#clients" class="nav-link active" data-toggle="tab">
                                        Clients</a>


                                </li>
                                <li class="nav-item"><a href="#project" class="nav-link" data-toggle="tab">
                                        Project</a>

                                </li>
                                <li class="nav-item"><a href="#experience" class="nav-link" data-toggle="tab">Experience</a>

                                </li>
                            </ul>

                            <div class="tab-content">
                                <div id="clients" class="tab-pane active">
                                    <div class="circle">
                                        <i class="fa-regular fa-face-smile" style="color:#20b38e;"></i>
                                        <p class="amount-p">250+</p>
                                        <p class="text-p">Happy Clients</p>
                                    </div>
                                </div>
                                <div id="project" class="tab-pane fade">
                                    <div class="circle" style="border-color: #20b38e;">
                                        <i class="fa-solid fa-calendar-check " style="color:#ffb727;"></i>

                                        <p class="amount-p">350+</p>
                                        <p class="text-p">Complete Project</p>
                                    </div>
                                </div>
                                <div id="experience" class="tab-pane fade">
                                    <div class="circle" style="border-color: #ffb727;">
                                        <i class="fa-solid fa-clock-rotate-left" style="color:#008cb4;"></i>
                                        <p class="amount-p">4+</p>
                                        <p class="text-p">Years of Experience</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>

            <!-- Offer Section Here -->
            <section id="offer">
                <div class="offerL mb-md-5 ">
                    <a href="gallery/project_img/template.png" target="_blank"><img src="gallery/project_img/template.png" alt="Offer"></a>

                </div>

                <div class="offerR"> <br>
                    <i class="small">Premium Quality Web Template</i>
                    <br> <br>
                    <h3 class="mb-3">Free Template Download!</h3>

                    <p class="small text-muted">Download my free one-page website template and kickstart your
                        online
                        presence today. Simple,
                        elegant, and customizable. Get yours now!</p>
                    <br>

                    <a href="gallery/project_img/template.png" download class="offer-btn">Download Now &nbsp;&nbsp; <i class="fas fas fa-download"></i></a>
                    <br> <br>
                </div>
            </section>
            <!-- Pricing Section -->
            <section id="pricing">
                <div class="priceTitle">
                    <h2> <span></span> Best <span class="color-text"> Pricing </span> &nbsp; &nbsp; &nbsp; &nbsp;
                        <span></span>
                    </h2>
                </div>
                <div class="row">

                    <!-- Basic Package here-->
                    <div class="col-md-4 pricing-card d-block d-md-flex">

                        <div class="card">

                            <h5>Basic</h5>
                            <h2>$20 <span>/Month</span></h2>
                            <p>Basic website package at an affordable price.</p>
                            <ul>
                                <li><i class="fa-solid fa-square-check mr-2"></i> 1 Page</li>
                                <li><i class="fa-solid fa-square-check mr-2"></i> Source Code</li>
                                <li> <i class="fa-solid fa-square-check mr-2"></i> Unlimited Revesion</li>
                                <li><i class="fa-solid fa-square-check mr-2"></i> Responsive Design</li>


                            </ul>
                            <a href="mailto:asmaulhosna.cse@gmail.com">Choose Plan</a>
                        </div>
                    </div>
                    <!-- Premium Package here-->
                    <div class="col-md-4  pricing-card d-block d-md-flex ">
                        <div class="card card-2">
                            <h5>Premium</h5>
                            <h2>$100 <span>/Month</span></h2>
                            <p>Large website package with premium features.</p>
                            <ul>
                                <li><i class="fa-solid fa-square-check mr-2"></i> 5 Page</li>
                                <li><i class="fa-solid fa-square-check mr-2"></i> Source Code</li>
                                <li> <i class="fa-solid fa-square-check mr-2"></i> Unlimited Revesion</li>

                                <li><i class="fa-solid fa-square-check mr-2"></i> Responsive Design</li>
                            </ul>
                            <a href="mailto:asmaulhosna.cse@gmail.com">Choose Plan</a>
                        </div>
                    </div>
                    <!-- Standard Package here-->

                    <div class="col-md-4 pricing-card d-block d-md-flex ">
                        <div class="card">
                            <h5>Standard</h5>
                            <h2>$50 <span>/Month</span></h2>
                            <p>Medium website package with advanced features.</p>
                            <ul>
                                <li><i class="fa-solid fa-square-check mr-2"></i> 3 Page</li>
                                <li><i class="fa-solid fa-square-check mr-2"></i> Source Code</li>
                                <li> <i class="fa-solid fa-square-check mr-2"></i> Unlimited Revesion</li>
                                <li><i class="fa-solid fa-square-check mr-2"></i> Responsive Design</li>


                            </ul>
                            <a href="mailto:asmaulhosna.cse@gmail.com">Choose Plan</a>
                        </div>
                    </div>

                </div>

            </section>

            <!-- Location set with iframe here -->
            <section id="iframe">
                <iframe class="Location" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29593.871773515522!2d91.9517472!3d22.002344350000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30ad05ab888ea6bb%3A0xb74effa9d3a1a6ff!2sJaldi!5e0!3m2!1sen!2sbd!4v1656836375509!5m2!1sen!2sbd" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" width="100%" height="300px"></iframe>
            </section>
        </main>
        <!--======================
           Main EnDs here 
        ===================-->



        <!--===========
           Footer StarT here 
        ========-->
        <?php
        @include 'config/footer.php';

        ?>
        <!--========
      Footer EnDs  here 
        ================-->

    </div>

    <!-- JS-jQuery-Popper js V.4-->
    <script src=" https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- JS   V.5.2 Latest-->
    <script src="
https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"> </script>
</body>

</html>