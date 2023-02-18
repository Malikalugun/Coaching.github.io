<?php include("auth.php");
require("conn.php");
$action = "Add";
$id = null;

if (isset($_GET['action'])) {
  $action = base64_decode($_GET['action']);
  $id = base64_decode($_GET['id']);

  $sql = "select * from tbl_notice_board where id='$id'";
  $smt = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($smt);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Notice</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <?php include("templates/inc.php"); ?>
  <script src="scripts/notice.js" type="text/javascript" language="javascript"></script>
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
      <h1>Notice</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
          <li class="breadcrumb-item">Notice</li>

        </ol>
      </nav>
      <hr>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="notice-list.php">
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
                <form id="notice" action="notice-action.php" class="row g-3 needs-validation" novalidate="">

                  <div class="col-md-12">
                    <label for="validationCustom01" class="form-label">Type</label>
                    <input value="<?php if (isset($_GET['id'])) echo $row['type'] ?>" type="text" class="form-control" id="type" name="type" required="">
                    <div class="invalid-feedback">
                      Please enter Type.
                    </div>
                  </div>
                  <div class="col-md-12">
                    <label for="validationCustom01" class="form-label">Notice Date</label>
                    <input value="<?php if (isset($_GET['id'])) echo $row['notice_date'] ?>" type="date" class="form-control" id="notice_date" name="notice_date" required="">
                    <div class="invalid-feedback">
                      Please enter notice date.
                    </div>
                  </div>
                  <div class="col-md-12">
                    <label for="validationCustom01" class="form-label">Title</label>
                    <input value="<?php if (isset($_GET['id'])) echo $row['title'] ?>" type="text" class="form-control" id="title" name="title" required="">
                    <div class="invalid-feedback">
                      Please enter title.
                    </div>
                  </div>

                  <div class="col-md-12">
                    <label for="validationCustom01" class="form-label">Notice</label>
                    <input value="<?php if (isset($_GET['id'])) echo $row['notice'] ?>" type="text" class="form-control" id="notice" name="notice" required="">
                    <div class="invalid-feedback">
                      Please enter notice.
                    </div>
                  </div>


                  <div class="col-12">
                    <input type="hidden" name="id" id="id" value="<?php echo $id; ?>" />
                    <input type="hidden" name="action" id="action" value="<?php echo $action; ?>" />
                    <?php if (isset($_GET['id'])) {
                    ?>
                      <button class="btn btn-lg btn-primary" type="submit">Update</button>
                      <a href="notice-list.php"><button class="btn btn-lg btn-danger" type="button">Cancel</button></a>
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
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
          <li class="breadcrumb-item">Notice</li>

        </ol>
      </nav>
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