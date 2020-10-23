<?php
get_header();
?>
<div class="scroll">

<h2>Latest Reviews </h2>
<?php

$default_posts_per_page = get_option('posts_per_page');

$args = array(
    'category_name' => 'movie-reviews',
    'orderby' => 'date',
    'order' => 'DESC',
    'posts_per_page' => $default_posts_per_page,
    'paged' => $paged,
);
$posts = query_posts($args);

while (have_posts()) {
    the_post();

    $thumb = get_the_post_thumbnail_url(get_the_ID(), 'full');?>
    <div class="postCard" style="background-image: url('<?php echo $thumb; ?>') ">

        <h2><?php the_title()?></h2>
        <?php the_content();?>
        <a href="<?php the_permalink();?>">Read more...</a>
    </div>
<?php

}

$wp_query = new WP_Query($args);
$big = 999999999;
echo paginate_links(array(
    'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
    'format' => '?paged=%#%',
    'current' => max(1, get_query_var('paged')),
    'total' => $wp_query->max_num_pages,
));
?>
</div>
<?php

get_footer();

?>


