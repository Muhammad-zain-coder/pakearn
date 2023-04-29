<?= $this->extend('templates/default') ?>
<?= $this->section('title') ?>
<?= $title ?>
<?= $this->endSection() ?>
<?= $this->section('content') ?>
    <div id="preloader">
        <div id="status">
            <img src="<?= base_url('assets/front/images/loader.gif') ?>" id="preloader_image" alt="loader">
        </div>
    </div>

    <!-- Top Scroll Start -->
    <a href="javascript:" id="return-to-top"> <i class="fas fa-angle-double-up"></i></a>
    <!-- Top Scroll End -->
    <!-- cp navi wrapper Start -->
    <!-- navi wrapper End -->
    <!-- slider wrapper start -->
    <div class="slider-area float_left">
        <div class="banner_img_top">
            <img src="<?= base_url('assets/front/images/banner.png') ?>" alt="img">
        </div>

        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <div class="carousel-captions caption-1">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12">
                                    <div class="content">

                                        <h2 data-animation="animated bounceInUp">Often Have Small</h2>

                                        <h3 data-animation="animated bounceInUp">Invest Your Money <br>
                                            For Future</h3>

                                        <div class="slider_btn float_left">
                                            <ul>
                                                <li data-animation="animated bounceInLeft">
                                                    <a href="#">start now</a>
                                                </li>
                                                <li data-animation="animated bounceInLeft">
                                                    <a href="#">view plans</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                                <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12">
                                    <div class="slider_main_img_wrapper">
                                        <img src="<?= base_url('assets/front/images/slider_img.png') ?>"
                                             alt="slider_img">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel-captions caption-2">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12">
                                    <div class="content">

                                        <h2 data-animation="animated bounceInLeft">Often Have Small</h2>

                                        <h3 data-animation="animated bounceInLeft">Invest Your Money <br>
                                            For Future</h3>

                                        <div class="slider_btn float_left">
                                            <ul>
                                                <li data-animation="animated bounceInLeft">
                                                    <a href="#">start now</a>
                                                </li>
                                                <li data-animation="animated bounceInLeft">
                                                    <a href="#">view plans</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                                <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12">
                                    <div class="slider_main_img_wrapper">
                                        <img src="<?= base_url('assets/front/images/slider_img.png') ?>"
                                             alt="slider_img">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel-captions caption-3">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12">
                                    <div class="content">

                                        <h2 data-animation="animated bounceInLeft">Often Have Small</h2>

                                        <h3 data-animation="animated bounceInLeft">Invest Your Money <br>
                                            For Future</h3>

                                        <div class="slider_btn float_left">
                                            <ul>
                                                <li data-animation="animated bounceInLeft">
                                                    <a href="#">start now</a>
                                                </li>
                                                <li data-animation="animated bounceInLeft">
                                                    <a href="#">view plans</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                                <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12">
                                    <div class="slider_main_img_wrapper">
                                        <img src="<?= base_url('assets/front/images/slider_img.png') ?>"
                                             alt="slider_img">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"><span
                                class="number"></span>
                    </li>
                    <li data-target="#carousel-example-generic" data-slide-to="1" class=""><span class="number"></span>
                    </li>
                    <li data-target="#carousel-example-generic" data-slide-to="2" class=""><span class="number"></span>
                    </li>
                </ol>
                <div class="carousel-nevigation">
                    <a class="prev" href="#carousel-example-generic" role="button" data-slide="prev"> <span></span> <i
                                class="flaticon-left-arrow"></i>
                    </a>
                    <a class="next" href="#carousel-example-generic" role="button" data-slide="next"> <span></span> <i
                                class="flaticon-arrow-pointing-to-right"></i>
                    </a>
                </div>
            </div>
        </div>

    </div>
    <!-- slider wrapper End -->
    <!--about us wrapper start -->
    <div class="about_us_wrapper float_left">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-lg-6 col-sm-12 col-12">
                    <div class="about_img_wrapper">
                        <img src="<?= base_url('assets/front/images/about_img.jpg') ?>" alt="About"
                             class="img-responsive">
                    </div>
                </div>
                <div class="col-md-12 col-lg-6 col-sm-12 col-12">
                    <div class="about_content_wrapper">
                        <div class="sv_heading_wraper">
                            <h4>who we are</h4>
                            <h3>Welcome to PakEarn</h3>

                        </div>
                        <div class="welcone_savehiyp float_left">
                            <p>Put your investing ideas into action with full range of investments. Enjoy real benefits
                                and rewards on your accrue investing.</p>
                            <div class="welcome_save_inpvate_wrapper">
                                <ul>
                                    <li class="purple_inovate"><a href="#"><i class="flaticon-check-box"></i> We
                                            Innovate </a></li>
                                    <li class="blue_inovate"><a href="#"><i class="flaticon-check-box"></i> Licenced &
                                            Certified </a></li>
                                    <li class="green_inovate"><a href="#"><i class="flaticon-check-box"></i>Saving &
                                            Investments </a></li>
                                </ul>
                            </div>
                            <div class="about_btn float_left">
                                <ul>
                                    <li>
                                        <a href="#">get more</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about us wrapper end -->
    <!--investment plan wrapper start -->
    <div class="investment_plans float_left">
        <div class="investment_overlay"></div>
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-md-12 col-lg-12 col-sm-12 col-12">
                    <div class="sv_heading_wraper heading_wrapper_dark">
                        <h4> our plans </h4>
                        <h3> Our Investment Plans </h3>

                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-lg-6 col-sm-6 col-12">
                    <div class="investment_box_wrapper float_left">
                        <div class="investment_icon_circle">
                            <i class="flaticon-bar-chart"></i>
                        </div>
                        <div class="investment_border_wrapper"></div>
                        <div class="investment_content_wrapper">
                            <h1><a href="#">silver plan</a></h1>
                            <p>50% credit back on every refferal
                                <br> First pay just 1000 RS
                        </div>
                        <div class="about_btn plans_btn">
                            <ul>
                                <li>
                                    <a href="#">read more</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--investment plan wrapper end -->
    <!--calculator plan wrapper start -->


    <!--calculator plan wrapper end -->
    <!-- global community wrapper start -->
    <div class="global_community_wrapper float_left">
        <div class="container">
            <div class="row">
                <div class="global_comm_wraper">
                    <h1>We Were Always Thinking Global Community</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do Ut enim ad minim veniam Quis
                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                        dolor in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                </div>
                <div class="zero_balance_wrapper">
                    <div class="zero_commisition">
                        <h1>Zero
                            Commissions</h1>
                        <h4>No hidden charges*</h4>
                    </div>
                    <div class="start_invest_wrap">
                        <h1>start invest now</h1>
                        <div class="about_btn float_left">
                            <ul>
                                <li>
                                    <a href="#">buy now !</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- global community wrapper end -->
    <!-- transaction wrapper start -->
    <div class="transaction_wrapper float_left">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="sv_heading_wraper half_section_headign half_sec_heading">
                        <h4>who we are</h4>
                        <h3>Our Latest Transaction</h3>

                    </div>
                    <div class="x_offer_tabs_wrapper">
                        <ul class="nav nav-tabs">
                            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#home"> deposits</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#menu2">withdraw</a>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="tab-content">
                        <div id="home" class="tab-pane active">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="table_next_race league_table overflow-scroll">
                                        <table>
                                            <tr>
                                                <th class="form_table_resp">name</th>
                                                <th>date</th>
                                                <th>amount</th>
                                                <th>currency</th>
                                                <th>deposit</th>

                                            </tr>
                                            <tr>

                                                <td><img src="<?= base_url('assets/front/images/mem1.png') ?>"
                                                         alt="img"> <span>Olympia Ripple</span></td>

                                                <td>June 24,2022</td>
                                                <td>$6,00,000.00</td>
                                                <td>Dollar</td>
                                                <td>03 Minutes Ago</td>

                                            </tr>
                                            <tr>

                                                <td><img src="<?= base_url('assets/front/images/mem4.png') ?>"
                                                         alt="img"> <span>Nancee Broom</span></td>

                                                <td>June 04,2022</td>
                                                <td>$16,00,000.00</td>
                                                <td>card</td>
                                                <td>22 Minutes Ago</td>

                                            </tr>
                                            <tr>

                                                <td><img src="<?= base_url('assets/front/images/mem1.png') ?>"
                                                         alt="img"> <span>Broom Nancee</span></td>

                                                <td>June 24,2022</td>
                                                <td>$6,00,000.00</td>
                                                <td>bitcoin</td>
                                                <td>15 Minutes Ago</td>

                                            </tr>
                                            <tr>

                                                <td><img src="<?= base_url('assets/front/images/mem2.png') ?>"
                                                         alt="img"> <span>Ripple Alison</span></td>

                                                <td>June 24,2022</td>
                                                <td>$06,00,000.00</td>
                                                <td>ripees</td>
                                                <td>05 Minutes Ago</td>

                                            </tr>
                                            <tr>

                                                <td><img src="<?= base_url('assets/front/images/mem3.png') ?>"
                                                         alt="img"> <span>Olympia Ripple</span></td>

                                                <td>June 05,2022</td>
                                                <td>$45,00,000.00</td>
                                                <td>ETH</td>
                                                <td>13 Minutes Ago</td>

                                            </tr>
                                            <tr>

                                                <td><img src="<?= base_url('assets/front/images/mem4.png') ?>"
                                                         alt="img"> <span>Alison Rittichier</span></td>

                                                <td>June 28,2022</td>
                                                <td>$77,00,000.00</td>
                                                <td>payonner</td>
                                                <td>05 Minutes Ago</td>

                                            </tr>
                                            <tr>

                                                <td><img src="<?= base_url('assets/front/images/mem5.png') ?>"
                                                         alt="img"> <span>Olympia Ripple</span></td>

                                                <td>June 24,2022</td>
                                                <td>$11,00,000.00</td>
                                                <td>card</td>
                                                <td>23 Minutes Ago</td>

                                            </tr>
                                            <tr>

                                                <td><img src="<?= base_url('assets/front/images/mem6.png') ?>"
                                                         alt="img"> <span>Emmett Stein </span></td>

                                                <td>June 21,2022</td>
                                                <td>$66,00,000.00</td>
                                                <td>paypal</td>
                                                <td>53 Minutes Ago</td>

                                            </tr>

                                        </table>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="menu2" class="tab-pane fade">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="table_next_race league_table overflow-scroll">
                                        <table>
                                            <tr>
                                                <th class="form_table_resp">name</th>
                                                <th>date</th>
                                                <th>amount</th>
                                                <th>currency</th>
                                                <th>deposit</th>

                                            </tr>

                                            <tr>

                                                <td><img src="<?= base_url('assets/front/images/mem4.png') ?>"
                                                         alt="img"> <span>Nancee Broom</span></td>

                                                <td>June 04,2022</td>
                                                <td>$16,00,000.00</td>
                                                <td>card</td>
                                                <td>22 Minutes Ago</td>

                                            </tr>
                                            <tr>

                                                <td><img src="<?= base_url('assets/front/images/mem1.png') ?>"
                                                         alt="img"> <span>Olympia Ripple</span></td>

                                                <td>June 24,2022</td>
                                                <td>$6,00,000.00</td>
                                                <td>Dollar</td>
                                                <td>03 Minutes Ago</td>

                                            </tr>
                                            <tr>

                                                <td><img src="<?= base_url('assets/front/images/mem2.png') ?>"
                                                         alt="img"> <span>Ripple Alison</span></td>

                                                <td>June 24,2022</td>
                                                <td>$06,00,000.00</td>
                                                <td>ripees</td>
                                                <td>05 Minutes Ago</td>

                                            </tr>
                                            <tr>

                                                <td><img src="<?= base_url('assets/front/images/mem6.png') ?>"
                                                         alt="img"> <span>Emmett Stein
                                              </span></td>
                                                <td>June 21,2022</td>
                                                <td>$66,00,000.00</td>
                                                <td>paypal</td>
                                                <td>53 Minutes Ago</td>

                                            </tr>
                                            <tr>

                                                <td><img src="<?= base_url('assets/front/images/mem1.png') ?>"
                                                         alt="img"> <span>Broom Nancee</span></td>

                                                <td>June 24,2022</td>
                                                <td>$6,00,000.00</td>
                                                <td>bitcoin</td>
                                                <td>15 Minutes Ago</td>

                                            </tr>

                                            <tr>

                                                <td><img src="<?= base_url('assets/front/images/mem4.png') ?>"
                                                         alt="img"> <span>Alison Rittichier</span></td>

                                                <td>June 28,2022</td>
                                                <td>$77,00,000.00</td>
                                                <td>payonner</td>
                                                <td>05 Minutes Ago</td>

                                            </tr>
                                            <tr>

                                                <td><img src="<?= base_url('assets/front/images/mem3.png') ?>"
                                                         alt="img"> <span>Olympia Ripple</span></td>

                                                <td>June 05,2022</td>
                                                <td>$45,00,000.00</td>
                                                <td>ETH</td>
                                                <td>13 Minutes Ago</td>

                                            </tr>
                                            <tr>

                                                <td><img src="<?= base_url('assets/front/images/mem5.png') ?>"
                                                         alt="img"> <span>Olympia Ripple</span></td>

                                                <td>June 24,2022</td>
                                                <td>$11,00,000.00</td>
                                                <td>card</td>
                                                <td>23 Minutes Ago</td>

                                            </tr>

                                        </table>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- transaction wrapper start -->
    <!-- works wrapper start -->
    <div class="works_wrapper float_left">
        <div class="work_banner_wrapper">
            <img src="<?= base_url('assets/front/images/work_banner.jpg') ?>" alt="img">
        </div>
        <div class="howwork_banner_wrapper">
            <div class="vedio_link_wrapper">
                <a class="test-popup-link button" rel='external' href='https://www.youtube.com/embed/ryzOXAO0Ss0'
                   title='title'><i class="fa fa-play"></i></a>
                <div class="work_content_wrap">
                    <h1>How It Works</h1>
                    <ul class="work_checklist_wrapper">
                        <li>
                            <a href="#"><i class="fas fa-dollar-sign"></i>get deposit</a>
                        </li>
                        <li><a href="#"><i class="far fa-money-bill-alt"></i> utilize money</a></li>
                        <li><a href="#"><i class="fas fa-plus"></i> give interest</a></li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
    <!-- works wrapper end -->
    <!--our services wrapper start -->
    <div class="our_services_wrapper float_left">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-lg-12 col-sm-12 col-12">
                    <div class="sv_heading_wraper heading_wrapper_dark dark_heading">
                        <h4> services</h4>
                        <h3>our features</h3>

                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-sm-6 col-12">
                    <div class="investment_box_wrapper service_box feature_box float_left">
                        <div class="investment_icon_circle">
                            <i class="flaticon-medal"></i>
                        </div>
                        <div class="investment_border_wrapper"></div>
                        <div class="investment_content_wrapper">
                            <h1><a href="#">We're Certified</a></h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do Ut enim ad minim
                                veniam</p>
                        </div>

                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-sm-6 col-12">
                    <div class="investment_box_wrapper service_box feature_box float_left">
                        <div class="investment_icon_circle red_info_circle">
                            <i class="flaticon-shield"></i>
                        </div>
                        <div class="investment_border_wrapper red_border_wrapper"></div>
                        <div class="investment_content_wrapper red_content_wrapper">
                            <h1><a href="#">We're Secure</a></h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do Ut enim ad minim
                                veniam</p>
                        </div>

                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-sm-6 col-12">
                    <div class="investment_box_wrapper service_box feature_box float_left">
                        <div class="investment_icon_circle blue_icon_circle">
                            <i class="flaticon-bars"></i>
                        </div>
                        <div class="investment_border_wrapper blue_border_wrapper"></div>
                        <div class="investment_content_wrapper blue_content_wrapper">
                            <h1><a href="#">We're Profitable</a></h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do Ut enim ad minim
                                veniam</p>
                        </div>

                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-sm-6 col-12">
                    <div class="investment_box_wrapper service_box feature_box float_left">
                        <div class="investment_icon_circle">
                            <i class="flaticon-language"></i>
                        </div>
                        <div class="investment_border_wrapper yellow_border_wrapper"></div>
                        <div class="investment_content_wrapper yellow_content_wrapper">
                            <h1><a href="#">We're global</a></h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do Ut enim ad minim
                                veniam</p>
                        </div>

                    </div>
                </div>

                <div class="col-md-6 col-lg-4 col-sm-6 col-12">
                    <div class="investment_box_wrapper service_box feature_box float_left">
                        <div class="investment_icon_circle green_info_circle">
                            <i class="flaticon-bitcoin"></i>
                        </div>
                        <div class="investment_border_wrapper green_border_wrapper"></div>
                        <div class="investment_content_wrapper green_content_wrapper">
                            <h1><a href="#">We Accept Crypto</a></h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do Ut enim ad minim
                                veniam</p>
                        </div>

                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-sm-6 col-12">
                    <div class="investment_box_wrapper service_box feature_box float_left">
                        <div class="investment_icon_circle pink_info_circle">
                            <i class="flaticon-headphones"></i>
                        </div>
                        <div class="investment_border_wrapper pink_border_wrapper"></div>
                        <div class="investment_content_wrapper pink_content_wrapper">
                            <h1><a href="#">best support</a></h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do Ut enim ad minim
                                veniam</p>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--our services wrapper end -->
    <!-- testimonial wrapper start -->
    <div class="testimonial_wrapper float_left">
        <div class="investment_overlay"></div>
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-lg-12 col-sm-12 col-12">
                    <div class="sv_heading_wraper heading_wrapper_dark">
                        <h4>testimonial</h4>
                        <h3>what people says</h3>

                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="testimonial_slider_wrapper">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="testimonial_slide_main_wrapper dark_top_testimonial">
                                    <div class="ts_client_cont_wrapper">
                                        <p>“This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit
                                            auctor aliquet. sollicitudin, lorem quis bibendum auctor, nisi elit
                                            consequat ipsum, nec sagittis sem nibh id elit.”</p>
                                    </div>
                                    <div class="ts_img_social_wrapper">
                                        <div class="ts_client_img_wrapper">
                                            <img src="<?= base_url('assets/front/images/ts1.png') ?>"
                                                 class="img-responsive" alt="client_img"/>
                                        </div>
                                        <div class="ts_client_social_wrapper">
                                            <p>- by Merry Jain
                                                <br> <span>(investor, gold)</span></p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial_slide_main_wrapper">
                                    <div class="ts_client_cont_wrapper dark_testimonial_wrapper">
                                        <p>“This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit
                                            auctor aliquet. sollicitudin, lorem quis bibendum auctor, nisi elit
                                            consequat ipsum, nec sagittis sem nibh id elit.”</p>
                                    </div>
                                    <div class="ts_img_social_wrapper p2">
                                        <div class="ts_client_social_wrapper right_social_medaia">
                                            <p>- by joahn doe
                                                <br> <span>(investor, gold)</span></p>
                                        </div>
                                        <div class="ts_client_img_wrapper">
                                            <img src="<?= base_url('assets/front/images/ts2.png') ?>"
                                                 class="img-responsive" alt="client_img"/>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial_slide_main_wrapper dark_top_testimonial">
                                    <div class="ts_client_cont_wrapper">
                                        <p>“This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit
                                            auctor aliquet. sollicitudin, lorem quis bibendum auctor, nisi elit
                                            consequat ipsum, nec sagittis sem nibh id elit.”</p>
                                    </div>
                                    <div class="ts_img_social_wrapper">
                                        <div class="ts_client_img_wrapper">
                                            <img src="<?= base_url('assets/front/images/ts1.png') ?>"
                                                 class="img-responsive" alt="client_img"/>
                                        </div>
                                        <div class="ts_client_social_wrapper">
                                            <p>- by Merry Jain
                                                <br> <span>(investor, gold)</span></p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial_slide_main_wrapper">
                                    <div class="ts_client_cont_wrapper dark_testimonial_wrapper">
                                        <p>“This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit
                                            auctor aliquet. sollicitudin, lorem quis bibendum auctor, nisi elit
                                            consequat ipsum, nec sagittis sem nibh id elit.”</p>
                                    </div>
                                    <div class="ts_img_social_wrapper p2">
                                        <div class="ts_client_social_wrapper right_social_medaia">
                                            <p>- by joahn doe
                                                <br> <span>(investor, gold)</span></p>
                                        </div>
                                        <div class="ts_client_img_wrapper">
                                            <img src="<?= base_url('assets/front/images/ts2.png') ?>"
                                                 class="img-responsive" alt="client_img"/>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial_slide_main_wrapper dark_top_testimonial">
                                    <div class="ts_client_cont_wrapper">
                                        <p>“This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit
                                            auctor aliquet. sollicitudin, lorem quis bibendum auctor, nisi elit
                                            consequat ipsum, nec sagittis sem nibh id elit.”</p>
                                    </div>
                                    <div class="ts_img_social_wrapper">
                                        <div class="ts_client_img_wrapper">
                                            <img src="<?= base_url('assets/front/images/ts1.png') ?>"
                                                 class="img-responsive" alt="client_img"/>
                                        </div>
                                        <div class="ts_client_social_wrapper">
                                            <p>- by Merry Jain
                                                <br> <span>(investor, gold)</span></p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial_slide_main_wrapper">
                                    <div class="ts_client_cont_wrapper dark_testimonial_wrapper">
                                        <p>“This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit
                                            auctor aliquet. sollicitudin, lorem quis bibendum auctor, nisi elit
                                            consequat ipsum, nec sagittis sem nibh id elit.”</p>
                                    </div>
                                    <div class="ts_img_social_wrapper p2">
                                        <div class="ts_client_social_wrapper right_social_medaia">
                                            <p>- by joahn doe
                                                <br> <span>(investor, gold)</span></p>
                                        </div>
                                        <div class="ts_client_img_wrapper">
                                            <img src="<?= base_url('assets/front/images/ts2.png') ?>"
                                                 class="img-responsive" alt="client_img"/>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- testimonial wrapper end -->

    <!-- FAQ wrapper start -->
    <div class="faq_wrapper float_left">
        <div class="investment_overlay faq_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-12">
                    <div class="sv_heading_wraper heading_wrapper_dark">
                        <h4>FAQ section</h4>
                        <h3>Frequently Asked Questions</h3>
                    </div>
                </div>
            </div>
            <div id="accordion" role="tablist">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">


                        <div class="card">

                            <!-- Card Title -->
                            <div class="card_pagee" role="tab" id="headingOne">
                                <h5 class="h5-md">
                                    <a data-toggle="collapse" href="#collapseOne" role="button" aria-expanded="true"
                                       aria-controls="collapseOne">
                                        How can i get help by inbound marketing?
                                    </a>
                                </h5>
                            </div>

                            <!-- Card Content -->
                            <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne"
                                 data-parent="#accordion" style="">
                                <div class="card-body">
                                    <div class="card_img">
                                        <img src="<?= base_url('assets/front/images/ac1.jpg') ?>" alt="img">
                                    </div>
                                    <div class="card_cntnt">
                                        <p>Morbi accumsan ipsum velit. Nam nec aks tel lus a odio tincidunt auctor. Proi
                                            gravida nibh vel velit auctor.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="card">

                            <div class="card_pagee" role="tab" id="headingTwo">
                                <h5 class="h5-md">
                                    <a class="collapsed" data-toggle="collapse" href="#collapseTwo" role="button"
                                       aria-expanded="false" aria-controls="collapseTwo">
                                        What about loan programs?
                                    </a>
                                </h5>
                            </div>

                            <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo"
                                 data-parent="#accordion" style="">
                                <div class="card-body">
                                    <div class="card_img">
                                        <img src="<?= base_url('assets/front/images/ac2.jpg') ?>" alt="img">
                                    </div>
                                    <div class="card_cntnt">
                                        <p>Morbi accumsan ipsum velit. Nam nec aks tel lus a odio tincidunt auctor. Proi
                                            gravida nibh vel velit auctor.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="card">

                            <div class="card_pagee" role="tab" id="headingThree">
                                <h5 class="h5-md">
                                    <a class="collapsed" data-toggle="collapse" href="#collapseThree" role="button"
                                       aria-expanded="false" aria-controls="collapseThree">
                                        Our Happy Clients
                                    </a>
                                </h5>
                            </div>

                            <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree"
                                 data-parent="#accordion">
                                <div class="card-body">
                                    <div class="card_img">
                                        <img src="<?= base_url('assets/front/images/ac3.jpg') ?>" alt="img">
                                    </div>
                                    <div class="card_cntnt">
                                        <p>Morbi accumsan ipsum velit. Nam nec aks tel lus a odio tincidunt auctor. Proi
                                            gravida nibh vel velit auctor.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="card">

                            <div class="card_pagee" role="tab" id="heading4">
                                <h5 class="h5-md">
                                    <a class="collapsed" data-toggle="collapse" href="#collapse41" role="button"
                                       aria-expanded="false" aria-controls="collapse41">
                                        Get Training From Experts
                                    </a>
                                </h5>
                            </div>

                            <div id="collapse41" class="collapse" role="tabpanel" aria-labelledby="heading4"
                                 data-parent="#accordion">
                                <div class="card-body">
                                    <div class="card_img">
                                        <img src="<?= base_url('assets/front/images/ac1.jpg') ?>" alt="img">
                                    </div>
                                    <div class="card_cntnt">
                                        <p>Morbi accumsan ipsum velit. Nam nec aks tel lus a odio tincidunt auctor. Proi
                                            gravida nibh vel velit auctor.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="card">

                            <div class="card_pagee" role="tab" id="heading7">
                                <h5 class="h5-md">
                                    <a class="collapsed" data-toggle="collapse" href="#collapseT" role="button"
                                       aria-expanded="false" aria-controls="collapseT">
                                        User Guide: Getting Started
                                    </a>
                                </h5>
                            </div>

                            <div id="collapseT" class="collapse" role="tabpanel" aria-labelledby="heading7"
                                 data-parent="#accordion">
                                <div class="card-body">
                                    <div class="card_img">
                                        <img src="<?= base_url('assets/front/images/ac3.jpg') ?>" alt="img">
                                    </div>
                                    <div class="card_cntnt">
                                        <p>Morbi accumsan ipsum velit. Nam nec aks tel lus a odio tincidunt auctor. Proi
                                            gravida nibh vel velit auctor.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">

                        <div class="card">

                            <!-- Card Title -->
                            <div class="card_pagee" role="tab" id="headingfour">
                                <h5 class="h5-md">
                                    <a class="collapsed" data-toggle="collapse" href="#collapse1" role="button"
                                       aria-expanded="false" aria-controls="collapse1">
                                        What about loan programs?
                                    </a>
                                </h5>
                            </div>

                            <!-- Card Content -->
                            <div id="collapse1" class="collapse" role="tabpanel" aria-labelledby="headingfour"
                                 data-parent="#accordion" style="">
                                <div class="card-body">
                                    <div class="card_img">
                                        <img src="<?= base_url('assets/front/images/ac1.jpg') ?>" alt="img">
                                    </div>
                                    <div class="card_cntnt">
                                        <p>Morbi accumsan ipsum velit. Nam nec aks tel lus a odio tincidunt auctor. Proi
                                            gravida nibh vel velit auctor.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="card">

                            <div class="card_pagee" role="tab" id="headingfive">
                                <h5 class="h5-md">
                                    <a class="collapsed" data-toggle="collapse" href="#collapse2" role="button"
                                       aria-expanded="false" aria-controls="collapse2">
                                        Unlimited Features & Unique Layouts
                                    </a>
                                </h5>
                            </div>

                            <div id="collapse2" class="collapse" role="tabpanel" aria-labelledby="headingfive"
                                 data-parent="#accordion" style="">
                                <div class="card-body">
                                    <div class="card_img">
                                        <img src="<?= base_url('assets/front/images/ac2.jpg') ?>" alt="img">
                                    </div>
                                    <div class="card_cntnt">
                                        <p>Morbi accumsan ipsum velit. Nam nec aks tel lus a odio tincidunt auctor. Proi
                                            gravida nibh vel velit auctor.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="card">

                            <div class="card_pagee" role="tab" id="headingnine">
                                <h5 class="h5-md">
                                    <a class="collapsed" data-toggle="collapse" href="#collapse02" role="button"
                                       aria-expanded="false" aria-controls="collapse02">
                                        Clean and Unique
                                    </a>
                                </h5>
                            </div>

                            <div id="collapse02" class="collapse" role="tabpanel" aria-labelledby="headingnine"
                                 data-parent="#accordion" style="">
                                <div class="card-body">
                                    <div class="card_img">
                                        <img src="<?= base_url('assets/front/images/ac2.jpg') ?>" alt="img">
                                    </div>
                                    <div class="card_cntnt">
                                        <p>Morbi accumsan ipsum velit. Nam nec aks tel lus a odio tincidunt auctor. Proi
                                            gravida nibh vel velit auctor.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="card">

                            <div class="card_pagee" role="tab" id="headingten">
                                <h5 class="h5-md">
                                    <a class="collapsed" data-toggle="collapse" href="#collapse092" role="button"
                                       aria-expanded="false" aria-controls="collapse092">
                                        Deeply Customisable Theme
                                    </a>
                                </h5>
                            </div>

                            <div id="collapse092" class="collapse" role="tabpanel" aria-labelledby="headingten"
                                 data-parent="#accordion" style="">
                                <div class="card-body">
                                    <div class="card_img">
                                        <img src="<?= base_url('assets/front/images/ac2.jpg') ?>" alt="img">
                                    </div>
                                    <div class="card_cntnt">
                                        <p>Morbi accumsan ipsum velit. Nam nec aks tel lus a odio tincidunt auctor. Proi
                                            gravida nibh vel velit auctor.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="card">

                            <div class="card_pagee" role="tab" id="headingsiz">
                                <h5 class="h5-md">
                                    <a class="collapsed" data-toggle="collapse" href="#collapse3" role="button"
                                       aria-expanded="false" aria-controls="collapse3">
                                        How do I use the features ?
                                    </a>
                                </h5>
                            </div>

                            <div id="collapse3" class="collapse" role="tabpanel" aria-labelledby="headingsiz"
                                 data-parent="#accordion">
                                <div class="card-body">
                                    <div class="card_img">
                                        <img src="<?= base_url('assets/front/images/ac3.jpg') ?>" alt="img">
                                    </div>
                                    <div class="card_cntnt">
                                        <p>Morbi accumsan ipsum velit. Nam nec aks tel lus a odio tincidunt auctor. Proi
                                            gravida nibh vel velit auctor.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="card">

                            <div class="card_pagee" role="tab" id="headingseven">
                                <h5 class="h5-md">
                                    <a class="collapsed" data-toggle="collapse" href="#collapse31" role="button"
                                       aria-expanded="false" aria-controls="collapse31">
                                        Pixel perfect and responsive
                                    </a>
                                </h5>
                            </div>

                            <div id="collapse31" class="collapse" role="tabpanel" aria-labelledby="headingseven"
                                 data-parent="#accordion">
                                <div class="card-body">
                                    <div class="card_img">
                                        <img src="<?= base_url('assets/front/images/ac2.jpg') ?>" alt="img">
                                    </div>
                                    <div class="card_cntnt">
                                        <p>Morbi accumsan ipsum velit. Nam nec aks tel lus a odio tincidunt auctor. Proi
                                            gravida nibh vel velit auctor.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="card">

                            <div class="card_pagee" role="tab" id="headingeight">
                                <h5 class="h5-md">
                                    <a class="collapsed" data-toggle="collapse" href="#collapse32" role="button"
                                       aria-expanded="false" aria-controls="collapse32">
                                        Imagination Is The Beginning
                                    </a>
                                </h5>
                            </div>

                            <div id="collapse32" class="collapse" role="tabpanel" aria-labelledby="headingeight"
                                 data-parent="#accordion">
                                <div class="card-body">
                                    <div class="card_img">
                                        <img src="<?= base_url('assets/front/images/ac1.jpg') ?>" alt="img">
                                    </div>
                                    <div class="card_cntnt">
                                        <p>Morbi accumsan ipsum velit. Nam nec aks tel lus a odio tincidunt auctor. Proi
                                            gravida nibh vel velit auctor.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12">
                <div class="about_btn calc_btn faqq_btn float_left">
                    <ul>
                        <li>
                            <a href="#" data-toggle="modal" data-target="#myModal">ask questions ?</a>
                        </li>
                    </ul>
                </div>
                <div class="modal fade question_modal" id="myModal" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="sv_question_pop float_left">
                                        <h1>ask questions ? </h1>
                                        <div class="search_alert_box float_left">

                                            <div class="apply_job_form">

                                                <input type="text" name="full_name" placeholder="full name">
                                            </div>
                                            <div class="apply_job_form">

                                                <input type="text" name="Email" placeholder="Enter Your Email">
                                            </div>
                                            <div class="apply_job_form">

                                                <input type="text" name="subject" placeholder="your question">
                                            </div>
                                            <div class="apply_job_form">
                                                <textarea class="form-control" name="message"
                                                          placeholder="Message"></textarea>
                                            </div>
                                        </div>
                                        <div class="question_sec float_left">
                                            <div class="about_btn calc_btn faqq_btn ques_Btn">
                                                <ul>
                                                    <li>
                                                        <a href="#">apply now</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="cancel_wrapper">
                                                <a href="#" class="" data-dismiss="modal">cancel</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FAQ wrapper end -->
    <div class="global_community_wrapper newsletter_wrapper float_left">
        <div class="container">
            <div class="row">
                <div class="global_comm_wraper news_cntnt">
                    <h1>Join Our Newsletter</h1>
                    <p>Put your investing ideas into action with full range of investments.</p>
                    <div class="save_newsletter_field">
                        <input type="text" placeholder="Enter Your Email">
                        <button type="submit">subscribe</button>
                    </div>
                </div>
                <div class="zero_balance_wrapper">
                    <div class="zero_commisition refreal_commison_section">
                        <h1>Refferal Commission</h1>
                        <p>Get On First Level Refferal Commission </p>
                        <div class="about_btn refreal_btn float_left">
                            <h3>50%</h3>
                            <ul>
                                <li>
                                    <a href="#">get link</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
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
                                    <img src="<?= base_url('assets/front/images/partner1.png') ?>"
                                         class="img-responsive" alt="img">
                                </div>

                            </div>
                            <div class="item">

                                <div class="partner_img_wrapper float_left">
                                    <img src="<?= base_url('assets/front/images/partner2.png') ?>"
                                         class="img-responsive" alt="img">
                                </div>

                            </div>
                            <div class="item">

                                <div class="partner_img_wrapper float_left">
                                    <img src="<?= base_url('assets/front/images/partner3.png') ?>"
                                         class="img-responsive" alt="img">
                                </div>

                            </div>
                            <div class="item">

                                <div class="partner_img_wrapper float_left">
                                    <img src="<?= base_url('assets/front/images/partner4.png') ?>"
                                         class="img-responsive" alt="img">
                                </div>

                            </div>
                            <div class="item">

                                <div class="partner_img_wrapper float_left">
                                    <img src="<?= base_url('assets/front/images/partner2.png') ?>"
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
    <!-- footer section start-->
<?= $this->endSection() ?>