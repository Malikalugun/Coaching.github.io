<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<?php include "./templates/inc.php" ?>

<body>
    <?php include "./templates/header.php" ?>
    <section id="contact-page" class="pt-90 pb-120 gray-bg ">
        <div class="container">
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-lg-6 col-sm-12 ">

                    <div class="contact-from mt-30 ">
                        <div class="section-title">
                            <h5>Login</h5>
                            <h2>Keep in touch</h2>
                        </div> <!-- section title -->
                        <div class="main-form pt-45">
                            <form id="contact-form" action="#" method="post" data-toggle="validator">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="singel-form form-group">
                                            <input name="name" type="text" placeholder="Your name" data-error="Name is required." required="required">
                                            <div class="help-block with-errors"></div>
                                        </div> <!-- singel form -->
                                    </div>
                                    <div class="col-md-12">
                                        <div class="singel-form form-group">
                                            <input name="email" type="email" placeholder="Email" data-error="Valid email is required." required="required">
                                            <div class="help-block with-errors"></div>
                                        </div> <!-- singel form -->
                                    </div>


                                    <p class="form-message"></p>
                                    <div class="col-md-12">
                                        <div class="singel-form">
                                            <button type="submit" class="main-btn">Login</button>

                                        </div> <!-- singel form -->

                                    </div>

                                </div> <!-- row -->
                                <div><span>Create new acctount ?</span><a href="register.php">Register</a></div>
                            </form>
                        </div> <!-- main form -->
                    </div> <!--  contact from -->
                </div>
                <div class="col-sm-3"></div>


            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    <?php include "./templates/footer.php" ?>
</body>
<?php include "./templates/vendor.php" ?>

</html>