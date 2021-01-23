<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?= $title ?></title>

  <link rel="icon" href="<?= base_url('assetsL/img/Fevicon.png'); ?>" type="image/png">

  <link rel="stylesheet" href="<?= base_url('assetsL/vendors/bootstrap/bootstrap.min.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('assetsL/vendors/fontawesome/css/all.min.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('assetsL/vendors/themify-icons/themify-icons.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('assetsL/vendors/linericon/style.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('assetsL/vendors/owl-carousel/owl.theme.default.min.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('assetsL/vendors/owl-carousel/owl.carousel.min.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('assetsL/vendors/flat-icon/font/flaticon.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('assetsL/vendors/nice-select/nice-select.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('assetsL/css/style.css'); ?>">
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
  <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
  <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>

</head>

<body class="bg-shape">

  <!--================ Header Menu Area start =================-->
  <header class="header_area">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container box_1620">
          <a class="navbar-brand logo_h" href="<?= base_url('assetsL/index.html'); ?>"><img src="<?= base_url('assetsL/img/logo2.png'); ?>" alt=""></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav justify-content-end">
              <li class="nav-item active"><a class="nav-link" href="<?= base_url('landing'); ?>">Home</a></li>
              <!-- <li class="nav-item"><a class="nav-link" href="<?= base_url('assetsL/about.html'); ?>">About</a></li>
              <li class="nav-item"><a class="nav-link" href="<?= base_url('assetsL/package.html'); ?>">Packages</a> -->

            </ul>

            <div class="nav-right text-center text-lg-right py-4 py-lg-0">
              <a class="button" href="<?= base_url('assetsL/#'); ?>">Login</a>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </header>
  <!--================Header Menu Area =================-->