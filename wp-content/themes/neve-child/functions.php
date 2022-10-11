<?php

add_action('wp_enqueue_scripts', function(){
    wp_enqueue_style('neve-child', get_stylesheet_directory_uri() . '/style.css', ['neve-style'], null, false);
});