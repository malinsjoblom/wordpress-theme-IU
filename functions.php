<?php 

function load_stylesheets() {
    // CSS
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), 1, 'all');
    wp_enqueue_style('bootstrap');
    wp_register_style('fontawesome', get_template_directory_uri() . '/css/font-awesome.css', array(), 1, 'all');
    wp_enqueue_style('fontawesome');
    wp_register_style('styles', get_template_directory_uri() . '/css/style.css', array(), 1, 'all');
    wp_enqueue_style('styles');
    }

    add_action('wp_enqueue_scripts', 'load_stylesheets');


add_theme_support( 'post-thumbnails' );


function load_scripts(){
    wp_register_script('custom', get_template_directory_uri() . '/js/jquery.js', array(), 1, 1, 1);
    wp_register_script('custom', get_template_directory_uri() . '/js/script.js', array(), 1, 1, 1);
    wp_enqueue_script('custom');
    }

add_action('wp_enqueue_scripts', 'load_scripts');


// WP Menu Function 
add_theme_support('menus');
register_nav_menus(
array(
'main-menu' => 'Main Menu',
'new-menu' => 'New Menu',
'side-menu' => 'Side Menu',
'blog-categories-menu'=> 'Blog-categories Menu')
);
