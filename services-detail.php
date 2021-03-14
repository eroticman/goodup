<?php 
    include 'lang.php';
    include 'config/init.php';
    $id = $_GET['id'];
	$categoryDetail = category_detail($id);
    $serviceList = service_list($id);
?>
<!DOCTYPE html>
<html class="no-js" lang="th">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>GoodUp - <?php echo (!empty( $_GET['lang'] ) and $_GET['lang'] == 'en') ? $categoryDetail->category_name_en : $categoryDetail->category_name; ?></title>
    <meta name="description" content="Goodup - <?php echo (!empty( $_GET['lang'] ) and $_GET['lang'] == 'en') ? $categoryDetail->category_name_en : $categoryDetail->category_name; ?>" />
    <meta name="keywords" content="<?php echo  $categoryDetail->keyword; ?>">
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
    <?php include 'header.php'; ?>

    <!-- Banner Slide -->
    <section class="header-text">
        <div class="container">
            <h2 class="text-white"><?php echo (!empty( $_GET['lang'] ) and $_GET['lang'] == 'en') ? $categoryDetail->category_name_en : $categoryDetail->category_name; ?></h2>
        </div>
    </section>

    <section class="aboutus margin-spacer py-md-5 py-3">
        <div class="container">
            <div class="row">
                <?php foreach ($serviceList as $serviceDetail) : ?>
                    <div class="col-lg-4 col-md-6 col-12 mb-3">
                        <div class="box-img overflow-hidden rounded detail shadow">
                            <a title="<?php echo (!empty( $_GET['lang'] ) and $_GET['lang'] == 'en') ? $serviceDetail->service_name_en : $serviceDetail->service_name; ?>"
                                class="fancybox-pop fancybox.image" href="img/service/<?php echo $serviceDetail->id; ?>/<?php echo $serviceDetail->img_cover; ?>"
                                rel="services-1">
                                <img src="img/service/<?php echo $serviceDetail->id; ?>/<?php echo $serviceDetail->img_cover; ?>" class="img-fluid shadow zoom img-thumbnail"
                                    alt="<?php echo (!empty( $_GET['lang'] ) and $_GET['lang'] == 'en') ? $serviceDetail->service_name_en : $serviceDetail->service_name; ?>">
                            </a>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
            <?php 
                $total = service_count();

                $pagination = pagination( $total->counter, 9);
            ?>  
            <div class="row justify-content-center">
                <div class="col-12 text-center mx-auto">
                    <div class="pagination d-inline-block">
                    <?php if ( $pagination['total'] > 0 ) : ?>
                        <?php if ( $pagination['prev'] ) : ?>
                            <a href="services-detail?id=<?php echo $_GET['id'] ?>&lang=<?php echo $_GET['lang'] ?>&page=<?php echo $pagination['prev']; ?>">&laquo;</a>
                        <?php endif; ?>
                            <?php for ( $i = 1; $i <= $pagination['total']; $i++ ) : ?>
                                <?php 
                                $page1 = $pagination['page'] - 2;
                                $page2 = $pagination['page'] + 2;

                                if ( ( $i == 1 ) or ( $i == $pagination['total'] ) or ( $i >= $page1 and $i <= $page2 ) ) :
                                ?>
                                    <a href="services-detail?id=<?php echo $_GET['id'] ?>&lang=<?php echo $_GET['lang'] ?>&page=<?php echo $i; ?>" class="<?php echo ($i == $pagination['page']) ? 'active' : ''; ?>"><?php echo $i; ?></a>
                                <?php elseif ( ( ( $i > 1 ) and ( $i == ( $page1 - 1 ) ) ) or ( ( $i < $pagination['total'] ) and ( $i == ( $page2 + 1 ) ) ) ) : ?>
                                    <a href="#">...</a>
                                <?php endif ?>
                            <?php endfor ?>
                        <?php if ( $pagination['total'] != $pagination['page'] ) : ?>
                                <a href="services-detail?id=<?php echo $_GET['id'] ?>&lang=<?php echo $_GET['lang'] ?>&page=<?php echo $pagination['next']; ?>">&raquo;</a>
                        <?php endif ?>
                    <?php endif ?>
                    </div>
                </div>
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