<?php
@include 'config/header_h.php';

?>
<title>Portfolio Page- [ My Personal Portfolio Website ]</title>
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
                        <li><a href="about.php">ABOUT</a></li>
                        <li><a href="index.php">SERVICES</a></li>
                        <li><a href="index.php"> PRICING</a>
                        </li>

                        <li><a href="#" class="active">PORTFOLIO</a></li>
                        <li><a href="contact.php" class="contact-btn">CONTACT</a></li>
                        <li><a href="mailto:asmaulhosna.cse@gmail.com" class="hire-btn">Hire Me</a></li>
                    </ul>
                </div>
            </nav>

        </header>



        <!-- Main StarT here -->
        <main>
            <div id="banner">
                <img src="gallery/banner4.jpg" alt="Banner Image" class="img-fluid">

            </div>


            <!-- Portfolio Section Here -->
            <section id="portfolio">
                <!-- Portfolio Title  -->
                <div class="portfolioTitle text-center">

                    <h2><span>My</span> Portfolio</h2>
                    <div class="myBorder"></div>

                    <h3>Check My Wonderful Works!</h3>
                    <p class="text-center">Explore my portfolio to see examples of my work. From web design to
                        development, I'm passionate about creating beautiful, functional websites.</p>
                </div>
                <!-- Portfolio Body -->
                <div class="portfolioBody">
                    <div class="box">
                        <div class="div-group">
                            <div class=" div div1">
                                <img src="gallery/project_img/template.png" alt="Portfolio Project" width="180px" height="120px">
                                <div class="menu">
                                    <a href="" class="fas fa-heart"></a>
                                    <a href="#" class="fas fas fa-link"></a>

                                </div>
                            </div>
                        </div>
                        <div class="div-group">
                            <div class=" div div2"><img src="gallery/project_img/project1.png" alt="Portfolio Project" width="180px" height="120px">
                                <div class="menu">
                                    <a href="" class="fas fa-heart"></a>
                                    <a href="#" class="fas fas fa-link"></a>

                                </div>

                            </div>

                        </div>

                        <div class="div-group">
                            <div class=" div div3"><img src="gallery/project_img/project2.png" alt="Portfolio Project" width="180px" height="120px">
                                <div class="menu">
                                    <a href="" class="fas fa-heart"></a>
                                    <a href="#" class="fas fas fa-link"></a>

                                </div>
                            </div>

                        </div>

                        <div class="div-group">
                            <div class=" div div4"><img src="gallery/project_img/temple.png" alt="Portfolio" width="180px" height="120px">
                                <div class="menu">
                                    <a href="" class="fas fa-heart"></a>
                                    <a href="" class="fas fas fa-link"></a>

                                </div>
                            </div>
                        </div>
                        <div class="div-group">
                            <div class=" div div5"><img src="gallery/project_img/project4.png" alt="Portfolio Project" width="180px" height="120px">
                                <div class="menu">
                                    <a href="" class="fas fa-heart"></a>
                                    <a href="#" class="fas fas fa-link"></a>

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