<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?=$this->section('title') ?>
    <?=$title ?>
    <?=$this->endSection() ?>
    <title><?= $title?></title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?= base_url('assets/back/vendors/feather/feather.css')?>"/>
    <link rel="stylesheet" href="<?= base_url('assets/back/vendors/mdi/css/materialdesignicons.min.css')?>">
    <link rel="stylesheet" href="<?= base_url('assets/back/vendors/ti-icons/css/themify-icons.css')?>">
    <link rel="stylesheet" href="<?= base_url('assets/back/vendors/typicons/typicons.css')?>">
    <link rel="stylesheet" href="<?= base_url('assets/back/vendors/simple-line-icons/css/simple-line-icons.css')?>">
    <link rel="stylesheet" href="<?= base_url('assets/back/vendors/css/vendor.bundle.base.css')?>">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="<?= base_url('assets/back/vendors/datatables.net-bs4/dataTables.bootstrap4.css')?>">
    <link rel="stylesheet" href="<?= base_url('assets/back/js/select.dataTables.min.css')?>">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="<?= base_url('assets/back/css/vertical-layout-light/style.css')?>">
    <!-- endinject -->
    <link rel="shortcut icon" href="<?= base_url('assets/back/images/favicon.png')?>" />
</head>
<body>
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth px-0">
            <div class="row w-100 mx-0">
                <div class="col-lg-4 mx-auto">
                    <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                        <?php if(session()->getFlashdata('msg')):?>
                            <div class="alert alert-danger" role="alert">
                                <?= session()->getFlashdata('msg') ?>
                            </div>
                        <?php endif;?>
                        <h1>Admin panel</h1>
                        <h6 class="fw-light">Sign in to dashboard</h6>
                        <form class="pt-3" method="post" action="<?= env('app.baseURL');?>/admin/authenticate">
                            <div class="form-group">
                                <input type="email" name="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <input type="password" name="pass" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
                            </div>
                            <div class="mt-3">
                                <input type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" value="Admin Signin" name="Sign in">
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->

<!-- plugins:js -->
<script src="<?= base_url('assets/back/vendors/js/vendor.bundle.base.js')?>"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="<?= base_url('assets/back/vendors/chart.js/Chart.min.js')?>"></script>
<script src="<?= base_url('assets/back/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')?>"></script>
<script src="<?= base_url('assets/back/vendors/progressbar.js/progressbar.min.js')?>"></script>

<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="<?= base_url('assets/back/js/off-canvas.js')?>"></script>
<script src="<?= base_url('assets/back/js/hoverable-collapse.js')?>"></script>
<script src="<?= base_url('assets/back/js/template.js')?>"></script>
<script src="<?= base_url('assets/back/js/settings.js')?>"></script>
<script src="<?= base_url('assets/back/js/todolist.js')?>"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="<?= base_url('assets/back/js/jquery.cookie.js')?>" type="text/javascript"></script>
<script src="<?= base_url('assets/back/js/dashboard.js')?>"></script>
<script src="<?= base_url('assets/back/js/Chart.roundedBarCharts.js')?>"></script>
<!-- End custom js for this page-->
</body>

</html>

