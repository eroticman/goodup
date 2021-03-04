    
    <!-- Preloader -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- /End Preloader -->
    <?php $current_page = basename($_SERVER['PHP_SELF'],'.php'); ?>
    <!-- Start Header Area -->
    <header class="header">
        <div class="navbar-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand logo" href="index">
                                <img class="logo1" src="assets/images/logo.png" alt="Logo" class="py-3" />
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav ml-auto">
                                    <li class="nav-item">
                                        <a class="<?php echo($current_page == 'index') ? 'active' : ''?>" href="index">หน้าแรก</a></li>
                                    <li class="nav-item">
                                        <a class="<?php echo($current_page == 'aboutus') ? 'active' : ''?>" href="aboutus">เกี่ยวกับเรา</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="<?php echo($current_page == 'services' or $current_page == 'services-detail') ? 'active' : ''?>" href="services">งานที่เราบริการ</a>
                                    </li>
                                    <li class="nav-item">
                                        <div class="dropdown">
                                            <a class="btn btn-light bg-light-2 dropdown-toggle" href="#" role="button"
                                                id="dropdownMenuLink" data-toggle="dropdown" aria-expanded="false">
                                                <img class="icon-flag" src="assets/images/th.png" alt="Logo"/> ไทย
                                            </a>

                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <li><a class="dropdown-item" href="#"><img class="icon-flag" src="assets/images/th.png" alt="Logo"/> ไทย</a></li>
                                                <li><a class="dropdown-item" href="#"><img class="icon-flag" src="assets/images/en.png" alt="Logo"/> อังกฤษ</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                        <!-- navbar -->
                    </div>
                </div>
                <!-- row -->
            </div>
            <!-- container -->
        </div>
        <!-- navbar area -->
    </header>
    <!-- End Header Area -->
