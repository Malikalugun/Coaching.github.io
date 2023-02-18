<?php include("auth.php");
require("conn.php");
$action = "Add";
$id = null;

if (isset($_GET['action'])) {
    $action = base64_decode($_GET['action']);
    $id = base64_decode($_GET['id']);

    $sql = "select * from tbl_teams where id='$id'";
    $smt = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($smt);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Team</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <?php include("templates/inc.php"); ?>
    <script src="scripts/team.js" type="text/javascript" language="javascript"></script>
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
            <h1>Team</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                    <li class="breadcrumb-item">Team</li>

                </ol>
            </nav>
            <hr>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="team-list.php">
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
                                <form id="team" action="team-action.php" class="row g-3 needs-validation" novalidate="">


                                    <div class="col-md-6">
                                        <label for="validationCustom01" class="form-label"><b>Description</b></label>
                                        <input value="<?php if (isset($_GET['id'])) echo $row['description'] ?>" type="text" class="form-control" id="description" name="description" required="">
                                        <div class="invalid-feedback">
                                            Please enter Description.
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="validationCustom01" class="form-label"><b> Name</b></label>
                                        <input value="<?php if (isset($_GET['id'])) echo $row['name'] ?>" type="text" class="form-control" id="name" name="name" required="">
                                        <div class="invalid-feedback">
                                            Please enter Name.
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="validationCustom01" class="form-label"><b>Bio</b></label>
                                        <input value="<?php if (isset($_GET['id'])) echo $row['bio'] ?>" type="text" class="form-control" id="bio" name="bio" required="">
                                        <div class="invalid-feedback">
                                            Please enter Bio.
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group py-2">
                                            <label for="formFileMultiple" class="form-label"><b>Browser url</b></label>
                                            <input class="form-control" value="<?php if (isset($_GET['id'])) echo $row['team_photo'] ?>" type="file" id="team_photo" name="team_photo" multiple />
                                            <span id="uploaded_team_photo"></span><br>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="validationCustom01" class="form-label"><b>Phone</b></label>
                                        <input value="<?php if (isset($_GET['id'])) echo $row['phone'] ?>" type="text" class="form-control" id="phone" name="phone" required="">
                                        <div class="invalid-feedback">
                                            Please enter Phone.
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="validationCustom01" class="form-label"><b> Email</b></label>
                                        <input value="<?php if (isset($_GET['id'])) echo $row['email'] ?>" type="text" class="form-control" id="email" name="email" required="">
                                        <div class="invalid-feedback">
                                            Please enter Email.
                                        </div>
                                    </div>


                                    <div class="col-12">
                                        <input type="hidden" name="id" id="id" value="<?php echo $id; ?>" />
                                        <input type="hidden" name="action" id="action" value="<?php echo $action; ?>" />
                                        <?php if (isset($_GET['id'])) {
                                        ?>
                                            <button class="btn btn-lg btn-primary" type="submit">Update</button>
                                            <a href="team-list.php"><button class="btn btn-lg btn-danger" type="button">Cancel</button></a>
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