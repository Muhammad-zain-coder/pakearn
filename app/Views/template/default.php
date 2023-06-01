<!doctype html>
<html lang="en">
<head>
    
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9290247061099445"
     crossorigin="anonymous"></script>

<!-- Google Tag Manager -->
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-1E6S01W2J8"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-1E6S01W2J8');
</script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/front/css/bootstrap.min.css'); ?>">
    <link href="<?= base_url('assets/front/css/fontawesome.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('assets/front/css/all.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('assets/front/css/style.css'); ?>" rel="stylesheet">
    <style>
        .navbar-nav {
            margin-left: auto;
            margin-right: 0px !important;
        }
    </style>
    <title><?= $this->renderSection('title') ?></title>
</head>
<body class="d-flex flex-column min-vh-100">
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PV3ZQQQ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<nav class="navbar navbar-expand-lg  navbar-dark fixed-top bg-danger position-relative ">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url(); ?>">Pak Earn</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?= base_url(); ?>"><i class="fas fa-home"></i>
                        Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="<?= base_url('/how-to-use'); ?>"> <i class="fas fa-info"></i> How
                        to use</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="<?= base_url('/payment-methods'); ?>"><i class="fas fa-dollar"></i>
                        Payment Methods</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="<?= base_url('/payment-methods'); ?>"><i class="fas fa-dollar"></i>
                        Contact Us</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-user"></i> Account
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="<?= env('app.baseURL'); ?>account/login">Login</a></li>
                        <li><a class="dropdown-item" href="<?= env('app.baseURL'); ?>account/register">Register</a></li>
                        <li><a class="dropdown-item" href="<?= env('app.baseURL'); ?>account/dashboard">Dashboard</a>
                        </li>
                        <li><a class="dropdown-item" href="<?= env('app.baseURL'); ?>account/logout">logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<?= $this->renderSection('content') ?>
<footer class="footer bg-dark py-4 mt-auto">
    <div class="container text-center">
        <a href="" class="text-white footer-copyright">&copy; 2022 Pakearn. </a><span class="text-muted "> All Rights Are Reserved. Developed by <a
                    href="https://wa.me/923314174980" class="footer-copyright">Zedinfinity solutions</a></span>
    </div>
</footer>
<!--Section: Contact v.2-->
<script src="<?= base_url('assets/front/js/bootstrap.min.js'); ?>"></script>
<script src="<?= base_url('assets/front/js/jquery.js'); ?>"></script>
</body>
</html>