<?php
function alex_support()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    register_nav_menu('header', 'En-têtes du menu');
}

function alex_register_assets()
{
    wp_enqueue_script( 'bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js', array( 'jquery' ), null, true );
    wp_enqueue_style( 'bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css');
}

function alex_title_separator()
{
    return '|';
}

add_action('after_setup_theme', 'alex_support');
add_action('wp_enqueue_scripts', 'alex_register_assets');

add_filter('document_title_separator', 'alex_title_separator');