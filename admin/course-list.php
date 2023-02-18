<?php include("auth.php") ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Course List</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <?php include("templates/inc.php"); ?>
    <script src="scripts/course.js" type="text/javascript" language="javascript"></script>
</head>

<body>

    <!-- ======= Header ======= -->
    <?php
    include("templates/header.php");
    ?>

    <!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <?php
    include("templates/sidebar.php");

    ?>
    <!-- End Sidebar-->

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Course</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                    <li class="breadcrumb-item">Course</li>

                </ol>
            </nav>
            <hr>
        </div><!-- End Page Title -->

        <section class="section">
            <a href="./course.php">
                <button type="button" class="btn btn-primary"><i class="bi bi-plus me-1"></i> Add New</button>
            </a></br></br>

            <section class="section">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="card">
                            <div class="card-body overflow-scroll" id="records">
                                <h5 class="card-title">Course List</h5>
                                <!-- Table with stripped rows -->
                                <table class="table datatable">
                                    <thead>
                                        <tr>
                                            <th scope="col">Sl</th>
                                            <th scope="col">Course Name</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Image</th>

                                            <th scope="col">Status</th>
                                            <th scope="col" colspan="3">Action</th>

                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php
                                        // require "conn.php";

                                        $sl = 1;
                                        $sql = "select * from tbl_course where deleted_at is NULL order by id desc";

                                        $rs = mysqli_query($conn, $sql);
                                        while ($row = mysqli_fetch_assoc($rs)) {
                                            echo "<tr>";
                                            echo '<td>' . $sl . '</td>';
                                            echo '<td>' . $row['name'] . '</td>';
                                            echo '<td>' . $row['description'] . '</td>';
                                            echo '<td><a href="' . $row['image_url'] . '" target="_blank">View File</a></td>';

                                            echo '<td>' . $row['status'] . '</td>';




                                            // echo '<td><a href="subscription.php?action='.base64_encode("Subscribe").'&id=' . base64_encode($row['id']) . '" class="btn btn-primary"> <span class="badge bg-warning text-dark"> Sunscription</span></a></td>';


                                            echo '<td><a href="course.php?action=' . base64_encode("Edit") . '&id=' . base64_encode($row['id']) . '" class="btn btn-primary"><i class="bi bi-pencil"></i></a>
                                            <button id=' . $row['id'] . ' class="btn btn-danger delete"><i class="bi bi-trash"></i></button></td>';




                                            echo "</tr>";
                                            $sl++;
                                        }
                                        ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <?php
    include("templates/footer.php");
    ?>
    <!-- End Footer -->


    <?php include("templates/vendors.php"); ?>

</body>

</html>