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
        $categoryList = category_list();
    ?>

    <!-- Banner Slide -->
    <section class="header-text">
        <div class="container">
            <h2 class="text-white">งานที่บริการ</h2>
        </div>
    </section>

    <!-- Start Hero Area -->
    <section class="margin-spacer py-md-5 py-3">
        <div class="container">
            <div class="row">
            <?php foreach ($categoryList as $categoryDetail) : ?>
                <div class="col-md-6 mb-3">
                    <div class="card mb-3 overflow-hidden h-100">
                        <a href="services-detail?id=<?php echo $categoryDetail->id; ?>">
                            <div class="box-img">
                                <img src="img/category/<?php echo $categoryDetail->id; ?>/<?php echo $categoryDetail->img_cover; ?>" alt="<?php echo (!empty( $_GET['lang'] ) and $_GET['lang'] == 'th') ? $categoryDetail->category_name_en : $categoryDetail->category_name; ?>">
                            </div>
                            <div class="card-body text-left">
                                <h3 class="text-brown lh-base mb-2">
                                    <?php if (!empty( $_GET['lang'] ) && $_GET['lang'] == 'th') : ?>
                                        <?php echo  $categoryDetail->category_name; ?>
                                        <br>( <?php echo  $categoryDetail->category_name_en; ?> )
                                    <?php else : ?>
                                        <?php echo  $categoryDetail->category_name_en; ?>
                                    <?php endif ?>
                                </h3>
                                <h5 class="lh-base text-indent"><?php echo (!empty( $_GET['lang'] ) and $_GET['lang'] == 'th') ? $categoryDetail->description_en : $categoryDetail->description; ?></h5>
                            </div>
                        </a>
                    </div>
                </div>
            <?php endforeach ?>
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