<?php

/*
 *  Load scripts and styles
 */
function load_style_script()
{
    wp_enqueue_script( 'jquery_my', get_template_directory_uri().'/js/jquery-1.10.1.min.js');
    wp_enqueue_script( 'sui-script', get_stylesheet_directory_uri() . '/js/semantic.min.js', array('jquery'), false, true );
    wp_register_script('custom', get_template_directory_uri() . '/js/custom.js', array( 'jquery' ), 1, true);
    wp_enqueue_script('custom');

    wp_enqueue_style( 'sui-style', get_stylesheet_directory_uri() . '/css/semantic.min.css' );
    wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css');
}
add_action('wp_enqueue_scripts', 'load_style_script');

/*
 *  Add support thumbnails
 */
add_theme_support('post-thumbnails');
set_post_thumbnail_size(355,233);
/*
 *  Add support SVG
 */
function cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

/*
 *  Add support logo
 */
add_theme_support( 'custom-logo' );
function addLogo ()
{
    $custom_logo_id = get_theme_mod( 'custom_logo' );
    $html = sprintf( '<a href="%1$s" class="header-logo-wrap" title="'. get_bloginfo('name') .'">%2$s</a>',
        esc_url( home_url( '/' ) ),
        wp_get_attachment_image( $custom_logo_id, array(), false, array(
                'alt' => 'Logo',
            )
        ) );

    return $html;
}
add_filter( 'get_custom_logo', 'addLogo' );

// отключаем фильтр, добавляющий лишние теги в визуальный редактор
remove_filter( 'the_content', 'wpautop' );

function deb($arr, $param = 0)
{
    if($param == 0)
        echo '<pre style="background: #eee">' .print_r($arr, true). '</pre>';
    else
        echo '<span style="background: #eee">' .var_dump($arr). '</span>';
}