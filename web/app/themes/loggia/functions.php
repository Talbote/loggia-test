<?php
// namespace App;

function montheme_supports()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    register_nav_menu('header', 'En tête du menu');
}

function custom_theme_assets() {
    wp_dequeue_style( 'wp-block-library' );
}
add_action( 'wp_enqueue_scripts', 'custom_theme_assets', 100 );



function montheme_register_assets()
{
    

    wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css', []);
    wp_register_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js', []);
    wp_register_script('popper', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js', []);

    wp_register_style('aos', 'https://unpkg.com/aos@2.3.1/dist/aos.css', []);
    wp_register_script('aos', 'https://unpkg.com/aos@2.3.1/dist/aos.js', []);

    wp_register_style( 'styleLoggia', 'https://use.typekit.net/vhf3lak.css' ,[]);
    wp_register_style( 'cssslider', 'https://picbak.be/app/themes/loggia/css/ion.rangeSlider.css' ,[]);
    wp_register_style( 'cssslidermin', 'https://picbak.be/app/themes/loggia/css/ion.rangeSlider.min.css' ,[]);
    wp_register_style( 'cssMain', 'https://picbak.be/app/themes/loggia/css/main.css' ,[]);


    wp_deregister_script( 'jquery' );
    wp_register_script('njquery', 'https://code.jquery.com/jquery-3.6.0.min.js', []);
    wp_register_script('jsmain', 'https://picbak.be/app/themes/loggia/js/main.js' , []);

    wp_register_script('jsslider', 'https://picbak.be/app/themes/loggia/js/ion.rangeSlider.js' , []);
    wp_register_script('jsslidermin', 'https://picbak.be/app/themes/loggia/js/ion.rangeSlider.min.js' , []);

    wp_enqueue_style('bootstrap');
    wp_enqueue_script('bootstrap');
    wp_enqueue_script('popper');


    wp_enqueue_script('njquery');
    wp_enqueue_script('jsmain');

    wp_enqueue_style('aos');
    wp_enqueue_script('aos');


    wp_enqueue_style('styleLoggia');
    wp_enqueue_style('cssMain');

    wp_enqueue_style('cssslider');
    wp_enqueue_style('cssslidermin');

    wp_enqueue_script('jsslider');
    wp_enqueue_script('jsslidermin');




}

add_action('after_setup_theme', 'montheme_supports');
add_action('wp_enqueue_scripts', 'montheme_register_assets');




