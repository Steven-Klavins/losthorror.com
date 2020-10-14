<?php

function lost_horror_files()
{
    wp_enqueue_style('lost_horror_main_styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'lost_horror_files');
