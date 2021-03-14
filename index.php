<!DOCTYPE html>
<html class="no-js" lang="th">
<?php include 'lang.php'; ?>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>GoodUp - งามหุ้มฉนวน แจ็คเก็ต เพื่อกันความร้อน ความเย็นและเสียง</title>
    <meta name="description" content="Goodup - งามหุ้มฉนวน แจ็คเก็ต เพื่อกันความร้อน ความเย็นและเสียง" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/logo.png" />
    <meta property="og:image" content="https://www.goodup.co.th/assets/images/logo.png" />
    <!-- Place favicon.ico in the root directory -->

    <!-- Web Font -->
    <link href="https://fonts.googleapis.com/css2?family=Spartan:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- ========================= CSS here ========================= -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/LineIcons.2.0.css" />
    <link rel="stylesheet" href="assets/css/animate.css" />
    <link rel="stylesheet" href="assets/css/tiny-slider.css" />
    <link rel="stylesheet" href="assets/css/glightbox.min.css" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/fonts/fontawesome/css/all.min.css" />
</head>

<body>
    <?php 
        include 'header.php'; 
        include 'config/init.php';
        $bannerList = banner_list();
        $categoryList = category_list();
    ?>

    <!-- Banner Slide -->
    <section class="">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
            <?php 
                $i = 0;
                foreach ($bannerList as $bannerDetail) :
                $i++;
            ?>
                <?php if ($i == 1) : ?>
                    <li data-target="#carouselExampleIndicators" data-slide-to="$i" class="active"></li>
                <?php else : ?>
                    <li data-target="#carouselExampleIndicators" data-slide-to="$i"></li>
                <?php endif ?>
            <?php endforeach ?>
            </ol>
            <div class="carousel-inner">
            <?php 
                $i = 0;
                foreach ($bannerList as $bannerDetail) :
                $i++;
            ?>
                <?php if ($i == 1) : ?>
                    <div class="carousel-item active">
                        <img src="img/banner/<?php echo $bannerDetail->id; ?>/<?php echo $bannerDetail->img_cover; ?>" class="d-block w-100" alt="<?php echo $bannerDetail->banner_name; ?>">
                    </div>
                <?php else : ?>
                    <div class="carousel-item">
                        <img src="img/banner/<?php echo $bannerDetail->id; ?>/<?php echo $bannerDetail->img_cover; ?>" class="d-block w-100" alt="<?php echo $bannerDetail->banner_name; ?>">
                    </div>
                <?php endif ?>
            <?php endforeach ?>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </a>
        </div>
    </section>

    <!-- Start Hero Area -->
    <section class="margin-spacer py-md-5 py-3">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-3">
                    <h2 class="text-brown font-weight-bold"><?php echo $service ?></h2>
                </div>
                <?php 
                    $i == 0;
                    foreach ($categoryList as $categoryDetail) : 
                ?>
                <?php if ($i %2 == 1) : ?>
                    <div class="col-lg-6 col-12">
                        <div class="card mb-3 overflow-hidden bg-gray">
                            <a href="services-detail?id=<?php echo $categoryDetail->id?><?php echo($langCurrent == null) ? '': '&'.$langCurrent; ?>">
                                <div class="row g-0">
                                    <div class="col-6">
                                        <div class="box-img">
                                            <img src="img/category/<?php echo $categoryDetail->id; ?>/<?php echo $categoryDetail->img_cover; ?>" alt="<?php echo (!empty( $_GET['lang'] ) and $_GET['lang'] == 'en') ? $categoryDetail->category_name_en : $categoryDetail->category_name; ?>">
                                        </div>
                                    </div>
                                    <div class="col-6 my-auto mx-auto text-center">
                                        <h3 class="text-brown lh-base mx-md-3"><?php echo (!empty( $_GET['lang'] ) and $_GET['lang'] == 'en') ? $categoryDetail->category_name_en : $categoryDetail->category_name; ?></h3>
                                    </div>
                                </div>

                            </a>
                        </div>
                    </div>
                <?php else : ?>
                    <div class="col-lg-6 col-12">
                        <div class="card mb-3 overflow-hidden bg-gray">
                            <a href="services-detail?id=<?php echo $categoryDetail->id?><?php echo($langCurrent == null) ? '': '&'.$langCurrent; ?>">
                                <div class="row g-0">
                                    <div class="col-6 my-auto mx-auto text-center">
                                        <h3 class="text-brown lh-base mx-md-3"><?php echo (!empty( $_GET['lang'] ) and $_GET['lang'] == 'en') ? $categoryDetail->category_name_en : $categoryDetail->category_name; ?></h3>
                                    </div>
                                    <div class="col-6">
                                        <div class="box-img">
                                            <img src="img/category/<?php echo $categoryDetail->id; ?>/<?php echo $categoryDetail->img_cover; ?>" alt="<?php echo (!empty( $_GET['lang'] ) and $_GET['lang'] == 'en') ? $categoryDetail->category_name_en : $categoryDetail->category_name; ?>">
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                <?php endif ?>
                <?php
                    $i++;
                    endforeach 
                ?>
            </div>
        </div>
    </section>
    <!--/ End Hero Area -->

    <?php include 'footer.php'; ?>

    <!-- ========================= JS here ========================= -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/count-up.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/tiny-slider.js"></script>
    <script src="assets/js/glightbox.min.js"></script>
    <script src="assets/js/imagesloaded.min.js"></script>
    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script type="text/javascript">
        //========= glightbox
        GLightbox({
            'href': 'https://www.youtube.com/watch?v=r44RKWyfcFw&fbclid=IwAR21beSJORalzmzokxDRcGfkZA1AtRTE__l5N4r09HcGS5Y6vOluyouM9EM',
            'type': 'video',
            'source': 'youtube', //vimeo, youtube or local
            'width': 900,
            'autoplayVideos': true,
        });
    </script>
</body>

</html>