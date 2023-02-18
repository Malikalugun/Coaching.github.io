<?php include("auth.php") ?>

<?php

function getTotalCustomer()
{
  include "conn.php";
  $total = 0;
  $query = "select count(*) as tot from tbl_customer";
  $smt1 = mysqli_query($conn, $query);
  if ($result = mysqli_fetch_assoc($smt1)) {
    if ($result['tot'])
      $total = $result['tot'];
  }
  return ($total);
}



function getTotalRecharge()
{
  include "conn.php";
  $total = 0;
  $query = "select count(*) as tot from tbl_recharge_history";
  $smt1 = mysqli_query($conn, $query);
  if ($result = mysqli_fetch_assoc($smt1)) {
    if ($result['tot'])
      $total = $result['tot'];
  }
  return ($total);
}

function getTotalWithdraw()
{
  include "conn.php";
  $total = 0;
  $query = "select count(*) as tot from tbl_withdraw_request";
  $smt1 = mysqli_query($conn, $query);
  if ($result = mysqli_fetch_assoc($smt1)) {
    if ($result['tot'])
      $total = $result['tot'];
  }
  return ($total);
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> Dashboard</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <?php include("templates/inc.php"); ?>
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
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">

            <!-- Customers Card -->
            <div class="col-md-3">
              <div class="card info-card customers-card">
                <div class="card-body">
                  <a href="#">
                    <h5 class="card-title">Total <span>| Courses</span></span></h5>
                  </a>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people-fill" style="color:blue"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php // echo getTotalCustomer(); 
                          ?></h6>

                    </div>
                  </div>

                </div>
              </div>

            </div><!-- End Customers Card -->

            <!-- Customers Card -->
            <div class="col-md-3">
              <div class="card info-card recharge-card">
                <div class="card-body">
                  <a href="#">
                    <h5 class="card-title">Total <span>| Photos</span></span></h5>
                  </a>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people-fill" style="color:blue"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php // echo getTotalRecharge(); 
                          ?></h6>

                    </div>
                  </div>

                </div>
              </div>

            </div><!-- End Customers Card -->

            <!-- Customers Card -->
            <div class="col-md-3">
              <div class="card info-card withdraw-card">
                <div class="card-body">
                  <a href="#">
                    <h5 class="card-title">Total <span>| Video</span></span></h5>
                  </a>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people-fill" style="color:blue"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php // echo getTotalWithdraw(); 
                          ?></h6>

                    </div>
                  </div>

                </div>
              </div>

            </div><!-- End Customers Card -->

            <!-- Revenue Card -->


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


</html>