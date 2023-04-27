<!DOCTYPE html>
<html lang="en">
<?=$this->section('title') ?>
<?=$title ?>
<?=$this->endSection() ?>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?=$title?></title>
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
<div class="container" style="height: 100vh;">
    <div class="row d-flex justify-content-center align-items-center  h-100">
        <div class="col-md-4">
            <form method="post"  >
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Account #</label>

                    <input type="text" readonly class="form-control disabled" value="<?= $UserModel[0]->account?>" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Amount</label>
                    <input type="text" readonly class="form-control disabled" value="<?= $UserModel[0]->amount?>" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <select class="form-select" required name="status" aria-label="Default select example">
                        <option selected>Select the option</option>
                        <option value="approved">approved</option>

                    </select>
                </div>
                <input type="submit" class="btn btn-primary" value="Update">
            </form>
        </div>
    </div>
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

