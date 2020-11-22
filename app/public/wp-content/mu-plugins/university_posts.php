
<?php

function post_types()
{
    register_post_type('event', array(
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
}

add_action('init', 'post_types');

?>
