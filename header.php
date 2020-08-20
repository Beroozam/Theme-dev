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
            <?php wp_nav_menu( array( 'theme_location' => 'top_menu' , 'container' =>  '' ) ); ?>
        </div>
    </div>
    <div id="main" role='main'>
        <header>
            <nav id="header-nav" role="navigation">
                <?php wp_nav_menu( array( 'theme_location' => 'main_menu' , 'container' => '') ); ?>
            </nav>
            <div class="logo"><a href="<?php bloginfo("url"); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="آکادمی وی لرن" title=""></a></div>
        </header>
        <div class="clear"></div>
