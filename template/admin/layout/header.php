<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="universal admin is super flexible, powerful, clean & modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, universal admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="assets/images/favicon.png" type="image/x-icon"/>
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon"/>
    <title>Universal - Premium Admin Template</title>

    <!--Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="<?= asset('public/admin-panel/assets/css/fontawesome.css')?>">

    <!-- ico-font -->
    <link rel="stylesheet" type="text/css" href="<?= asset('public/admin-panel/assets/css/icofont.css')?>">

    <!-- Themify icon -->
    <link rel="stylesheet" type="text/css" href="<?= asset('public/admin-panel/assets/css/themify.css')?>">
    <link rel="stylesheet" type="text/css" href="<?= asset('public/admin-panel/assets/css/prism.css')?>">
    
    <!--JSGrid css-->
    <link rel="stylesheet" type="text/css" href="<?= asset('public/admin-panel/assets/css/datatables.css')?>" />
    <!--Select2 css-->

    <link rel="stylesheet" type="text/css" href="<?= asset('public/admin-panel/assets/css/bootstrap.css')?>">
    
    <!-- DatePicker css -->
    <link rel="stylesheet" type="text/css" href="<?= asset('public/admin-panel/assets/css/date-picker.css')?>">
    <!-- App css -->
    <link rel="stylesheet" type="text/css" href="<?= asset('public/admin-panel/assets/css/style.css')?>">
    <link rel="stylesheet" type="text/css" href="<?= asset('public/admin-panel/assets/css/select2.css')?>" />
    <link rel="stylesheet" type="text/css" href="<?= asset('public/jalalidatepicker/persian-datepicker.min.css')?>" />
    <!-- Bootstrap css -->

    <!-- Responsive css -->
    <link rel="stylesheet" type="text/css" href="<?= asset('public/admin-panel/assets/css/responsive.css')?>">

</head>
<body main-theme-layout="main-theme-layout-1">

<!-- Loader starts -->
<div class="loader-wrapper">
    <div class="loader bg-white">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <h4>Have a great day at work today <span>&#x263A;</span></h4>
    </div>
</div>
<!-- Loader ends -->

<!--page-wrapper Start-->
<div class="page-wrapper">

    <!--Page Header Start-->
    <div class="page-main-header">
        <div class="main-header-left">
            <div class="logo-wrapper">
                <a href="index.html">
                    <img src="<?=asset('public/admin-panel/assets/images/logo-light.png')?>" class="image-dark" alt=""/>
                    <img src="<?=asset('public/admin-panel/assets/images/logo-light-dark-layout.png')?>" class="image-light" alt=""/>
                </a>
            </div>
        </div>
        <div class="main-header-right row">
            <div class="mobile-sidebar col-1 ps-0">
                <div class="text-start switch-sm">
                    <label class="switch">
                        <input type="checkbox" id="sidebar-toggle" checked>
                        <span class="switch-state"></span>
                    </label>
                </div>
            </div>
            <div class="nav-right col">
                <ul class="nav-menus">
                    <li>
                        <form class="form-inline search-form">
                            <div class="form-group">
                                <label class="sr-only">Email</label>
                                <input type="search"  class="form-control-plaintext" placeholder="Search.." >
                                <span class="d-sm-none mobile-search">
                                </span>
                            </div>
                        </form>
                    </li>
                    <li>
                        <a href="#!" onclick="javascript:toggleFullScreen()" class="text-dark">
                            <img class="align-self-center pull-right me-2" src="<?=asset('public/admin-panel/assets/images/dashboard/browser.png')?>" alt="header-browser">
                        </a>
                    </li>
                    <li class="onhover-dropdown">
                        <a href="#!" class="txt-dark">
                            <img class="align-self-center pull-right me-2" src="<?=asset('public/admin-panel/assets/images/dashboard/translate.png')?>" alt="header-translate">
                        </a>
                        <ul class="language-dropdown onhover-show-div p-20">
                            <li>
                                <a href="#" data-lng="en">
                                    <i class="flag-icon flag-icon-ws"></i> English
                                </a>
                            </li>
                            <li>
                                <a href="#" data-lng="es">
                                    <i class="flag-icon flag-icon-va"></i> Spanish
                                </a>
                            </li>
                            <li>
                                <a href="#" data-lng="pt">
                                    <i class="flag-icon flag-icon-id"></i> Portuguese
                                </a>
                            </li>
                            <li>
                                <a href="#" data-lng="fr">
                                    <i class="flag-icon flag-icon-fr"></i> French
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="onhover-dropdown">
                        <a href="#!" class="txt-dark">
                            <img class="align-self-center pull-right me-2" src="<?=asset('public/admin-panel/assets/images/dashboard/notification.png')?>" alt="header-notification">
                            <span class="badge rounded-pill badge-primary notification">3</span>
                        </a>
                        <ul class="notification-dropdown onhover-show-div">
                            <li>Notification <span class="badge rounded-pill badge-secondary text-white text-uppercase pull-right">3 New</span></li>
                            <li>
                                <div class="d-flex">
                                    <i class="flex-shrink-0 align-self-center notification-icon icofont icofont-shopping-cart bg-primary"></i>
                                    <div>
                                        <h6 class="mt-0">Your order ready for Ship..!</h6>
                                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                        <span><i class="icofont icofont-clock-time p-r-5"></i>Just Now</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex">
                                    <i class="flex-shrink-0 align-self-center notification-icon icofont icofont-download-alt bg-success"></i>
                                    <div>
                                        <h6 class="mt-0 txt-success">Download Complete</h6>
                                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                        <span><i class="icofont icofont-clock-time p-r-5"></i>5 minutes ago</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex">
                                    <i class="flex-shrink-0 align-self-center notification-icon icofont icofont-recycle bg-danger"></i>
                                    <div>
                                        <h6 class="mt-0 txt-danger">250 MB trush files</h6>
                                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                        <span><i class="icofont icofont-clock-time p-r-5"></i>25 minutes ago</span>
                                    </div>
                                </div>
                            </li>
                            <li class="text-center">You have Check <a href="#">all</a> notification  </li>
                        </ul>

                    </li>
                    <li class="onhover-dropdown">
                        <div class="d-flex align-items-center">
                            <img class="align-self-center pull-right flex-shrink-0 me-2" src="<?=asset('public/admin-panel/assets/images/dashboard/user.png')?>" alt="header-user"/>
                            <div>
                                <h6 class="m-0 txt-dark f-16">
                                    My Account
                                    <i class="fa fa-angle-down pull-right ms-2"></i>
                                </h6>
                            </div>
                        </div>
                        <ul class="profile-dropdown onhover-show-div p-20">
                            <li>
                                <a href="#">
                                    <i class="icon-user"></i>
                                    Edit Profile
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-email"></i>
                                    Inbox
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-check-box"></i>
                                    Task
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-comments"></i>
                                    Chat
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-power-off"></i>
                                    Logout
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <div class="d-lg-none mobile-toggle">
                    <i class="icon-more"></i>
                </div>
            </div>
        </div>
    </div>
    <!--Page Header Ends-->

    <!--Page Body Start-->
    <div class="page-body-wrapper">

        <!--Page Sidebar Start-->
        <?php require_once(BASE_PATH . '/template/admin/layout/sidebar.php');?>
        <!--Page Sidebar Ends-->

        <div class="page-body">
