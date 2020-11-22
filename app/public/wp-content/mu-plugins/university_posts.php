
<?php

function post_types()
{
    register_post_type('movie review', array(
        'public' => true,
        'labels' => array(
            'name' => 'Movie Reviews',
            'add_new_item' => "Add A New Movie Review",
            'edit_item' => "Edit Review",
            'all_items' => 'All Movie Reviews',
            'singular_name' => 'Movie Review',
        ),
        'menu_icon' => 'dashicons-welcome-write-blog',
    ));

    register_post_type('news post', array(
        'public' => true,
        'labels' => array(
            'name' => 'News',
            'add_new_item' => "Add A News Post",
            'edit_item' => "Edit News Post",
            'all_items' => 'All News Posts',
            'singular_name' => 'News',
        ),
        'menu_icon' => 'dashicons-admin-site-alt2',
    ));
}

add_action('init', 'post_types');

?>
