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
<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
            <div class="me-3">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
                    <span class="icon-menu"></span>
                </button>
            </div>
            <div>
                <a class="navbar-brand brand-logo" href="<?= env('app.baseURL'); ?>/admin/dashboard">
                    <h4>PakEarn</h4>
                </a>
                <a class="navbar-brand brand-logo-mini" href="<?= env('app.baseURL'); ?>/admin/dashboard">

                </a>
            </div>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-top">
            <ul class="navbar-nav">
                <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
                    <h1 class="welcome-text">Welcome <span class="text-black fw-bold"><?= $userinfo['username']?></span></h1>
                    <h3 class="welcome-sub-text">Your project summary</h3>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">

                <li class="nav-item dropdown d-none d-lg-block user-dropdown">
                    <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                        <img class="img-xs rounded-circle" src="<?= base_url('assets/front/images/user.png')?>" alt="Profile image"> </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                        <div class="dropdown-header text-center">
                            <img class="img-md rounded-circle" src="<?= base_url('assets/front/images/user.png')?>" alt="Profile image">
                            <p class="mb-1 mt-3 font-weight-semibold"><?=$userinfo['username']?></p>
                            <p class="fw-light text-muted mb-0"><?=$userinfo['email']?></p>
                        </div>
                        <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-account-outline text-primary me-2"></i> My Profile <span class="badge badge-pill badge-danger">1</span></a>
                        <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-message-text-outline text-primary me-2"></i> Messages</a>
                        <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-calendar-check-outline text-primary me-2"></i> Activity</a>
                        <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-help-circle-outline text-primary me-2"></i> FAQ</a>
                        <a class="dropdown-item" href="<?= env('app.baseURL')?>/admin/signout"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Sign Out</a>
                    </div>
                </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
                <span class="mdi mdi-menu"></span>
            </button>
        </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_settings-panel.html -->
        <div id="right-sidebar" class="settings-panel">
            <i class="settings-close ti-close"></i>
            <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="todo-tab" data-bs-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="chats-tab" data-bs-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">CHATS</a>
                </li>
            </ul>
            <div class="tab-content" id="setting-content">
                <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
                    <div class="add-items d-flex px-3 mb-0">
                        <form class="form w-100">
                            <div class="form-group d-flex">
                                <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                                <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task">Add</button>
                            </div>
                        </form>
                    </div>
                    <div class="list-wrapper px-3">
                        <ul class="d-flex flex-column-reverse todo-list">
                            <li>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="checkbox" type="checkbox">
                                        Team review meeting at 3.00 PM
                                    </label>
                                </div>
                                <i class="remove ti-close"></i>
                            </li>
                            <li>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="checkbox" type="checkbox">
                                        Prepare for presentation
                                    </label>
                                </div>
                                <i class="remove ti-close"></i>
                            </li>
                            <li>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="checkbox" type="checkbox">
                                        Resolve all the low priority tickets due today
                                    </label>
                                </div>
                                <i class="remove ti-close"></i>
                            </li>
                            <li class="completed">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="checkbox" type="checkbox" checked>
                                        Schedule meeting for next week
                                    </label>
                                </div>
                                <i class="remove ti-close"></i>
                            </li>
                            <li class="completed">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="checkbox" type="checkbox" checked>
                                        Project review
                                    </label>
                                </div>
                                <i class="remove ti-close"></i>
                            </li>
                        </ul>
                    </div>
                    <h4 class="px-3 text-muted mt-5 fw-light mb-0">Events</h4>
                    <div class="events pt-4 px-3">
                        <div class="wrapper d-flex mb-2">
                            <i class="ti-control-record text-primary me-2"></i>
                            <span>Feb 11 2018</span>
                        </div>
                        <p class="mb-0 font-weight-thin text-gray">Creating component page build a js</p>
                        <p class="text-gray mb-0">The total number of sessions</p>
                    </div>
                    <div class="events pt-4 px-3">
                        <div class="wrapper d-flex mb-2">
                            <i class="ti-control-record text-primary me-2"></i>
                            <span>Feb 7 2018</span>
                        </div>
                        <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
                        <p class="text-gray mb-0 ">Call Sarah Graves</p>
                    </div>
                </div>
                <!-- To do section tab ends -->
                <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
                    <div class="d-flex align-items-center justify-content-between border-bottom">
                        <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
                        <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 fw-normal">See All</small>
                    </div>
                    <ul class="chat-list">
                        <li class="list active">
                            <div class="profile"><img src="images/faces/face1.jpg" alt="image"><span class="online"></span></div>
                            <div class="info">
                                <p>Thomas Douglas</p>
                                <p>Available</p>
                            </div>
                            <small class="text-muted my-auto">19 min</small>
                        </li>
                        <li class="list">
                            <div class="profile"><img src="images/faces/face2.jpg" alt="image"><span class="offline"></span></div>
                            <div class="info">
                                <div class="wrapper d-flex">
                                    <p>Catherine</p>
                                </div>
                                <p>Away</p>
                            </div>
                            <div class="badge badge-success badge-pill my-auto mx-2">4</div>
                            <small class="text-muted my-auto">23 min</small>
                        </li>
                        <li class="list">
                            <div class="profile"><img src="images/faces/face3.jpg" alt="image"><span class="online"></span></div>
                            <div class="info">
                                <p>Daniel Russell</p>
                                <p>Available</p>
                            </div>
                            <small class="text-muted my-auto">14 min</small>
                        </li>
                        <li class="list">
                            <div class="profile"><img src="images/faces/face4.jpg" alt="image"><span class="offline"></span></div>
                            <div class="info">
                                <p>James Richardson</p>
                                <p>Away</p>
                            </div>
                            <small class="text-muted my-auto">2 min</small>
                        </li>
                        <li class="list">
                            <div class="profile"><img src="images/faces/face5.jpg" alt="image"><span class="online"></span></div>
                            <div class="info">
                                <p>Madeline Kennedy</p>
                                <p>Available</p>
                            </div>
                            <small class="text-muted my-auto">5 min</small>
                        </li>
                        <li class="list">
                            <div class="profile"><img src="images/faces/face6.jpg" alt="image"><span class="online"></span></div>
                            <div class="info">
                                <p>Sarah Graves</p>
                                <p>Available</p>
                            </div>
                            <small class="text-muted my-auto">47 min</small>
                        </li>
                    </ul>
                </div>
                <!-- chat tab ends -->
            </div>
        </div>
        <!-- partial -->
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?= env('app.baseURL');?>admin/dashboard">
                        <i class="mdi mdi-grid-large menu-icon"></i>
                        <span class="menu-title">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item nav-category">Clients details</li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= env('app.baseURL')?>/admin/pendingClients"  aria-controls="form-elements">
                        <i class="menu-icon mdi mdi-card-text-outline"></i>
                        <span class="menu-title">Pending Clients</span>
                        <i class="menu-arrow"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= env('app.baseURL')?>/admin/pendingClients" aria-controls="form-elements">
                        <i class="menu-icon mdi mdi-chart-line"></i>
                        <span class="menu-title">Approved Users</span>
                        <i class="menu-arrow"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= env('app.baseURL')?>/admin/widthrawal">
                        <i class="menu-icon mdi mdi-table"></i>
                        <span class="menu-title">Withdrawal Requests</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="tables">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="pages/tables/basic-table.html">Basic table</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
                        <i class="menu-icon mdi mdi-layers-outline"></i>
                        <span class="menu-title">Icons</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="icons">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="pages/icons/mdi.html">Mdi icons</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item nav-category">pages</li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                        <i class="menu-icon mdi mdi-account-circle-outline"></i>
                        <span class="menu-title">User Pages</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="auth">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item nav-category">help</li>
                <li class="nav-item">
                    <a class="nav-link" href="http://bootstrapdash.com/demo/star-admin2-free/docs/documentation.html">
                        <i class="menu-icon mdi mdi-file-document"></i>
                        <span class="menu-title">Documentation</span>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <?php if(session()->getFlashdata('msg')):?>
                        <div class="alert alert-success`" role="alert">
                            <?= session()->getFlashdata('msg') ?>
                        </div>
                    <?php endif;?>
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Pending Approval </h4>
                                <p class="card-description">

                                </p>
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>Username</th>
                                            <th>Email</th>
                                            <th>Ticket</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                       <?php foreach ($users_data as $row) {
                                        ?>
                                           <tr>
                                            <td><?=$row->id?></td>
                                            <td><?=$row->username?></td>
                                            <td><?=$row->email?></td>
                                            <td class="text-danger"> <?=$row->ticket ?></td>
                                            <td><label class="badge badge-danger"><?=$row->status ?></label></td>
                                            <td><a href="<?php echo base_url('admin/edit/'.$row->id);?>"><i class="mdi mdi-pencil"></i></a></td>
                                        </tr>

                                       <?php
                                       }
                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
            <footer class="footer">
                <div class="d-sm-flex justify-content-center justify-content-sm-between">
                    <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Theme designed by <a href="https://wa.me/923314174980" target="_blank">Zedinfinity solutions</a></span>
                    <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © 2021. All rights reserved.</span>
                </div>
            </footer>
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
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

