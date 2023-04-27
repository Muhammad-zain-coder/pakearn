<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/front/css/bootstrap.min.css'); ?>">
    <link href="<?= base_url('assets/front/css/fontawesome.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('assets/front/css/all.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('assets/front/css/style.css'); ?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/front/css/animate.css') ?>"/>
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/front/css/bootstrap.min.css') ?>"/>
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/front/css/fonts.css') ?>"/>
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/front/css/flaticon.css') ?>"/>
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/front/css/font-awesome.css') ?>"/>
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/front/css/owl.carousel.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/front/css/owl.theme.default.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/front/css/nice-select.css') ?>"/>
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/front/css/datatables.css') ?>"/>
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/front/css/dropify.min.css') ?>"/>
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/front/css/reset.css') ?>"/>
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/front/css/magnific-popup.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/front/css/style.css') ?>"/>
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/front/css/responsive.css') ?>"/>
    <!--favicon-->
    <link rel="shortcut icon" type="image/png" href="<?= base_url('assets/front/images/favicon.png') ?>"/>
    <style>
        .navbar-nav {
            margin-left: auto;
            margin-right: 0px !important;
        }
    </style>
    <title><?= $this->renderSection('title') ?></title>
</head>
<body class="d-flex flex-column min-vh-100">
<nav class="cd-dropdown d-block d-sm-block d-md-block d-lg-none d-xl-none">
    <h2><a href="index.html">PakEarn </a></h2>
    <a href="#0" class="cd-close">Close</a>
    <ul class="cd-dropdown-content">
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="<?= env('app.baseURL'); ?>" bis_skin_checked="1"><i
                        class="fas fa-home"></i> Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= env('app.baseURL'); ?>/how-to-use" bis_skin_checked="1"> <i
                        class="fas fa-info"></i> How to use</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= env('app.baseURL'); ?>/payment-methods" bis_skin_checked="1"><i
                        class="fas fa-dollar"></i> Payment Methods</a>
        </li>
        <?php if (session()->has("logged_in")): ?>
            <li>
                <a href="<?= env('app.baseURL'); ?>dashboard"> Dashboard </a></li>
            <li><a href="<?= env('app.baseURL'); ?>widthrawal"> widthrawal </a></li>
            <li><a href="<?= env('app.baseURL') ?>pay-credit">Credit Pay</a></li>
            <li><a href="<?= env('app.baseURL') ?>paymentGateways"> Payment Gateways </a></li>
            <li>
                <a href="<?= env('app.baseURL'); ?>logout"> logout </a></li>

        <?php else: ?>
            <li>
                <a href="<?= env('app.baseURL'); ?>register"> register </a></li>
            <li>
                <a href="<?= env('app.baseURL'); ?>login"> login </a>
            </li>
        <?php endif; ?>
    </ul>
    <!-- .cd-dropdown-content -->
