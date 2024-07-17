<?php

@include '../config/database.php';
@include '../config/header.php';


$db = new Database();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO admin_form( `name`, `email`, `password`) VALUES('$name', '$email', '$password')";

    $result = $db->insert($sql);



    if ($result) {

        echo "<script>
         alert('Add Successfully!');
         window.location.href='show_admin.php';
         </script>";
    } else {
        echo "<script> alert('Process didn't work!');</script>";
    }
}

?>



<title>New Admin Add - [ My Personal Portfolio Website ]</title>

</head>

<body>
    <div class="container-fluid">
        <section id="admin-panel">
            <div class="row">
                <div class="col-3"></div>
                <div class="col-9 panel-heading">
                    <h3>A D M I N &nbsp; &nbsp; P A N E L</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-3 dashboard">
                    <div class="myPhoto">
                        <img src="../gallery/user.jpg" class="img-fluid img-thumbnail" />
                    </div>
                    <ul>
                        <li>
                            <a href="admin_panel.php"><i class="fas fas fa-home"></i> Home</a>
                        </li>
                        <li>
                            <a href="edit_profile.php"><i class="fas fa-user-edit"></i> Edit
                                Profile</a>
                        </li>

                        <li>
                            <a href="chang_password.php"><i class="fas fa-exchange-alt"></i> Change Password</a>
                        </li>



                        <li>
                            <a href="user_feedback.php"><i class="fa-solid fa-message"></i> Users Feedback</a>
                        </li>



                        <li class=" dropdown">
                            <a href="" data-toggle="dropdown"> <i class="fas fa-user"></i> Admin <i class="fa-solid fa-chevron-down"></i></a>


                            <div class="dropdown-menu mt-3">
                                <a href="" class="dropdown-item mb-2 active"><i class="fas fa-plus"></i> Add Admin</a>
                                <a href="show_admin.php" class="dropdown-item"><i class="fa-solid fa-tags"></i> Show all admin</a>

                            </div>
                        </li> <br> <br>
                        <li class="mt-5">
                            <a href="../login_system/logout.php"><i class="fas fas fa-outdent"></i> Log Out</a>
                        </li>
                    </ul>
                </div>


                <div class="col-9">
                    <div id="new-admin" class="commom-bg"> <br>
                        <h4> Add New Admin</h4>
                        <br>
                        <form action="" method="POST">

                            <div class="form-group ">
                                <input type="text" name="name" id="name" class="form-control  w-75 pr-5 py-3" placeholder="Name" required />

                            </div>
                            <div class="form-group ">

                                <input type="email" name="email" id="email" class="form-control w-75 pr-5 py-3" placeholder="Email" required />
                            </div>
                            <div class="form-group ">
                                <input type="password" name="password" id="password" class="form-control w-75  py-3" placeholder="Password" />
                            </div>



                            <input type="submit" name="submit" value=" A D D" class="update-btn mt-5 py-2 px-5 d-block ">
                        </form>

                    </div>
                </div>
            </div>


        </section>
    </div>

    <!-- JS-jQuery-Popper js V.4-->
    <script src=" https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- JS   V.5.2 Latest-->
    <script src="
https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>