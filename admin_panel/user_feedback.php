<?php

@include '../config/database.php';
@include '../config/header.php';

$db = new Database();


?>


<title>Users Feedback - [ My Personal Portfolio Website ]</title>

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
                            <a href="user_feedback.php" class="active"><i class="fa-solid fa-message"></i> Users Feedback</a>
                        </li>



                        <li class=" dropdown">
                            <a href="" data-toggle="dropdown"> <i class="fas fa-user"></i> Admin <i class="fa-solid fa-chevron-down"></i></a>


                            <div class="dropdown-menu mt-3">
                                <a href="new_admin.php" class="dropdown-item mb-2"><i class="fas fa-plus"></i> Add Admin</a>
                                <a href="show_admin.php" class="dropdown-item"><i class="fa-solid fa-tags"></i> Show all admin</a>

                            </div>
                        </li> <br> <br>
                        <li class="mt-5">
                            <a href="../login_system/logout.php"><i class="fas fas fa-outdent"></i> Log Out</a>
                        </li>
                    </ul>
                </div>
                <div class="col-9">
                    <div id="user-feed" class="commom-bg">
                        <div class="card-header">
                            <h4> Users Feedback!</h4>
                        </div>
                        <br>
                        <div class="card-body">
                            <table class="table  table-bordered table-hover">

                                <thead class="bg-dark text-white">
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Message</th>

                                    </tr>
                                </thead>

                                <?php
                                $query = "SELECT * FROM `contact_form`  order by id desc";

                                $result = $db->select($query);

                                if ($result) {
                                    while ($row = mysqli_fetch_assoc($result)) {

                                ?>


                                        <tr>
                                            <td><?= $row['id']; ?></td>
                                            <td><?= $row['name']; ?></td>
                                            <td><?= $row['email']; ?></td>
                                            <td><?= $row['message']; ?></td>
                                        </tr>




                                <?php
                                    }
                                }

                                ?>

                            </table>


                        </div>


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