<!doctype html>
<html lang="en">

<head>

    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php include "./templates/inc.php"  ?>

</head>

<body>



    <!--====== HEADER PART START ======-->

    <?php include "./templates/header.php" ?>
    <!--====== HEADER PART ENDS ======-->




    <!--====== ABOUT PART START ======-->

    <section id="about-part" class="pt-65">
        <div class="container">
            <div class="row">
                <?php


                include("./conn.php");


                $sql = "select * from tbl_notice_board where deleted_at is NULL order by id desc";
                $smt = mysqli_query($conn, $sql);

                while ($rs = mysqli_fetch_assoc($smt)) {
                ?>

                    <div class="col-lg-11 offset-lg-1">
                        <div class="about-event mt-50">
                            <div class="event-title">
                                <h3><?php echo ($rs['title']) ?></h3>
                            </div> <!-- event title -->
                            <ul>
                                <li>
                                    <div class="singel-event">
                                        <span><i class="fa fa-calendar"></i><?php echo ($rs['notice_date']) ?></span>

                                        <span><i class="fa fa-clock-o"></i><?php echo ($rs['created_at']) ?></span>
                                        <h3><?php echo ($rs['type']) ?></h3>
                                        <!-- <span><i class="fa fa-map-marker"></i><?php // echo ($rs['title']) 
                                                                                    ?></span> -->
                                        <a href="events-singel.php">
                                            <?php echo ($rs['notice']) ?>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div> <!-- about event -->
                    </div>
                <?php
                }
                ?>
            </div> <!-- row -->
        </div> <!-- container -->
        <div class="about-bg">
            <img src="images/about/bg-1.png" alt="About">
        </div>
    </section>

    <!--====== ABOUT PART ENDS ======-->

    <!--====== APPLY PART START ======-->

    <!-- <section id="apply-aprt" class="pb-120">
        <div class="container">
            <div class="apply">
                <div class="row no-gutters">
                    <div class="col-lg-6">
                        <div class="apply-cont apply-color-1">
                            <h3>Apply for fall 2020</h3>
                            <p>Gravida nibh vel velit auctor aliquetn sollicitudirem sem quibibendum auci elit cons equat ipsutis sem nibh id elituis sed odio sit amet nibh vulputate cursus equat ipsutis.</p>
                            <a href="#" class="main-btn">Apply Now</a>
                        </div>  -->
    <!-- apply cont -->
    <!-- </div>
                    <div class="col-lg-6">
                        <div class="apply-cont apply-color-2">
                            <h3>Apply for scholarship</h3>
                            <p>Gravida nibh vel velit auctor aliquetn sollicitudirem sem quibibendum auci elit cons equat ipsutis sem nibh id elituis sed odio sit amet nibh vulputate cursus equat ipsutis.</p>
                            <a href="#" class="main-btn">Apply Now</a>
                        </div>  -->
    <!-- apply cont -->
    <!-- </div>
                </div>
            </div> -->
    <!-- row -->
    <!-- </div>  -->
    <!-- container -->
    <!-- </section> -->

    <!--====== APPLY PART ENDS ======-->




    <!--====== PATNAR LOGO PART START ======-->

    <div id="patnar-logo" class="pt-40 pb-80 gray-bg">
        <div class="container">
            <div class="row patnar-slied">

                <div class="col-lg-12">
                    <div class="singel-patnar text-center mt-40">
                        <img src="images/patnar-logo/p-1.png" alt="Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="singel-patnar text-center mt-40">
                        <img src="images/patnar-logo/p-2.png" alt="Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="singel-patnar text-center mt-40">
                        <img src="images/patnar-logo/p-3.png" alt="Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="singel-patnar text-center mt-40">
                        <img src="images/patnar-logo/p-4.png" alt="Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="singel-patnar text-center mt-40">
                        <img src="images/patnar-logo/p-2.png" alt="Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="singel-patnar text-center mt-40">
                        <img src="images/patnar-logo/p-3.png" alt="Logo">
                    </div>
                </div>

            </div> <!-- row -->
        </div> <!-- container -->
    </div>

    <!--====== PATNAR LOGO PART ENDS ======-->

    <!--====== FOOTER PART START ======-->
    <?php include "./templates/footer.php" ?>

    <!--====== FOOTER PART ENDS ======-->

    <!--====== BACK TO TP PART START ======-->

    <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

    <!--====== BACK TO TP PART ENDS ======-->








    <?php include "./templates/vendor.php" ?>
</body>

</html>