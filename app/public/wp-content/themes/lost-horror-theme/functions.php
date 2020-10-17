<?php

function lost_horror_files()
{
    wp_enqueue_style('lost_horror_main_styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'lost_horror_files');

function page_titles()
{
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'page_titles');

add_theme_support('post-thumbnails');
add_theme_support('custom-background');
