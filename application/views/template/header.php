<!doctype html>
<html lang="en">

<head>
  <!-- xxx Basics xxx -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- xxx Change With Your Information xxx -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no" />
  <!-- <title>Home • Bank Unisritama</title> -->
  <title>Bank Unisritama - <?php echo $page; ?></title>
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('assets/') ?>images/ico.png">
  <!-- Core Css Stylesheets -->
  <link href="<?php echo base_url('assets/') ?>css/base.css" rel="stylesheet">
  <!-- REVOLUTION STYLE SHEETS -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/') ?>rev-slider/revolution/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/') ?>rev-slider/revolution/fonts/font-awesome/css/font-awesome.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/') ?>rev-slider/revolution/css/settings.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/') ?>rev-slider/revolution/css/layers.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/') ?>rev-slider/revolution/css/navigation.css">
  <link href="<?= base_url('assets/'); ?>css/base.css" rel="stylesheet">
  <style type="text/css">
    .carousel {
      background: #2f4357;
      /* margin-top: 100px; */
    }

    .carousel .item {
      min-height: 180px;
      /* Prevent carousel from being distorted if for some reason image doesn't load */
    }

    .carousel .item img {
      margin: 0 auto;
      /* Align slide image horizontally center */
      max-height: 180px;
      width: 80%;
    }

    .bd-example {
      margin: 0px;
    }
  </style>
</head>

<body>

  <!-- Page loader Start -->
  <div id="pageloader">
    <div class="loader-item">
      <div class="loader">
        <div class="spin"></div>
        <div class="bounce"></div>
      </div>
    </div>
  </div>
  <!-- Page loader End -->

  <header class="fixed-top header-fullpage top-border top-transparent wow fadeInDown">
    <div class="top-bar-right d-flex align-items-center text-md-left">
      <div class="container">
        <div class="row align-items-center">
          <div class="col">
            <i class="icofont-location-pin"></i> Jl. Soekarno-Hatta No. 03, Pekanbaru
            <!-- <i class="icofont-institution"></i>  Jl. Soekarno-Hatta No. 03, Pekanbaru -->
          </div>
          <div class="col-md-auto">
            <span class="mr-3"><i class="icofont-phone"></i> (0761) - 63381</span>
            <span class="mr-3"><i class="icofont-ui-email"></i> unisritama@yahoo.co.id</span>
            <!-- Topbar Language Dropdown Start -->
            <div class="dropdown d-inline-flex lang-toggle shadow-sm">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-hover="dropdown" data-animations="slideInUp slideInUp slideInUp slideInUp">
                <span class="d-inline-block d-lg-none">Kunjungi Kami</span>
                <span class="d-none d-lg-inline-block">Kunjungi Kami</span> <i class="icofont-rounded-down"></i>
              </a>
              <div class="dropdown-menu dropdownhover-bottom dropdown-menu-right" role="menu">
                <a class="dropdown-item active" href="#"><i class="icofont-instagram"></i> Instagram</a>
                <a class="dropdown-item" href="#"><i class="icofont-facebook"></i> Facebook</a>
                <a class="dropdown-item" href="#"><i class="icofont-whatsapp"></i> Whatsapp&lrm;</a>
              </div>
            </div>
            <!-- Topbar Language Dropdown End -->
          </div>
        </div>
      </div>
    </div>
    <?php $this->load->view('template/menu'); ?>
  </header>