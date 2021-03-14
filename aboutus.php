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
        $aboutList = about_list();
        $aboutImgList  = about_img_list();
    ?>

    <!-- Banner Slide -->
    <section class="header-text">
        <div class="container">
            <h2 class="text-white"><?php echo $aboutus ?></h2>
        </div>
    </section>

    <section class="aboutus margin-spacer py-md-5 py-3">
        <div class="container">
            <div class="card shadow rounded-lg mb-3 overflow-hidden">
                <div class="row">
                    <div class="col-lg-5">
                        <img src="assets/images/aboutus.jpg" class="d-block w-100 border-right" alt="banner">
                    </div>
                    <div class="col-lg-7 my-auto">
                        <div class="p-lg-2 p-md-3 p-3">
                            <h3 class="lh-base mb-2 text-dark"><?php echo $history ?></h3>
                            <h1 class="lh-base mb-2 text-brown font-weight-bold">
                                <?php echo $aboutList[0]->about_name; ?></h1>
                            <h5 class="text-dark lh-base mb-3 text-indent">
                                <?php echo (!empty( $_GET['lang'] ) and $_GET['lang'] == 'en') ? $aboutList[0]->history_desc_en : $aboutList[0]->history_desc; ?>
                                <!-- <p>
                                    The company opened up. In 2004, working in the Insulation and Ducting Contractors.
                                    Many years later, has grown to a widening of Insulation installation and Ducting
                                    works until the present Good up company Limited There are a number of co-operating
                                    partners have jointly grow and expand the scope of the contract. Example, the
                                    overhaul work. Assembly machines Installation of equipment installed pipe hydraulic
                                    pipe steam system. Ducting & ventilation system. The team with specialized
                                    expertise. By the torch control of the company, Good up limited.
                                </p>
                                <p>
                                    - Established on : 30 Nov 2004</p>
                                <p> - Location at : 91 SoiRangsit - Nakronnayok 25 , TombonPrachatipat, <br>Amphur
                                    Thanyaburi ,Pathumthani 12130</p>
                                <p> - Telephone : <a href="tel:021995055">( 02 ) 199 - 5055</a> , <a
                                        href="tel:0824379999">082-437-9999</a> , <a
                                        href="tel:0849562222">084-956-2222</a></p>
                                <p> - E – MAIL : goodup2001@gmail.com</p>
                                <p> - Website : www.goodup.co.th</p>
                                <p> - Register No : 0135547011222</p>
                                <p> - Authorized capital : 3,000,000 Baht .</p>
                                <p> - Bank Service : KASIKORN THAI PUBLIC COMPANY LIMITED.
                                </p> -->
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-12">
                    <div class="card p-3 shadow rounded-lg">
                        <h3 class="text-brown lh-base mb-3 font-weight-bold"><?php echo $mission ?></h3>
                        <h5 class="text-dark lh-base text-indent">
                            <?php echo (!empty( $_GET['lang'] ) and $_GET['lang'] == 'en') ? $aboutList[0]->mission_desc_en : $aboutList[0]->mission_desc; ?>
                        </h5>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-12">
                    <div class="card p-3 shadow rounded-lg">
                        <h3 class="text-brown lh-base mb-3 font-weight-bold"><?php echo $policy ?></h3>
                        <h5 class="text-dark lh-base text-indent">
                            <?php echo (!empty( $_GET['lang'] ) and $_GET['lang'] == 'en') ? $aboutList[0]->policy_desc_en : $aboutList[0]->policy_desc; ?>
                        </h5>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php foreach ($aboutImgList as $aboutImgDetail) : ?>
                <div class="col-lg-4 col-md-6 col-12 mb-3">
                    <div class="box-img overflow-hidden rounded detail shadow">
                        <a class="fancybox-pop fancybox.image"
                            href="img/about_us/<?php echo $aboutImgDetail->about_id; ?>/<?php echo $aboutImgDetail->img_name; ?>"
                            rel="services-1">
                            <img src="img/about_us/<?php echo $aboutImgDetail->about_id; ?>/<?php echo $aboutImgDetail->img_name; ?>"
                                class="img-fluid shadow zoom img-thumbnail"
                                alt="<?php echo $aboutList[0]->about_name; ?>">
                        </a>
                    </div>
                </div>
                <?php endforeach ?>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>

    <!-- ========================= JS here ========================= -->
    <script src="assets/js/jquery.min.js"></script>
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
    <!-- Initiate Portoflio Script -->
    <script src="extensions/portfolio/isotope.min.js"></script>
    <script src="extensions/portfolio/portfolio.js"></script>

    <script type="text/javascript" src="extensions/fancybox/jquery.fancybox.js"></script>
    <script type="text/javascript" src="extensions/fancybox/jquery.fancybox.pack.js"></script>
    <link rel="stylesheet" type="text/css" href="extensions/fancybox/jquery.fancybox.css" media="screen" />
    <script type="text/javascript" src="extensions/fancybox/jquery.fancybox-media.js"></script>

</body>

</html>