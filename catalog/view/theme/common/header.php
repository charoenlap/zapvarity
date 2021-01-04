<!DOCTYPE html>
<html class="no-js css-menubar" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="html/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="html/assets/css/animate.min.css">
    <link rel="stylesheet" href="html/assets/css/meanmenu.css">
    <link rel="stylesheet" href="html/assets/css/boxicons.min.css">
    <link rel="stylesheet" href="html/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="html/assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="html/assets/css/magnific-popup.min.css">
    <link rel="stylesheet" href="html/assets/css/style.css">
    <link rel="stylesheet" href="html/assets/css/responsive.css">
    <link rel="stylesheet" href="html/assets/css/custom.css">
    <link rel="icon" type="html/assets/img/Logo_Zapp.png" href="html/assets/img/Logo_Zapp.png">

    <title><?php echo (!empty($title)?$title:NAME_WEBSITE); ?></title>

</head>
<style>
    hr {
        background-color: orange;
    }

    .pagination {
        padding: 20px;
    }

    .pagination>li>a {
        color: orange;
    }

    .pagination>li>a:focus,
    .pagination>li>a:hover,
    .pagination>li>span:focus,
    .pagination>li>span:hover {
        color: #5a5a5a;
        background-color: #eee;
        border-color: #ddd;
    }

    .img-logo {
        width: 140px;
    }

    .font-head {
        font-family: Kanit;
        src: url();
    }
</style>

<body>


    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <div class="top-header-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="top-header-social text-right">
                        <li>
                            <a href="#" class="" target="_blank">
                                <i class='bx bxl-facebook'></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="" target="_blank">
                                <i class='bx bxl-instagram'></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="" target="_blank">
                                <i class='bx bxl-twitter'></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="" target="_blank">
                                <i class='bx bxl-youtube'></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="navbar-area">
        <div class="main-responsive-nav">
            <div class="container">
                <div class="main-responsive-menu">
                    <div class="logo">
                        <a class="navbar-brand" href="<?php echo route('home'); ?>">
                            <img src="html/assets/img/Logo_Zapp-variety01.png" alt="image" class="img-logo">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-navbar">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="<?php echo route('home'); ?>">
                        <img src="html/assets/img/Logo_Zapp-variety01.png" alt="image" class="img-logo">
                    </a>
                    <div class="collapse navbar-collapse mean-menu overflow-auto" id="navbarSupportedContent">
                        <ul class="navbar-nav font-head">
                            <?php foreach ($menu as $key => $value) { ?>
                            <li class="nav-item">
                                <a href="<?PHP echo route('cat&id='.$value['id']); ?>" class="nav-link">
                                    <?php echo $value['title']; ?>
                                </a>
                            </li>
                            <?php } ?>
                            <li class="nav-item">
                                <a href="<?php echo route('video'); ?>" class="nav-link">
                                    วีดีโอ
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo route('contact'); ?>" class="nav-link">
                                    ติดต่อเรา
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>