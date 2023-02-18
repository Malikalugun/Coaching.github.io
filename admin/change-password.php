<?php include("auth.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Change Password</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <?php  include("templates/inc.php"); ?>
  
  
    <script>
        $(document).ready(function() {

        $("#btn_passchange").click(function(){
		$("#changepasstext").html("Loading...");
		var oldPass=$("#oldPass").val();
		var newpass=$("#newpass").val(); 
		var repass=$("#repass").val();
		
			$.ajax({
				 type:'post',
				 url: 'change-password-action.php',
				 data: {'oldPass':oldPass,'newpass':newpass,'repass':repass},
				 success: function(data)
				  {  alert(data);
				      $("#changepasstext").html("Change Password");
				      location.reload()
					   
				 }
				
			 });
  	});
        });
    </script>
  
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
      <h1>Change Password</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
          <li class="breadcrumb-item">Change Password</li>
  
        </ol>
      </nav>
      <hr>
    
    </div><!-- End Page Title -->


  <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
            <div class="card-body">
              <h5 class="card-title">Change Password</h5>
            
              <!-- Custom Styled Validation -->
              <form id="category" action="category-action.php"  class="row g-3 needs-validation" novalidate="">
           
                <div class="col-md-12">
                  <label for="validationCustom01" class="form-label">Enter Old Password</label>
                  <input type="password" class="form-control" name="oldPass" id="oldPass" placeholder="Enter Old Password">
                  <div class="invalid-feedback">
                    Please provide a Old Password.
                  </div>
                </div>

                <div class="col-md-12">
                  <label for="validationCustom01" class="form-label">Enter new password</label>
                  <input  type="password" class="form-control" name="newpass" id="newpass" placeholder="Enter New Password">
                  <div class="invalid-feedback">
                    Please enter new password.
                  </div>
                </div>
                
                <div class="col-md-12">
                  <label for="validationCustom01" class="form-label">Confirm password</label>
                  <input type="text" class="form-control" name="repass" id="repass" placeholder="Enter Re-Password">
                  <div class="invalid-feedback">
                    Please enter Confirm password.
                  </div>
                </div>
                
              
                
                
                 <button type="button" class="btn btn-success" id="btn_passchange"><span id="changepasstext">Change Password</span></button>
                      <p>
                       <div id="errorChangePassword"></div>
                      </p>
                
             </form>
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