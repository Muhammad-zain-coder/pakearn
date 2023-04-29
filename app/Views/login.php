<?= $this->extend('templates/default') ?>

<?= $this->section('title') ?>

<?= $title ?>

<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <style>
        .cp_navi_main_wrapper.float_left {
            background: #00aaef;
        }
    </style>


    <div id="preloader">
        <div id="status">
            <img src="<?= base_url('assets/front/images/loader.gif'); ?>" id="preloader_image" alt="loader">
        </div>
    </div>
    <!-- Top Scroll Start -->
    <a href="javascript:" id="return-to-top"> <i class="fas fa-angle-double-up"></i></a>
    <!-- Top Scroll End -->
    <!-- cp navi wrapper Start -->
    <!-- login wrapper start -->
    <div class="login_wrapper fixed_portion float_left mt-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="login_top_box float_left">
                        <div class="login_banner_wrapper">
                            <h2>PakEarn</h2>
                            <div class="jp_regis_center_tag_wrapper jb_register_red_or">
                                <h1>OR</h1>
                            </div>
                        </div>
                        <div class="login_form_wrapper">
                            <div class="sv_heading_wraper heading_wrapper_dark dark_heading hwd">

                                <h3> login to enter</h3>
                                <?php
                                 if (session()->getFlashdata('msg')): ?>
                                    <div class="alert alert-danger" role="alert">
                                        <?= session()->getFlashdata('msg') ?>
                                    </div>
                                <?php endif; ?>
                                <?php if (session()->getFlashdata('success')): ?>
                                    <div class="alert alert-success" role="alert">
                                        <?= session()->getFlashdata('success') ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <form action="<?= env('app.baseURL'); ?>/auth/auth" method="post">
                                <div class="form-group icon_form comments_form">

                                    <input type="email" class="form-control require" name="email"
                                           placeholder="Email Address*">

                                </div>
                                <div class="form-group icon_form comments_form">

                                    <input type="password" class="form-control require" placeholder="Password *"
                                           name="pass">

                                </div>
                                <div class="about_btn login_btn float_left">

                                    <input type="submit" class="btn btn-primary w-100" value="Login" name="Login">
                                </div>
                            </form>
                            <div class="dont_have_account float_left">
                                <p>Don’t have an acount ? <a href="<?= env('app.baseURL'); ?>/auth/register">Sign up</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- login wrapper end -->
    <!-- payments wrapper start -->
    <div class="payments_wrapper float_left">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="sv_heading_wraper half_section_headign">
                        <h4>Payment Methods</h4>
                        <h3>Accepted Payment Method</h3>
                    </div>
                    <div>
                        <img src="<?= base_url('assets/front/images/easpaisa.svg'); ?>" class="payment-img" alt="">
                        <img src="<?= env('app.baseURL'); ?>/assets/front/images/jazzcash.svg" class="payment-img"
                             alt="">
                        <img src="<?= base_url('assets/front/images/alliedbank.svg'); ?>" class="payment-img" alt="">
                    </div>

                </div>
                <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                    <div class="payment_slider_wrapper">
                        <div class="owl-carousel owl-theme">
                            <div class="item">

                                <div class="partner_img_wrapper float_left">
                                    <img src="<?= base_url('assets/front/images/partner1.png'); ?>"
                                         class="img-responsive" alt="img">
                                </div>

                            </div>
                            <div class="item">

                                <div class="partner_img_wrapper float_left">
                                    <img src="<?= base_url('assets/front/images/partner2.png'); ?>"
                                         class="img-responsive" alt="img">
                                </div>

                            </div>
                            <div class="item">

                                <div class="partner_img_wrapper float_left">
                                    <img src="<?= base_url('assets/front/images/partner3.png'); ?>"
                                         class="img-responsive" alt="img">
                                </div>

                            </div>
                            <div class="item">

                                <div class="partner_img_wrapper float_left">
                                    <img src="<?= base_url('assets/front/images/partner4.png'); ?>"
                                         class="img-responsive" alt="img">
                                </div>

                            </div>
                            <div class="item">

                                <div class="partner_img_wrapper float_left">
                                    <img src="<?= base_url('assets/front/images/partner2.png'); ?>"
                                         class="img-responsive" alt="img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- payments wrapper end -->

<?= $this->endSection() ?>