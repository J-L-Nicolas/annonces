<!doctype html>
<html class="no-js" lang="fr">

<head>
    <meta charset="utf-8">
    
    <!--====== Title ======-->
    <title><?php echo $page_title ?></title>
    
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>/assets/images/favicon.ico" type="image/ico">
        
    <!--====== Animate CSS ======-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/animate.css">
        
    <!--====== Magnific Popup CSS ======-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/magnific-popup.css">
        
    <!--====== Slick CSS ======-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/slick.css">
        
    <!--====== Line Icons CSS ======-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/LineIcons.css">
        
    <!--====== Font Awesome CSS ======-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/font-awesome.min.css">
        
    <!--====== Bootstrap CSS ======-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css">
    
    <!--====== Default CSS ======-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/default.css">
    
    <!--====== Style CSS ======-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/style.css">

    <!--====== custome CSS ======-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/custome.css">
    
</head>

<body>
    <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->
  <div class="preloader">
        <div class="loader">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== PRELOADER PART ENDS ======-->
    
    <!--====== HEADER PART START ======-->
    
    <header class="header-area">
        <div class="navbar-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="<?php echo base_url(); ?>">
                                <h2 class="header-title wow fadeInUp cust-title">Les Annonces</h2>
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav ml-auto">
                                    <li class="nav-item">
                                        <a class="page-scroll <?php echo $activeMenu == 'home' ? 'active text-primary' : ''; ?>" href="<?php echo base_url(); ?>"><i class="lni lni-home"></i> Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll <?php echo $activeMenu == 'about' ? 'active text-primary' : ''; ?>" href="#about"><i class="lni lni-ticket"></i> About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll <?php echo $activeMenu == 'card' ? 'active text-primary' : ''; ?>" href="#facts"><i class="lni lni-shopping-basket"></i> Card</a>
                                    </li>
                                    <?php if (!empty($session->get()['userID'])) { ?>
                                        <li class="nav-item">
                                        <a class="page-scroll <?php echo $activeMenu == 'account' ? 'active text-primary' : ''; ?>" href="<?php echo base_url() ?>/account"><i class="lni lni-user"></i> Account</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="page-scroll text-danger" href="<?php echo base_url() ?>/signin/disconected"><i class="lni lni-exit"></i> LogOut</a>
                                        </li>
                                    <?php }else{ ?>
                                        <li class="nav-item cust-button-signin text-center">
                                            <a class="page-scroll <?php echo $activeMenu == 'signin' ? 'active text-primary' : 'text-dark'; ?>" href="<?php echo base_url() ?>/signin"><i class="lnir lni-user"></i> SignIn</a>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </div> <!-- navbar collapse -->
                      
                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- navbar area -->
        
        <div id="home" class="header-hero bg_cover" style="background-image: url(<?php echo base_url(); ?>/assets/images/banner-bg.svg); position: absolute; z-index: 0;">
            <div class="cust-spaceHeader"></div>
            <div id="particles-1" class="particles"></div>
        </div> <!-- header hero -->
    </header>
    
    <!--====== HEADER PART ENDS ======-->
        