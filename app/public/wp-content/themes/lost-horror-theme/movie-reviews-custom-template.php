
<?php
/*
Template Name: Reviews Page
 */

get_header();
?>
<div class="scroll">
<h2>Latest Reviews</h2>
<?php
while (have_posts()) {
    ?>
    <?php the_post();?>
    <?php $thumb = get_the_post_thumbnail_url(get_the_ID(), 'full');?>
    <div class="postCard" style="background-image: url('<?php echo $thumb; ?>') ">

        <h2><?php the_title()?></h2>
        <?php (the_excerpt())?>
        <a href="<?php the_permalink();?>">Read more...</a>
    </div>
<?php

}

?>

</div>
<?php

get_footer();

?>