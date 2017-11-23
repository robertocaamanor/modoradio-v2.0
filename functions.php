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
    .'body{ padding-top: 40px !important; }'
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

    add_theme_support( 'html5', array(
        'comment-list',
        'search-form',
        'comment-form',
        'gallery',
        'caption',
    ) );

    function bootstrap_comment( $comment, $args, $depth ) {
        $GLOBALS['comment'] = $comment; 
        ?>
        <?php if ( $comment->comment_approved == '1' ): ?>
        <li class="media">
            <div class="media-left">
                <?php echo get_avatar( $comment ); ?>
            </div>
            <div class="media-body">
                <h4 class="media-heading"><?php comment_author_link() ?></h4>
                <time><a href="#comment-<?php comment_ID() ?>" pubdate><?php comment_date() ?> at <?php comment_time() ?></a></time>
                <?php comment_text() ?>
            </div>
        <?php endif;
    }

 ?>