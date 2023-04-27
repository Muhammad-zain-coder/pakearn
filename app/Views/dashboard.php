<?=$this->extend('templates/default_foot') ?>

<?=$this->section('title') ?>

<?= $title ?>

<?=$this->endSection() ?>

<?=$this->section('content') ?>
    <style>
        .cp_navi_main_wrapper.float_left{
            background: #00aaef;
        }
    </style>
  <!-- preloader Start -->
    <!-- Top Scroll Start -->
    <a href="javascript:" id="return-to-top"> <i class="fas fa-angle-double-up"></i></a>
    <!-- inner header wrapper start -->

    <!-- inner header wrapper end -->
	<div class="l-sidebar">
            <div class="l-sidebar__content">
        <nav class="c-menu js-menu" id="mynavi">
            <ul class="u-list crm_drop_second_ul">
                <li class="crm_navi_icon">
                    <div class="c-menu__item__inner"><a href="<?= env('app.baseURL')?>dashboard"><i class="flaticon-four-grid-layout-design-interface-symbol"></i></a>
                        <ul class="crm_hover_menu">
                            <li><a href="<?= env('app.baseURL')?>dashboard"><i class="fa fa-circle"></i>Dashboard</a>
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
                    <a href="<?= env('app.baseURL')?>dashboard">
                        <div class="c-menu-item__title"><span>Dashboard</span>
                        </div>
                    </a>
                </li>
            </ul>
            <ul class="u-list crm_drop_second_ul">
                <li class="crm_navi_icon">
                    <div class="c-menu__item__inner"><a href="transfer_fund.html"><i class="flaticon-progress-report"></i></a>
                    </div>
                </li>
                <li class="c-menu__item crm_navi_icon_cont">
                    <a href="<?= env('app.baseURL')?>widthrawal">
                        <div class="c-menu-item__title">Withdrawal</div>
                    </a>
                </li>
            </ul>
            <ul class="u-list crm_drop_second_ul">
                <li class="crm_navi_icon">
                    <div class="c-menu__item__inner"><a href="transfer_fund.html"><i class="flaticon-progress-report"></i></a>
                    </div>
                </li>
                <li class="c-menu__item crm_navi_icon_cont">
                    <a href="<?= env('app.baseURL')?>pay-credit">
                        <div class="c-menu-item__title">Credit pay</div>
                    </a>
                </li>
            </ul>
            <ul class="u-list crm_drop_second_ul">
                <li class="crm_navi_icon">
                    <div class="c-menu__item__inner"><a href="transfer_fund.html"><i class="flaticon-progress-report"></i></a>
                    </div>
                </li>
                <li class="c-menu__item crm_navi_icon_cont">
                    <a href="<?= env('app.baseURL')?>paymentGateways">
                        <div class="c-menu-item__title">Payment Gateways</div>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
        </div>
        <!-- Main section Start -->
         <div class="l-main">         
          <!--  my account wrapper start -->
              <div class="account_top_information mt-0">
        <div class="account_overlay"></div>
        <div class="useriimg"><img src="<?= env('app.baseurl')?>/assets/front/images/user.png" alt="users"></div>
        <div class="userdet uderid">
            <h1>Dashboard</h1>

            <dl class="userdescc">
                <dt>Username</dt>
                <dd>:  &nbsp;  <?=$userInfo['username'];?></dd>
                <dt>Full Name</dt>
                <dd>: &nbsp; <?=$userInfo['fname'];?> <?=$userInfo['lname'];?></dd>
                <dt>Email</dt>
                <dd>: &nbsp; <?=$userInfo['email'];?></dd>
                <dt>Mobile number</dt>
                <dd>: &nbsp; <?=$userInfo['mobile'];?></dd>
                <dt>Referral link
                <dd>:
                    <input type="text" readonly class="w-100 disabled" value="<?= env('app.baseURL')?>/register/<?= $userInfo['username'];?>">&nbsp;
                    </dd></dt>

            </dl>

        </div>


    </div>
            <!--  my account wrapper end -->    
            <!--  account wrapper start -->
            <div class="account_wrapper float_left">

                <div class="row">

                    <div class="col-md-12 col-lg-12 col-sm-12 col-12">
                        <div class="sv_heading_wraper">

                            <h3>my account</h3>

                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-xl-3 col-sm-6 col-12">
                        <div class="investment_box_wrapper color_1 float_left">
                            <a href="#">
                                <div class="investment_icon_wrapper float_left">
                                    <i class="far fa-money-bill-alt"></i>
                                    <h1>deposits</h1>
                                </div>

                                <div class="invest_details float_left">
                                    <table class="invest_table">
                                        <tbody>
                                            <tr>
                                                <td class="invest_td1">Active Deposit</td>
                                                <td class="invest_td1"> : <?=$userInfo['deposit'];?> PKR</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-xl-3 col-sm-6 col-12">
                        <div class="investment_box_wrapper color_2 float_left">
                            <a href="#">
                                <div class="investment_icon_wrapper float_left">
                                    <i class="far fa-money-bill-alt"></i>
                                    <h1>payouts</h1>
                                </div>

                                <div class="invest_details float_left">
                                    <table class="invest_table">
                                        <tbody>
                                            <tr>
                                                <td class="invest_td1">Total payouts</td>
                                                <td class="invest_td1"> : <?=$userInfo['payouts'];?> PKR</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-xl-3 col-sm-6 col-12">
                        <div class="investment_box_wrapper color_4 float_left">
                            <a href="#">
                                <div class="investment_icon_wrapper float_left">
                                    <i class="far fa-money-bill-alt"></i>
                                    <h1>earnings</h1>
                                </div>

                                <div class="invest_details float_left">
                                    <table class="invest_table">
                                        <tbody>
                                            <tr>
                                                <td class="invest_td1">total earnings</td>
                                                <td class="invest_td1">: <?=$earnings;?> PKR</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-xl-3 col-sm-6 col-12">
                        <div class="investment_box_wrapper color_5 float_left">
                            <a href="#">
                                <div class="investment_icon_wrapper float_left">
                                    <i class="far fa-money-bill-alt"></i>
                                    <h1>referral</h1>
                                </div>

                                <div class="invest_details float_left">
                                    <table class="invest_table">
                                        <tbody>
                                            <tr>
                                                <td class="invest_td1">Total referrals</td>
                                                <td class="invest_td1">: <?= $refral_countrer;?></td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!--  account wrapper end -->
           
           
           
            <!--  footer  wrapper start -->
            <div class="copy_footer_wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="crm_left_footer_cont">
                                <p>2022 Copyright © <a href="https://wa.me/923314174980">Zedinfinity solutions</a> . All Rights Reserved.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
         </div>
    
       <!--  footer  wrapper end -->      
    <!-- main box wrapper End-->
<?= $this->endSection()?>