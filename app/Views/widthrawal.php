<?= $this->extend('templates/default_foot') ?>

<?= $this->section('title') ?>

<?= $title ?>

<?= $this->endSection() ?>

<?= $this->section('content') ?>
<style>
    .cp_navi_main_wrapper.float_left {
        background: #00aaef;
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
    <div class="payment_transfer_Wrapper float_left">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12 col-12">
                <div class="sv_heading_wraper heading_center">

                   <?php
                   $db = \Config\Database::connect();
                   $loggedinID = $userinfo['id'];
                   $query =$db->query("Select * FROM withdrawal WHERE user_id={$loggedinID}");
                   $UserData =$db->query("Select * FROM users WHERE id={$loggedinID}");
                   $results =$query->getResult();
                   $userResult = $UserData->getResultArray();
                   if($results!=null){
//                   var_dump($results[0]->status);
//                   die();
                       if( $results[0]->status=='unapproved'){
                       ?>
                       <h1 class="text-center">Your request is received, please wait for approval</h1>
                       <?php
                       }
                   }else{
                   ?>
                    <h3>Make Payout</h3>

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
                            <div class="change_field">
                                <label>Account Number :</label>
                                <input type="text" name="account" id="account" placeholder="Enter your Account NUmber"
                                       value='<?= set_value('account') ?>'>
                                <span class="text-danger"><?= display_error($validation, 'account') ?></span>
                            </div>
                            <div class="change_field">
                                <label>Bank Name</label>
                                <input type="text" name="bank" id="bank" placeholder="Enter Your Bank Name"
                                       value='<?= set_value('bank') ?>'>
                                <span class="text-danger"><?= display_error($validation, 'bank') ?></span>
                            </div>
                            <div class="change_field">
                                <label>Amount:</label>
                                <input type="text" name="amount" id="amount" placeholder="Enter Amount"
                                       value='<?= set_value('amount') ?>'>
                                <span class="text-danger"><?= display_error($validation, 'amount') ?></span>
                            </div>
                            <div class="about_btn float_left">
                                <ul>
                                    <li>
                                        <button type="submit" class="btn btn-primary">Submit your request</button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php
    }
    ?>
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

