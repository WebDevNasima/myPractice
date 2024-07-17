<?php

session_start();
session_destroy();

include_once '../config/database.php';

$db = new Database();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

   $email = $_POST['email'];
   $password = $_POST['password'];



   $query = " SELECT * FROM admin_form WHERE email = '$email' &&  password = '$password'";

   $result = $db->select($query);



   if ($result) {

      while ($row = mysqli_fetch_assoc($result)) {


         session_start();
         $_SESSION['name'] = "admin";
         $_SESSION['id'] = $row['id'];

         header("location:../admin_panel/admin_panel.php");
      }
   } else {
      echo "<script> alert('Incorrect password or email') </script>";
   }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description" content="">
   <meta name="keywords" content="">
   <meta name=" author" content="Asma Ul Hosna">
   <title>Log In Page - [ My Personal Portfolio Website ]</title>
   <!-- Favicon Link -->
   <link rel="icon" href="../gallery/logo.png" />
   <!-- Google Fonts -->
   <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Satisfy" rel="stylesheet">
   <!-- Font Awesome -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />

   <!-- Bootstraps 4 CDN -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
   <!-- Bootstraps 5 CDN -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">

   <!-- Custom CSS Link -->

   <link rel="stylesheet" href="../css/admin.css">

</head>

<body>

   <div class="container-fluid">

      <div id="logIn-page">
         <section id="logIn">
            <div class="loginTitle">
               <img src="../gallery/logo.png" alt="Logo" width="100px">
               <h5>A D M I N &nbsp; &nbsp; L O G I N</h5>
               <div class="form-text"><i class="fas fa-lock"></i> only admin can login here</div>
            </div>
            <div class="loginBody">

               <form action="" method="post">
                  <br>
                  <label for="email">
                     <input type="email" id="email" name="email" placeholder="Email" required>
                  </label>
                  <label for="password" class="mt-4">
                     <input type="password" id="password" placeholder="Password" required name="password">
                  </label>
                  <input type="submit" value="Login" class="login-btn w-25" name="submit">
               </form>
               <a href="../index.php" class="fas fas fa-arrow-left fa-2x mt-5" style="color: #ff3d00;"></a>
            </div>
         </section>
      </div>

   </div>


   </div>

</body>

</html>