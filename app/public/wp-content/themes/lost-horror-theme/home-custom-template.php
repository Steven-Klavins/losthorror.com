
<?php
/*
Template Name: Home Page
 */
get_header();
?>
<div class="scroll">
<h2>Welcome!</h2>
<h3>Welcome to lost horror, home of obscure horror films from the past! </h3>
<h3>Latest Reviews </h3>
<?php
$the_query = query_posts(array(
    'posts_per_page' => '2', 'category_name' => 'movie-reviews',
));

$postslist = get_posts($the_query);
$i = 0;
foreach ($postslist as $post) {
    if (in_category('movie-reviews') and $i < 2) {
        $i += 1;
        ?>

    <?php the_post();?>
    <?php $thumb = get_the_post_thumbnail_url(get_the_ID(), 'full');?>
    <div class="postCard" style="background-image: url('<?php echo $thumb; ?>') ">

        <h2><?php the_title()?></h2>
        <?php the_content();?>
        <a href="<?php the_permalink();?>">Read more...</a>
    </div>
<?php
}

}

?>
<h3>Latest News</h3>
<h3>Featured Posts</h3>
</div>
<?php

get_footer();

?>