</nav>
<div class="cp_navi_main_wrapper float_left">
    <div class="container-fluid">
        <div class="cp_logo_wrapper">
            <a href="<?= base_url(); ?>">
                <h2>pakEarn</h2>
            </a>
        </div>
        <!-- mobile menu area start -->
        <header class="mobail_menu d-block d-sm-block d-md-block d-lg-none d-xl-none">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="cd-dropdown-wrapper">
                            <a class="house_toggle" href="#0">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                     version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 31.177 31.177"
                                     style="enable-background:new 0 0 31.177 31.177;" xml:space="preserve" width="25px"
                                     height="25px">
                                        <g>
                                            <g>
                                                <path class="menubar"
                                                      d="M30.23,1.775H0.946c-0.489,0-0.887-0.398-0.887-0.888S0.457,0,0.946,0H30.23    c0.49,0,0.888,0.398,0.888,0.888S30.72,1.775,30.23,1.775z"
                                                      fill="#004165"/>
                                            </g>
                                            <g>
                                                <path class="menubar"
                                                      d="M30.23,9.126H12.069c-0.49,0-0.888-0.398-0.888-0.888c0-0.49,0.398-0.888,0.888-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,8.729,30.72,9.126,30.23,9.126z"
                                                      fill="#004165"/>
                                            </g>
                                            <g>
                                                <path class="menubar"
                                                      d="M30.23,16.477H0.946c-0.489,0-0.887-0.398-0.887-0.888c0-0.49,0.398-0.888,0.887-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,16.079,30.72,16.477,30.23,16.477z"
                                                      fill="#004165"/>
                                            </g>
                                            <g>
                                                <path class="menubar"
                                                      d="M30.23,23.826H12.069c-0.49,0-0.888-0.396-0.888-0.887c0-0.49,0.398-0.888,0.888-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,23.43,30.72,23.826,30.23,23.826z"
                                                      fill="#004165"/>
                                            </g>
                                            <g>
                                                <path class="menubar"
                                                      d="M30.23,31.177H0.946c-0.489,0-0.887-0.396-0.887-0.887c0-0.49,0.398-0.888,0.887-0.888H30.23    c0.49,0,0.888,0.398,0.888,0.888C31.118,30.78,30.72,31.177,30.23,31.177z"
                                                      fill="#004165"/>
                                            </g>
                                        </g>
                                    </svg>
                            </a>
                            <!-- .cd-dropdown -->

                        </div>
                    </div>
                </div>
            </div>
            <!-- .cd-dropdown-wrapper -->
        </header>
        <div class="top_header_right_wrapper">
            <p><i class="flaticon-phone-contact"></i> (+92)309 1470490</p>
            <div class="header_btn">
                <ul>
                    <?php if (session()->has("logged_in")): ?>
                        <li>
                            <a href="<?= env('app.baseURL'); ?>dashboard"> Dashboard </a></li>
                        <li>
                            <a href="<?= env('app.baseURL'); ?>logout"> logout </a></li>

                    <?php else: ?>
                        <li>
                            <a href="<?= env('app.baseURL'); ?>register"> register </a></li>
                        <li>
                            <a href="<?= env('app.baseURL'); ?>login"> login </a></li>

                    <?php endif; ?>
                </ul>


            </div>
        </div>

        <div class="cp_navigation_wrapper">
            <div class="mainmenu d-xl-block d-lg-block d-md-none d-sm-none d-none">
                <ul class="main_nav_ul">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="<?= base_url(); ?>"><i class="fas fa-home"></i>
                            Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('/how-to-use'); ?>"> <i class="fas fa-info"></i> How to
                            use</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('/payment-methods'); ?>"><i class="fas fa-dollar"></i>
                            Payment Methods</a>
                    </li>
            </div>
            <!-- mainmenu end -->
        </div>
    </div>
</div>
<?= $this->renderSection('content') ?>


<script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="<?= base_url('assets/front/js/jquery-3.3.1.min.js'); ?>"></script>
<script src="<?= base_url('assets/front/js/bootstrap.min.js'); ?>"></script>
<script src="<?= base_url('assets/front/js/modernizr.js'); ?>"></script>
<script src="<?= base_url('assets/front/js/jquery.menu-aim.js'); ?>"></script>
<script src="<?= base_url('assets/front/js/plugin.js'); ?>"></script>
<script src="<?= base_url('assets/front/js/jquery.countTo.js'); ?>"></script>
<script src="<?= base_url('assets/front/js/dropify.min.js'); ?>"></script>
<script src="<?= base_url('assets/front/js/datatables.js'); ?>"></script>
<script src="<?= base_url('assets/front/js/jquery.nice-select.min.js'); ?>"></script>
<script src="<?= base_url('assets/front/js/jquery.inview.min.js'); ?>"></script>
<script src="<?= base_url('assets/front/js/jquery.magnific-popup.js'); ?>"></script>
<script src="<?= base_url('assets/front/js/owl.carousel.js'); ?>"></script>
<script src="<?= base_url('assets/front/js/calculator.js'); ?>"></script>
<script src="<?= base_url('assets/front/js/custom.js'); ?>"></script>

</body>
</html>