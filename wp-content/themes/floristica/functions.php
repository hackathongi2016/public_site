<?php
function floristica_after_setup_theme() {
    global $content_width;

    if (!isset($content_width)) {
        $content_width = 500;
    }

    add_editor_style('editor-style.css');

    add_theme_support('automatic-feed-links');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-header', array(
        'default-image'      => get_template_directory_uri().'/images/body-back.jpg',
        'width'              => 780,
        'height'             => 235,
        'default-text-color' => 'ffffff',
        'wp-head-callback'   => 'floristica_header_style',
    ));
    add_theme_support('custom-background');
    add_theme_support('html5');

    register_nav_menu('main', 'Main navigation menu');
}
add_action('after_setup_theme', 'floristica_after_setup_theme');

register_sidebar(array('name'=>'Widgets',
	'description'=>'Widgets in this area will be shown on the right-hand side.',
	'before_widget' => '<div class="box">',
	'after_widget' => '</div>',
	'before_title'=>'<h3>',
	'after_title'=>'</h3>'));

function floristica_wp_enqueue_scripts() {
    wp_register_style('floristica-ie', get_template_directory_uri().'/ie.css');

    $GLOBALS['wp_styles']->add_data( 'floristica-ie', 'conditional', 'lte IE 8' );

    wp_enqueue_style( 'floristica-ie');

    wp_enqueue_style('floristica-style', get_stylesheet_uri());

    if ( is_singular() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action('wp_enqueue_scripts', 'floristica_wp_enqueue_scripts');

function floristica_header_style() {
    ?><style type="text/css">
        #root {
            background: url(<?php header_image(); ?>) 0 32px no-repeat;
        }
    </style><?php
}

function floristica_remove_width_attribute( $html ) {
   $html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
   return $html;
}
add_filter( 'post_thumbnail_html', 'floristica_remove_width_attribute', 10 );
add_filter( 'image_send_to_editor', 'floristica_remove_width_attribute', 10 );

function floristica_wp_title( $title, $sep ) {
    global $paged, $page;

    if ( is_feed() ) {
        return $title;
    }

    // Add the site name.
    $title .= get_bloginfo( 'name' );

    // Add the site description for the home/front page.
    $site_description = get_bloginfo( 'description', 'display' );
    if ( $site_description && ( is_home() || is_front_page() ) ) {
        $title = "$title $sep $site_description";
    }

    // Add a page number if necessary.
    if ( $paged >= 2 || $page >= 2 ) {
        $title = "$title $sep " . sprintf( __( 'Page %s', 'twentyfourteen' ), max( $paged, $page ) );
    }

    return $title;
}
add_filter( 'wp_title', 'floristica_wp_title', 10, 2 );
