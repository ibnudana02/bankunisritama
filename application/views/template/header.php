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
    <title>Bank Unisritama - Home</title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('assets/')?>images/ico.png">
    <!-- Core Css Stylesheets -->
    <link href="<?php echo base_url('assets/')?>css/base.css" rel="stylesheet">
    <!-- REVOLUTION STYLE SHEETS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/')?>rev-slider/revolution/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/')?>rev-slider/revolution/fonts/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/')?>rev-slider/revolution/css/settings.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/')?>rev-slider/revolution/css/layers.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/')?>rev-slider/revolution/css/navigation.css">	
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
            <i class="icofont-google-map"></i>  Jl. Soekarno-Hatta No. 03, Pekanbaru
          </div>
          <div class="col-md-auto">

            <span class="mr-3"><i class="icofont-phone"></i> (0761) - 63381</span>

            <span class="mr-3"><i class="icofont-ui-email"></i> unisritama@yahoo.co.id</span>
            <!-- Topbar Language Dropdown Start -->
            <div class="dropdown d-inline-flex lang-toggle shadow-sm">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-hover="dropdown" data-animations="slideInUp slideInUp slideInUp slideInUp">
                <img src="<?php echo base_url('assets/')?>images/us.svg" alt="" class="dropdown-item-icon"> 
                <span class="d-inline-block d-lg-none">US</span>
                <span class="d-none d-lg-inline-block">United States</span> <i class="icofont-rounded-down"></i>
              </a>
              <div class="dropdown-menu dropdownhover-bottom dropdown-menu-right" role="menu">
                <a class="dropdown-item active" href="#">English</a>
                <a class="dropdown-item" href="#">Deutsch</a>
                <a class="dropdown-item" href="#">Español&lrm;</a>
              </div>
            </div>  
            <!-- Topbar Language Dropdown End -->          
          </div>
        </div>
      </div>
    </div>
    <?php $this->load->view('template/menu');?>
  </header>

  