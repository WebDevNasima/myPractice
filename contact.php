 <?php
    include_once 'config/database.php';

    $db = new Database();


    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        if (empty($message)) {
            echo "<script> alert('Message area is empty!');</script>";
        } else {
            $sql = "INSERT INTO contact_form ( name, email, message) VALUES ('$name', '$email', '$message')";


            $result = $db->insert($sql);

            if ($result) {
                echo "<script> 
    alert('Message Send Successfully!');
    window.location.href='contact.php';
    </script>";
            } else {
                echo "<script> alert('Message not Send!');</script>";
            }
        }
    }


    ?>


 <?php
    @include 'config/header_h.php';

    ?>

 <title>Contact Page- [ My Personal Portfolio Website ]</title>

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

                         <li><a href="portfolio.php">PORTFOLIO</a></li>
                         <li><a href="#" class="contact-btn active">CONTACT</a></li>
                         <li><a href="mailto:asmaulhosna.cse@gmail.com" class="hire-btn">Hire Me</a></li>
                     </ul>
                 </div>
             </nav>

         </header>



         <!-- Main StarT here -->
         <main>
             <div id="banner">
                 <img src="gallery/contact.jpg" alt="Banner Image" class="img-fluid">

             </div>

             <!-- Contact Section Here -->
             <section id="contact">
                 <!-- Contact Title  -->
                 <div class="contactTitle text-center ">
                     <h5>CONTACT</h5> <br>
                     <h3>Get In Touch With Me</h3>
                     <p>Got a project in mind or just want to say hi? Feel free to drop me a line using the contact form
                         below, or connect with me on social media!
                     </p>
                 </div>
                 <!-- Contact Form -->


                 <div class="contact-form row">


                     <div class="col-md-7 col-12 pb-5 contactL">
                         <h3 class="text-white">Get In Touch</h3>
                         <!-- form -->
                         <form method="POST">
                             <div class="form-group">
                                 <input type="text" name="name" id="name" placeholder="your name" required>
                             </div>


                             <div class="form-group">
                                 <input type="email" name="email" placeholder="your email" id="email" required>
                             </div>

                             <textarea name="message" id="message" placeholder="write message"></textarea>

                             <input type="submit" class="send-btn" name="submit" value="Send Message"></input>
                         </form>
                     </div>
                     <div class="col-md-5 col-12 contactR">
                         <div class="media">
                             <i class=" fas fa-location-arrow  align-self-center"></i>

                             <div class="media-body ml-3">
                                 <h5>Location</h5>
                                 <p>VIP Road,
                                     Potengha, <br>Chattogram,
                                     Bangladesh</p>
                             </div>
                         </div>
                         <div class="media">
                             <i class=" fas fa-phone align-self-center"></i>

                             <div class="media-body ml-3">
                                 <h5>Phone</h5>
                                 <p>+88018xxxxx321</p>

                             </div>
                         </div>
                         <div class="media">
                             <i class=" fab fa-facebook-f align-self-center"></i>

                             <div class="media-body ml-3">
                                 <h5>Facebook</h5>
                                 <p><a href="https://web.facebook.com/asmaulhosna.cse" target="_blank" class="myFacebook">Asma Ul
                                         Hosna</a></p>
                             </div>
                         </div>


                         <div class="media">
                             <i class="fas  fa-mail-bulk align-self-center"></i>

                             <div class="media-body ml-3">
                                 <h5>E-mail Address</h5>
                                 <p><a href="mailto:asmaulhosna.cse@gmail.com" class="myEmail">asma***@gmail.com</a></p>
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
     <!-- JS-jQuery-Popper js V.4-->
     <script src=" https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
     <!-- JS   V.5.2 Latest-->
     <script src="
https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"> </script>
 </body>

 </html>