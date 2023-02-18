<?php include("auth.php");
require("conn.php");
$action = "Add";
$id = null;

if (isset($_GET['action'])) {
    $action = base64_decode($_GET['action']);
    $id = base64_decode($_GET['id']);

    $sql = "select * from tbl_testimonial where id='$id'";
    $smt = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($smt);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>testimonial</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <?php include("templates/inc.php"); ?>
    <script src="scripts/testimonial.js" type="text/javascript" language="javascript"></script>
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
            <h1>testimonial</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                    <li class="breadcrumb-item">testimonial</li>

                </ol>
            </nav>
            <hr>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="testimonial-list.php">
                            <button type="button" class="btn btn-sm btn-success"><i class="bi bi-arrow-left me-1"></i>View List</button>
                        </a>
                    </li>

                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <div class="card-body">
                                <h5 class="card-title">Add New / Update</h5>

                                <!-- Custom Styled Validation -->
                                <form id="testimonial" action="testimonial-action.php" class="row g-3 needs-validation" novalidate="">


                                    <div class="col-md-6">
                                        <label for="validationCustom01" class="form-label"><b>Testimonial Type</b></label>
                                        <input value="<?php if (isset($_GET['id'])) echo $row['type'] ?>" type="text" class="form-control" id="type" name="type" required="">
                                        <div class="invalid-feedback">
                                            Please enter testimonial Title.
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="validationCustom01" class="form-label"><b>Name</b></label>
                                        <input value="<?php if (isset($_GET['id'])) echo $row['name'] ?>" type="text" class="form-control" id="name" name="name" required="">
                                        <div class="invalid-feedback">
                                            Please enter testimonial description.
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group py-2">
                                            <label for="formFileMultiple" class="form-label"><b>Image</b></label>
                                            <input class="form-control" value="<?php if (isset($_GET['id'])) echo $row['image_url'] ?>" type="file" id="image_url" name="image_url" multiple />
                                            <span id="uploaded_thumbnail"></span><br>
                                        </div>
                                    </div>



                                    <div class="col-md-6">
                                        <label for="validationCustom01" class="form-label"><b>Message</b></label>
                                        <textarea value="<?php if (isset($_GET['id'])) echo $row['message'] ?>" type="text" class="form-control" id="message" name="message" row="4" required=""></textarea>
                                        <div class="invalid-feedback">
                                            Please enter Message.
                                        </div>
                                    </div>



                                    <div class="col-12">
                                        <input type="hidden" name="id" id="id" value="<?php echo $id; ?>" />
                                        <input type="hidden" name="action" id="action" value="<?php echo $action; ?>" />
                                        <?php if (isset($_GET['id'])) {
                                        ?>
                                            <button class="btn btn-lg btn-primary" type="submit">Update</button>
                                            <a href="testimonial-list.php"><button class="btn btn-lg btn-danger" type="button">Cancel</button></a>
                                        <?php
                                        } else {
                                        ?>
                                            <button class="btn btn-lg btn-primary" type="submit">Add New</button>
                                        <?php
                                        }
                                        ?>
                                        <br>
                                        <h4 id="msg"></h4>
                                    </div>
                                </form><!-- End Custom Styled Validation -->

                            </div>
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