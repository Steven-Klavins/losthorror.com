<?php
get_header();
?>
<div class="scroll">

<h2>Latest Reviews </h2>
<?php
$the_query = query_posts(array(
    'category_name' => 'movie-reviews', 'posts_per_page' => -1,
));

$postslist = get_posts($the_query);

foreach ($postslist as $post) {
    if (in_category('movie-reviews')) {
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
</div>
<?php

get_footer();

?>


