<?php

@include '../config/database.php';
@include '../config/header.php';


$db = new Database();


if ($_SERVER['REQUEST_METHOD'] == 'POST') {


    $query = "select * from admin_form where id = '$id'";

    $result = $db->select($query);


    if ($result) {

        while ($row = mysqli_fetch_assoc($result)) {

            if ($row['password'] != $_POST['o_password']) {
                echo "<script> alert('OLd password is incorrect!')</script>";
            } else {
                if ($_POST['n_password'] != $_POST['c_password']) {

                    echo "<script> alert('password don't matched!')</script>";
                } else {

                    $new_password = $_POST['n_password'];
                    $sql = "update admin_form set password = '$new_password' where id = '$id'";

                    $res = $db->update($sql);

                    if ($res) {
                        echo "<script> alert('Password changed  successfully!')</script>";

                        header("Refresh:0");
                    } else {
                        echo "<script> alert('Process Failed') </script>";
                    }
                }
            }
        }
    }
}



?>


<title>Password Change- [ My Personal Portfolio Website ]</title>
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
                            <a href="chang_password.php" class="active"><i class="fas fa-exchange-alt"></i> Change Password</a>
                        </li>


                        <li>
                            <a href="user_feedback.php"><i class="fa-solid fa-message"></i>Users Feedback</a>
                        </li>

                        <li class=" dropdown">
                            <a href="" data-toggle="dropdown"> <i class="fas fa-user"></i> Admin <i class="fa-solid fa-chevron-down"></i></a>


                            <div class="dropdown-menu mt-3">
                                <a href="new_admin.php" class="dropdown-item mb-2"><i class="fas fa-plus"></i> Add Admin</a>
                                <a href="show_admin.php" class="dropdown-item"><i class="fa-solid fa-tags"></i> Show all admin</a>

                            </div>
                        </li>
                        <br> <br>
                        <li class="mt-5">
                            <a href="../login_system/logout.php"><i class="fas fas fa-outdent"></i> Log Out</a>
                        </li>
                    </ul>
                </div>
                <div class="col-9">
                    <div id="chng-pass" class="commom-bg"> <br>
                        <h4>Change Password</h4>
                        <br>
                        <form action="" method="POST">

                            <div class="form-group"><label for="password"> Old password : </label>
                                <input type="password" class="form-control w-50" name="o_password" id="o_password" />
                            </div>

                            <div class="form-group"><label for="password"> New password :</label>
                                <input type="password" name="n_password" id="n_password" class="form-control  w-50" />
                            </div>



                            <div class="form-group"><label for="password"> Confirm password : </label>
                                <input type="password" name="c_password" id="c_password" class="form-control  w-50 " />

                            </div>

                            <input type="submit" value="U P D A T E" class="update-btn px-4 py-2">
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