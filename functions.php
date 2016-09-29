<?php

function resources()
{
    wp_enqueue_style('style', get_stylesheet_uri());

}

add_action('wp_enqueue_scripts','resources');

//Navigations Menus

register_nav_menus(array(

        'primary' => __( 'Primary Menu'),
        'footer' => __( 'Footer Menu'),
));

add_theme_support( 'post-thumbnails' );

//Enable post type support

add_theme_support( 'post-formats', array('aside','gallery','link'));
