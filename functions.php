<?php   
    if ( function_exists( 'add_theme_support' ) ) { 
    add_theme_support( 'post-thumbnails' );
    add_post_type_support( 'support', array(
    'thumbnail'
    ) );
    }
    function register_my_menus() {
         register_nav_menus(
            array(
                'top_menu' => "منوی بالا",
                'main_menu' => "منوی اصلی"
            )
         );
    }
    add_action( 'init', 'register_my_menus' );
    $args = array(
	'name'          => sprintf( __( 'Sidebar %d' ), $i ),
	'id'            => "sidebar-$i",
	'description'   => '',
	'class'         => '',
	'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => "</li>\n",
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => "</h2>\n",
    );
    register_sidebar( array(
        'name'          => 'تبلیغات وسط',
        'id'            => "behrouz_sidebar_1",
        'description'   => 'جایگاه تبلیغات وسط',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => "</h2>\n",
    ));
    register_sidebar( array(
        'name'          => 'تبلیغات سایدبار',
        'id'            => "behrouz_sidebar_2",
        'description'   => 'جایگاه تبلیغات سایدبار',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
        'before_widget' => '<section class="sidebox">',
	    'after_widget'  => '</section>',
    ));
    register_sidebar( array(
        'name'          => 'تبلیغات سایدبار2',
        'id'            => "behrouz_sidebar_3",
        'description'   => 'جایگاه تبلیغات سایدبار',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
        'before_widget' => '<section class="ads">',
	    'after_widget'  => '</section>',
    ));
    register_sidebar( array(
        'name'          => 'ابزارک فوتر',
        'id'            => "behrouz_sidebar_4",
        'description'   => 'جایگاه ابزارک فوتر سمت راست',
        'before_title'  => '<h5>',
        'after_title'   => '</h5>',
        'before_widget' => '<div class="about">',
	    'after_widget'  => '</div>',
    ));
    register_sidebar( array(
        'name'          => 'ابزارک فوتر وسط',
        'id'            => "behrouz_sidebar_5",
        'description'   => 'جایگاه ابزارک فوتر سمت وسط',
        'before_title'  => '<h5>',
        'after_title'   => '</h5>',
        'before_widget' => '<div class="social">',
	    'after_widget'  => '</div>',
    ));
    add_action( 'init', 'behrouz_create' );
    function behrouz_create() {
 
    register_post_type( 'support',
    
        array(
            'labels' => array(
                'name' => "حامیان ما",
                'singular_name' => "حامی"
            ),
            'public' => true,
            'has_archive' => true,
            // 'rewrite' => array('slug' => 'movies'),
            // 'show_in_rest' => true,
 
            )
        );
    }

    
?>