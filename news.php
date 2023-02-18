<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php include "./templates/inc.php" ?>

<body>
    <?php include "./templates/header.php" ?>

    <!--====== NEWS PART START ======-->

    <section id="news-part" class="pt-115 pb-110">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title pb-50">
                        <h5>Latest News</h5>
                        <h2>From the news</h2>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row">
                <?php


                include("./conn.php");


                $sql = "select * from tbl_news where deleted_at is NULL order by id desc";
                $smt = mysqli_query($conn, $sql);

                while ($rs = mysqli_fetch_assoc($smt)) {
                ?>
                    <!-- <div class="col-lg-6">
                    <div class="singel-news mt-30">
                        <div class="news-thum pb-25">
                            <img src="images/news/n-1.jpg" alt="News">
                        </div>
                        <div class="news-cont">
                            <ul>
                                <li><a href="#"><i class="fa fa-calendar"></i>2 December 2022 </a></li>
                                <li><a href="#"> <span>By</span> Adam linn</a></li>
                            </ul>
                            <a href="blog-singel.php">
                                <h3>Tips to grade high cgpa in university life</h3>
                            </a>
                            <p>Grading in schools and universities in an attempt to apply standardized measurements of achievement in a course. It is essential to assess a student’s marks, percentiles and academic achievements.</p>
                        </div>
                    </div> 
                </div> -->
                    <div class="col-lg-6">
                        <div class="singel-news news-list">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="news-thum mt-30">
                                        <img src="<?php echo 'admin' . substr($rs['image_url'], 1) ?>" alt="News">
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="news-cont mt-30">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-calendar"></i><?php echo ($rs['created_at']) ?> </a></li>
                                            <li><a href="#"> <span>By</span><?php echo ($rs['author']) ?></a></li>
                                        </ul>
                                        <a href="blog-singel.php">
                                            <h3><?php echo ($rs['title']) ?></h3>
                                        </a>
                                        <p><?php echo ($rs['news']) ?></p>
                                    </div>
                                </div>
                            </div> <!-- row -->
                        </div> <!-- singel news -->


                    </div>
                <?php
                }
                ?>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== NEWS PART ENDS ======-->


    <?php include "./templates/footer.php" ?>

</body>
<?php include "./templates/vendor.php" ?>

</html>