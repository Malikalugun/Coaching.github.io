<?php include("auth.php") ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Notice List</title>
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
    </div><!-- End Page Title -->

    <section class="section">
      <a href="./notice.php">
        <button type="button" class="btn btn-primary"><i class="bi bi-plus me-1"></i> Add New</button>
      </a></br></br>

      <section class="section">
        <div class="row">
          <div class="col-lg-12">

            <div class="card">
              <div class="card-body overflow-scroll" id="records">
                <h5 class="card-title">Notice List</h5>
                <!-- Table with stripped rows -->
                <table class="table datatable">
                  <thead>
                    <tr>
                      <th scope="col">Sl</th>
                      <th>Type</th>
                      <th>Notice Date</th>
                      <th>Title</th>
                      <th scope="col">Notice</th>
                      <th scope="col" colspan="2">Action</th>
                    </tr>
                  </thead>

                  <tbody>
                    <?php
                    require "conn.php";

                    $sl = 1;
                    $sql = "select * from tbl_notice_board where deleted_at is NULL order by id desc";

                    $rs = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($rs)) {
                      echo "<tr>";
                      echo '<td>' . $sl . '</td>';
                      echo '<td>' . $row['type'] . '</td>';
                      echo '<td>' . $row['notice_date'] . '</td>';
                      echo '<td>' . $row['title'] . '</td>';
                      echo '<td>' . $row['notice'] . '</td>';

                      echo '<td><a href="notice.php?action=' . base64_encode("Edit") . '&id=' . base64_encode($row['id']) . '" class="btn btn-primary"><i class="bi bi-pencil"></i>Edit</a>
                      <button id=' . $row['id'] . ' class="btn btn-danger delete"><i class="bi bi-trash"></i>Delete</button></td>';
                      // echo '<td><button id=' . $row['id'] . ' class="btn btn-danger delete"><i class="bi bi-trash"></i>Delete</button></td>';

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