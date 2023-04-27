<?= $this->extend('templates/default_foot') ?>

<?= $this->section('title') ?>

<?= $title ?>

<?= $this->endSection() ?>

<?= $this->section('content') ?>
<style>
    .cp_navi_main_wrapper.float_left {
        background: #00aaef;
    }

    .vh-100 {
        height: 100vh !important;

    }
</style>
<!-- Top Scroll Start -->
<a href="javascript:" id="return-to-top"> <i class="fas fa-angle-double-up"></i></a>
<!-- Top Scroll End -->
<div class="l-sidebar">
    <div class="l-sidebar__content">
        <nav class="c-menu js-menu" id="mynavi">
            <ul class="u-list crm_drop_second_ul">
                <li class="crm_navi_icon">
                    <div class="c-menu__item__inner"><a href="<?= env('app.baseURL') ?>/auth/dashboard"><i
                                    class="flaticon-four-grid-layout-design-interface-symbol"></i></a>
                        <ul class="crm_hover_menu">
                            <li><a href="<?= env('app.baseURL') ?>/auth/dashboard"><i class="fa fa-circle"></i>Dashboard</a>
                            </li>
                            <li><a href="view_profile.html"><i class="fa fa-circle"></i> my profile</a>
                            </li>
                            <li><a href="email_notification.html"><i class="fa fa-circle"></i>email notification</a>
                            </li>
                            <li><a href="change_password.html"><i class="fa fa-circle"></i>change password</a>
                            </li>
                            <li><a href="change_pin.html"><i class="fa fa-circle"></i>change pin</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="c-menu__item is-active has-sub crm_navi_icon_cont">
                    <a href="<?= env('app.baseURL') ?>/auth/dashboard">
                        <div class="c-menu-item__title"><span>Dashboard</span>
                        </div>
                    </a>
                </li>
            </ul>
            <ul class="u-list crm_drop_second_ul">
                <li class="crm_navi_icon">
                    <div class="c-menu__item__inner"><a href="transfer_fund.html"><i
                                    class="flaticon-progress-report"></i></a>
                    </div>
                </li>
                <li class="c-menu__item crm_navi_icon_cont">
                    <a href="<?= env('app.baseURL') ?>/auth/widthrawal">
                        <div class="c-menu-item__title">Withdrawal</div>
                    </a>
                </li>
            </ul>
            <ul class="u-list crm_drop_second_ul">
                <li class="crm_navi_icon">
                    <div class="c-menu__item__inner"><a href="transfer_fund.html"><i
                                    class="flaticon-progress-report"></i></a>
                    </div>
                </li>
                <li class="c-menu__item crm_navi_icon_cont">
                    <a href="<?= env('app.baseURL') ?>/auth/pay-credit">
                        <div class="c-menu-item__title">Credit pay</div>
                    </a>
                </li>
            </ul>
            <ul class="u-list crm_drop_second_ul">
                <li class="crm_navi_icon">
                    <div class="c-menu__item__inner"><a href="transfer_fund.html"><i
                                    class="flaticon-progress-report"></i></a>
                    </div>
                </li>
                <li class="c-menu__item crm_navi_icon_cont">
                    <a href="<?= env('app.baseURL') ?>/auth/paymentGateways">
                        <div class="c-menu-item__title">Payment Gateways</div>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>
<!-- Main section Start -->
<div class="l-main">
    <!--  profile wrapper start -->

    <?php if ($userinfo['ticket'] !== ''){ ?>
        <div class="vh-100 bg-light">
            <div class="d-flex justify-content-center align-items-center">
                <h1>Your package will updated soon</h1>
            </div>
        </div>
    <?php }else{ ?>
    <div class="payment_transfer_Wrapper float_left">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12 col-12">
                <div class="sv_heading_wraper heading_center">
                    <h3>Credit Pay</h3>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-xl-6 offset-xl-3 col-lg-8 offset-lg-2 col-sm-12 col-12">
                <?php if (isset($validation)): ?>

                <?php endif; ?>

                <form method="post" action="" enctype="multipart/form-data">
                    <div class="change_password_wrapper float_left">
                        <div class="change_pass_field float_left">
                            <div class="form-group icon_form comments_form change_field">
                                <label class="form-label" for="ticket">TID Number:</label>
                                <input type="text" class="require" required placeholder="Enter Tid Number" id="ticket"
                                       name="ticket" value='<?= set_value('ticket') ?>'/>
                                <span class="text-danger"><?= display_error($validation, 'ticket') ?></span>

                            </div>
                            <div class="about_btn float_left">
                                <ul>
                                    <li>
                                        <button type="submit" class="btn btn-primary">Upgrade Your Package</button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <?php } ?>
    </div>
    <!--  profile wrapper end -->
    <!--  footer  wrapper start -->
    <div class="copy_footer_wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="crm_left_footer_cont">
                        <p>2022 Copyright © <a href="#"> PakEarn </a> . All Rights Reserved. Developed by <a
                                    href="https://wa.me/923314174980">Zedinfinity Solutions</a></p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!--  footer  wrapper end -->

<?= $this->endSection() ?>

