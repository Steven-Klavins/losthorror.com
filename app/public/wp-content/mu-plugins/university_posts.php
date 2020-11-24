
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

    register_post_type('Practical Effects', array(
        'public' => true,
        'labels' => array(
            'name' => 'Practical Effects',
            'add_new_item' => "Add A Practical Effects Post",
            'edit_item' => "Edit Practical Effects Post",
            'all_items' => 'All Practical Effects Posts',
            'singular_name' => 'Practical Effects',
        ),
        'menu_icon' => 'dashicons-art',
    ));

    register_post_type('Archive', array(
        'public' => true,
        'labels' => array(
            'name' => 'Archive',
            'add_new_item' => "Add An Archive Item",
            'edit_item' => "Edit Archive Item",
            'all_items' => 'All Archive Items',
            'singular_name' => 'Archive Item',
        ),
        'menu_icon' => 'dashicons-open-folder',
    ));


    
}

add_action('init', 'post_types');

?>
