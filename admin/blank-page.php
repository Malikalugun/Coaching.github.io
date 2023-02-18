<?php include("auth.php") ?>
<?php include("templates/global.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?php echo $settings['org_name']; ?> : Blank Page</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <?php  include("templates/inc.php"); ?>
</head>

<body>

  <!-- ======= Header ======= -->
  <?php
include ("templates/header.php");
?>

<!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <?php
include("templates/sidebar.php");

  ?>
  <!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Blank Page</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Pages</li>
          <li class="breadcrumb-item active">Blank</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

  <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Example Card</h5>
              <p>This is an examle page with no contrnt. You can use it as a starter for your custom pages.</p>
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