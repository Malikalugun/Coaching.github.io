<!doctype html>
<html lang="en">

<head>

    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php include "./templates/inc.php" ?>

</head>

<body>

    <!--====== PRELOADER PART START ======-->

    <div class="preloader">
        <div class="loader rubix-cube">
            <div class="layer layer-1"></div>
            <div class="layer layer-2"></div>
            <div class="layer layer-3 color-1"></div>
            <div class="layer layer-4"></div>
            <div class="layer layer-5"></div>
            <div class="layer layer-6"></div>
            <div class="layer layer-7"></div>
            <div class="layer layer-8"></div>
        </div>
    </div>

    <!--====== PRELOADER PART START ======-->

    <!--====== HEADER PART START ======-->

    <?php include "./templates/header.php" ?>
    <!--====== HEADER PART ENDS ======-->

    <!--====== SEARCH BOX PART START ======-->

    <div class="search-box">
        <div class="serach-form">
            <div class="closebtn">
                <span></span>
                <span></span>
            </div>
            <form action="#">
                <input type="text" placeholder="Search by keyword">
                <button><i class="fa fa-search"></i></button>
            </form>
        </div> <!-- serach form -->
    </div>

    <!--====== SEARCH BOX PART ENDS ======-->

    <!--====== PAGE BANNER PART START ======-->

    <section id="page-banner" class="pt-105 pb-130 bg_cover" data-overlay="8" style="background-image: url(images/page-banner-5.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2>Gallery</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Gallery</li>
                            </ol>
                        </nav>
                    </div> <!-- page banner cont -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== PAGE BANNER PART ENDS ======-->

    <!--====== Gallery PART START ======-->

    <section id="Gallery-page" class="pt-120 pb-120 gray-bg">
        <div class="container">
            <div class="row">


                <div class="col-lg-12">
                    <div class="Gallery-top-search">
                        <div class="Gallery-bar">
                            <ul class="nav" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="active" id="Gallery-grid-tab" data-toggle="tab" href="#Gallery-grid" role="tab" aria-controls="Gallery-grid" aria-selected="true"><i class="fa fa-th-large"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a id="Gallery-list-tab" data-toggle="tab" href="#Gallery-list" role="tab" aria-controls="Gallery-list" aria-selected="false"><i class="fa fa-th-list"></i></a>
                                </li>
                                <li class="nav-item">Showning 4 0f 24 Results</li>
                            </ul> <!-- nav -->
                        </div><!-- Gallery bar -->
                        <div class="Gallery-select">
                            <select>
                                <option value="1">Sort by</option>
                                <option value="1">Sort by 01</option>
                                <option value="2">Sort by 02</option>
                                <option value="3">Sort by 03</option>
                                <option value="4">Sort by 04</option>
                                <option value="5">Sort by 05</option>
                            </select>
                        </div> <!-- Gallery select -->
                    </div> <!-- Gallery top search -->
                </div>

            </div> <!-- row -->
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="Gallery-grid" role="tabpanel" aria-labelledby="Gallery-grid-tab">
                    <div class="row justify-content-center">
                        <?php


                        include("./conn.php");


                        $sql = "select * from tbl_gallery where deleted_at is NULL order by id desc";
                        $smt = mysqli_query($conn, $sql);

                        while ($rs = mysqli_fetch_assoc($smt)) {
                        ?>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="singel-publication mt-30">
                                    <div class="image">
                                        <img src="<?php echo 'admin' . substr($rs['thumbnail'], 1) ?>" alt="Publication">
                                        <div class="add-cart">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-Galleryping-cart"></i></a></li>
                                                <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="cont">
                                        <div class="name">
                                            <a href="#">
                                                <h6><?php echo ($rs['name']) ?></h6>
                                            </a>
                                            <!-- <span>$50.00</span> -->
                                        </div>
                                        <!-- <div class="button text-right">
                                        <a href="#" class="main-btn">Buy Now</a>
                                    </div> -->
                                    </div>
                                </div> <!-- singel publication -->
                            </div>
                        <?php
                        }
                        ?>
                    </div> <!-- row -->
                </div>
    </section>

    <!--====== COURSES PART ENDS ======-->

    <!--====== FOOTER PART START ======-->

    <?php include "./templates/footer.php" ?>
    <!--====== FOOTER PART ENDS ======-->

    <!--====== BACK TO TP PART START ======-->

    <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

    <!--====== BACK TO TP PART ENDS ======-->







    <?php include "./templates/vendor.php" ?>
</body>

</html>