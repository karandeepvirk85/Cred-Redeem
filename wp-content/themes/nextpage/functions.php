<?php
add_theme_support('post-thumbnails');
add_action( 'wp_enqueue_scripts', 'themeStyles');
add_action( 'wp_enqueue_scripts', 'themeScripts');


function themeStyles() {
    wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', false, '1.0', 'all' );
    wp_enqueue_style('bootstrap-style','https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css',false, '1.0', 'all');
}

function themeScripts() {
    wp_enqueue_script('jquery-script','https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js',false, '1.0', 'all' );
    wp_enqueue_script( 'bootstrap-scripts', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js', false, '1.0', 'all' );
    wp_enqueue_script( 'theme-scripts', get_template_directory_uri() . '/scripts/theme-front.js', false, '1.0', 'all' );
}


?>