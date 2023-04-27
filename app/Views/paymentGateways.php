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
    <style>.cp_navi_main_wrapper.float_left {
            background: #00aaef
        }</style>
    <section>
        <h1 class="display-1 text-center pt-2 h1" style="padding-top: 60px; margin-top: 71px;">Payment Methods</h1>
        <hr class="hr"/>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header h1"><img class="card-img-top"
                                                         src="<?= base_url('assets/front/images/easpaisa.svg'); ?>"
                                                         alt=""/> EasyPaisa
                        </div>
                        <div class="card-body">
                            <div class="card-title"><span class="text-bold">Account Details</span>
                                <div class="card-text">Account Number : 03421123449<br/>Account Holder : Ferhat Bano
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header h1"><img class="card-img-top"
                                                         src="<?= env('app.baseURL'); ?>/assets/front/images/jazzcash.svg"
                                                         alt=""/> Jazzcash
                        </div>
                        <div class="card-body">
                            <div class="card-title"><span class="text-bold">Account Details</span>
                                <div class="card-text">Account Number : 03421123449<br/>Account Holder : Ferhat Bano
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 my-4">
                    <div class="card">
                        <div class="card-header h1"><img class="card-img-top"
                                                         src="<?= base_url('assets/front/images/alliedbank.svg'); ?>"
                                                         alt=""/> Allied Bank
                        </div>
                        <div class="card-body">
                            <div class="card-title"><span class="text-bold">Account Details</span>
                                <div class="card-text">Account Number : 0010092151580015<br/>Account Holder : Muhammad
                                    Usman<br/>IBan Number : PK87ABPA0010092151580015
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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

