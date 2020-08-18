<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="utf-8">
    <title><?php bloginfo('name'); wp_title(); ?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/metro.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/tooltip.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <!--[if IE]><script src="js/html5shiv.js"></script><![endif]-->
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.8.2.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/scrollbar.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.easy-ticker.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/tooltip.js"></script>
    <script typte="text/javascript">
        jQuery(document).ready(function($) {
            $("#metro-box").mCustomScrollbar({
                horizontalScroll: true,
            });
        });
    </script>
    <script type="text/javascript">
        $(function() {
            $('.demo').easyTicker({
                direction: 'up'
            });
        });
    </script>
    <?php wp_head(); ?>
</head>

<body>
    <div class="masthead">
        <div class="main_masthead">
            <div class="search" role="search">
                <form action="" method="">
                    <input type="text" name="" value="" placeholder="جستجوی کلمه مورد نظر" onfocus="this.placeholder=''" onblur="this.placeholder='جستجوی کلمه مورد نظر'">
                </form>
            </div>
            <ul>
                <li><a href="#"> درباره ی ما</a></li>
                <li><a href="#"> تماس با ما </a></li>
                <li><a href="#">تبلیغات</a></li>
            </ul>
        </div>
    </div>
    <div id="main" role='main'>
        <header>
            <nav id="header-nav" role="navigation">
                <ul>
                    <li style="background:#2c3e50"><a href="#">
                            <div class="fa fa-home fa-4x"></div>
                            <div class="nav-txt">صفحه اصلی</div>
                        </a></li>
                    <li style="background:#2980b9"><a href="#">
                            <div class="fa fa-gears fa-4x"></div>
                            <div class="nav-txt">نرم افزار</div>
                        </a></li>
                    <li style="background:#27ae60"><a href="#">
                            <div class="fa fa-gamepad fa-4x"></div>
                            <div class="nav-txt">بازی</div>
                        </a></li>
                    <li style="background:#16a085"><a href="#">
                            <div class="fa fa-pencil fa-4x"></div>
                            <div class="nav-txt">آموزش</div>
                        </a></li>
                    <li style="background:#e74c3c"><a href="#">
                            <div class="fa fa-android fa-4x"></div>
                            <div class="nav-txt">اندروید</div>
                        </a></li>
                    <li style="background:#e67e22"><a href="#">
                            <div class="fa fa-code fa-4x"></div>
                            <div class="nav-txt">توسعه وب</div>
                        </a></li>
                    <li style="background:#8e44ad"><a href="#">
                            <div class="fa fa-code-fork fa-4x"></div>
                            <div class="nav-txt">شبکه</div>
                        </a></li>
                </ul>
            </nav>
            <div class="logo"><a href="<?php bloginfo("url"); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="آکادمی وی لرن" title=""></a></div>
        </header>
        <div class="clear"></div>
