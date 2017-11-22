<?php 

register_nav_menus( array(
 	'menu' => 'Menu superior',
 	'menu_footer' => 'Menu footer',
 	'primary' => __( 'Primary Menu', 'THEMENAME' )
));

if ( ! file_exists( get_template_directory() . '/wp-bootstrap-navwalker.php' ) ) {
	// file does not exist... return an error.
	return new WP_Error( 'wp-bootstrap-navwalker-missing', __( 'It appears the wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
} else {
	// file exists... require it.
    require_once get_template_directory() . '/wp-bootstrap-navwalker.php';
}

add_action('wp_head', 'mbe_wp_head');
function mbe_wp_head(){
    echo '<style>'
    .PHP_EOL
    .'body{ padding-top: 70px !important; }'
    .PHP_EOL
    .'body.body-logged-in .navbar-fixed-top{ top: 46px !important; }'
    .PHP_EOL
    .'body.logged-in .navbar-fixed-top{ top: 46px !important; }'
    .PHP_EOL
    .'@media only screen and (min-width: 783px) {'
    .PHP_EOL
    .'body{ padding-top: 40px !important; }'
    .PHP_EOL
    .'body.body-logged-in .navbar-fixed-top{ top: 28px !important; }'
    .PHP_EOL
    .'body.logged-in .navbar-fixed-top{ top: 28px !important; }'
    .PHP_EOL
    .'}</style>'
    .PHP_EOL;
}

add_theme_support( 'post-thumbnails');
	add_image_size( 'list_articles_thumbs', 420, 350, true );
	add_image_size('single-thumbs', 900, 450, true);

    register_sidebar(array(
    'name' => 'Sidebar',
    'before_widget' => '<section class="widget">',
    'after_widget' => '</section>',
    'before_title' => '<h3>',
    'after_title' => '</h3>'
    ));

    register_sidebar(array(
    'name' => 'Footer 1',
    'before_widget' => '<section class="widget">',
    'after_widget' => '</section>',
    'before_title' => '<h3>',
    'after_title' => '</h3>'
    ));

    register_sidebar(array(
    'name' => 'Footer 2',
    'before_widget' => '<section class="widget">',
    'after_widget' => '</section>',
    'before_title' => '<h3>',
    'after_title' => '</h3>'
    ));

    register_sidebar(array(
    'name' => 'Footer 3',
    'before_widget' => '<section class="widget">',
    'after_widget' => '</section>',
    'before_title' => '<h3>',
    'after_title' => '</h3>'
    ));

 ?>