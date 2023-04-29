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

    <!-- login wrapper start -->
    <div class="login_wrapper fixed_portion float_left">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="login_top_box float_left">
                        <div class="login_banner_wrapper register_banner_wrapper">
                            <h2>PakEarn</h2>
                            <div class="jp_regis_center_tag_wrapper jb_register_red_or">
                                <h1>OR</h1>
                            </div>
                        </div>
                        <div class="login_form_wrapper register_wrapper">
                            <div class="sv_heading_wraper heading_wrapper_dark dark_heading hwd">

                                <h3> Register To Enter</h3>
                                <?php if (isset($validation)): ?>
                                <?php endif; ?>
                                <?php if (session()->getFlashdata('msg')): ?>
                                    <div class="alert alert-danger" role="alert">
                                        <?= session()->getFlashdata('msg') ?>
                                    </div>
                                <?php endif; ?>
                                <?php if (session()->getFlashdata('sucess')): ?>
                                    <div class="alert alert-sucess" role="alert">
                                        <?= session()->getFlashdata('sucess') ?>
                                    </div>
                                <?php endif; ?>

                            </div>
                            <form method="post" action="" class="mb-4" enctype="multipart/form-data">
                                <div class="form-group icon_form comments_form register_contact">
                                    <label class="form-label float-left" for="fname">First Name</label>
                                    <input type="text" id="fname" class="form-control" name="fname"
                                           value='<?= set_value('fname') ?>' placeholder="First Name"/>
                                    <span class="text-danger"><?= display_error($validation, 'fname') ?></span>
                                </div>
                                <div class="form-group icon_form comments_form register_contact">
                                    <label class="form-label float-left" for="lname">Last Name</label>
                                    <input type="text" class="form-control require" name="lname" id="lname"
                                           value='<?= set_value('lname') ?>' placeholder="Last Name"/>
                                    <span class="text-danger"><?= display_error($validation, 'lname') ?></span>

                                </div>
                                <div class="form-group icon_form comments_form register_contact">
                                    <label class="form-label float-left" for="email">Email Name</label>
                                    <input type="email" class="form-control require" name="email" id="email"
                                           placeholder="Email" value='<?= set_value('email') ?>'/>
                                    <span class="text-danger"><?= display_error($validation, 'email') ?></span>

                                </div>
                                <div class="form-group icon_form comments_form register_contact">
                                    <label class="form-label float-left" for="username">Username</label>
                                    <input type="text" class="form-control require" name="username" id="username"
                                           placeholder="Username" value='<?= set_value('username') ?>'/>
                                    <span class="text-danger"><?= display_error($validation, 'email') ?></span>

                                </div>
                                <div class="form-group icon_form comments_form register_contact">
                                    <label class="form-label float-left" for="password">Password</label>
                                    <input type="password" class="form-control require" id="password" name="password"
                                           placeholder="Password" value='<?= set_value('pass') ?>'/>
                                    <span class="text-danger"><?= display_error($validation, 'password') ?></span>

                                </div>
                                <div class="form-group icon_form comments_form register_contact" float-left>
                                    <label class="form-label float-left" for="Mobile-Number">Mobile Number</label>
                                    <input type="text" class="form-control require" id="Mobile-Number"
                                           placeholder="Mobile Number" name="Phonenumber"
                                           value='<?= set_value('Phonenumber') ?>'/>
                                    <span class="text-danger"><?= display_error($validation, 'Phonenumber') ?></span>

                                </div>

                                <div class="form-group icon_form comments_form register_contact w-100 hidden">
                                    <label for="exampleInputEmail1" class="form-label float-left">Refrence
                                        name(Optional)</label>
                                    <input type="text" class="form-control hidden" id="exampleInputEmail1"
                                           name="refrence" value='<?= $refral ?>'/> <span
                                            class="text-danger"><?= display_error($validation, 'refrence') ?></span>
                                </div>
                                <div class="about_btn login_btn register_btn float_left">

                                    <button type="submit" class="btn btn-primary">Register</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--     login wrapper end-->
    <!--     payments wrapper start-->
    <div class="payments_wrapper float_left">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="sv_heading_wraper half_section_headign">
                        <h4>Payment Methods</h4>
                        <h3>Accepted Payment Method</h3></div>
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
                                    <img src="images/partner1.png" class="img-responsive" alt="img">
                                </div>

                            </div>
                            <div class="item">

                                <div class="partner_img_wrapper float_left">
                                    <img src="images/partner2.png" class="img-responsive" alt="img">
                                </div>

                            </div>
                            <div class="item">

                                <div class="partner_img_wrapper float_left">
                                    <img src="images/partner3.png" class="img-responsive" alt="img">
                                </div>

                            </div>
                            <div class="item">

                                <div class="partner_img_wrapper float_left">
                                    <img src="images/partner4.png" class="img-responsive" alt="img">
                                </div>

                            </div>
                            <div class="item">

                                <div class="partner_img_wrapper float_left">
                                    <img src="images/partner2.png" class="img-responsive" alt="img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- payments wrapper end -->
<?= $this->endSection(); ?>