<?php
@include 'config/header_h.php';

?>
<title>About Page- [ My Personal Portfolio Website ]</title>
</head>

<body>
    <div class="container-fluid">
        <!-- Header StarT here -->
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
                        <li><a href="index.php">HOME</a></li>
                        <li><a href="#" class="active">ABOUT</a></li>
                        <li><a href="index.php">SERVICES</a></li>
                        <li><a href="index.php"> PRICING</a>
                        </li>

                        <li><a href="portfolio.php">PORTFOLIO</a></li>
                        <li><a href="contact.php" class="contact-btn">CONTACT</a></li>
                        <li><a href="mailto:asmaulhosna.cse@gmail.com" class="hire-btn">Hire Me</a></li>
                    </ul>
                </div>
            </nav>

        </header>



        <!-- Main StarT here -->
        <main>
            <div id="banner">
                <img src="gallery/banner9.jpg" alt="Banner Image" class="img-fluid">

            </div>

            <!-- About Section here -->
            <section id="about">
                <!-- About Title  -->
                <div class="aboutTitle text-center">
                    <h2>ABOUT <span>ME</span></h2>
                    <div class="myBorder"></div>
                    <p> I am a professional web developer.
                        I specialize web development, and I have
                        experience working
                        with clients.
                        I always strive to improve my skills and knowledge to better serve my clients.
                    </p>
                </div>

                <!-- About Body -->
                <div class="aboutBody">
                    <div class="aboutBody-left">
                        <img src="gallery/about.jpg" alt="My Picture" class="img-fluid img-thumbnail aboutA-img">
                        <h3>Why You Choose Me?</h3>

                        <p> I'm a web developer. I've always been interested in technology and design,
                            and then I turn my passion into a career. Since then, I've honed my skills in HTML, CSS,
                            JavaScript,
                            and
                            other web technologies.
                            My goal is to create websites that are user-friendly and functional.
                            I'm always up for a challenge and love working with clients to bring their vision to
                            life.
                        </p>
                        <p> Thank you for visiting my portfolio website, and I look forward to hearing from you
                            soon!
                        </p>


                    </div>

                    <div class="aboutBody-right">

                        <!-- PersonalInfo Here -->
                        <ul class="personalInfo">

                            <li class="text-muted small">
                                <i class="fas fa-angle-right"></i>
                                <strong> E-mail : </strong>
                                <span>asma***@gmail.com</span>
                            </li>

                            <li class="text-muted small">
                                <i class="fas fa-angle-right"></i>
                                <strong> Phone : </strong>
                                <span>
                                    +88018xxxxx321</span>
                            </li>



                            <li class="text-muted small"> <i class="fas fa-angle-right "></i> <strong>City :
                                </strong>
                                <span> Chattogram, Bangladesh</span>
                            </li>
                        </ul>




                        <!-- Happy Clients here -->
                        <br> <br> <br>
                        <div class="row">
                            <div class="col-md-6 happy hh">
                                <div>
                                    <i class="fa-regular fa-face-smile" style="color:#FF3D00;"></i>
                                    <h5>250</h5>
                                    <h6>Happy Clients</h6>

                                </div>

                            </div>
                            <div class="col-md-6 happy pp">
                                <div>
                                    <i class="fa-solid fa-calendar-check " style="color:#ffb727;"></i>

                                    <h5>350+</h5>
                                    <h6>Project Completed</h6>

                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 happy yy">

                                <div> <i class="fa-solid fa-clock-rotate-left" style="color:#ffb727;"></i>

                                    <h5>4+</h5>
                                    <h6>Years of Experience</h6>

                                </div>

                            </div>

                        </div>
                    </div>


                </div>

            </section>

        </main>
        <!-- Main Ends here -->


        <!--=====================================
           Footer StarT here 
        ================================-->
        <?php
        @include 'config/footer.php';

        ?>
        <!--===================================
      Footer EnDs  here 
        ================================-->
    </div>
</body>

</html>