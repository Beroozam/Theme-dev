<?php   
    if ( function_exists( 'add_theme_support' ) ) { 
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 150, 150, true ); // default Post Thumbnail dimensions (cropped)

    // additional image sizes
    // delete the next line if you do not need additional image sizes
    add_image_size( 'category-thumb', 300, 9999 ); //300 pixels wide (and unlimited height)
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
    
?>