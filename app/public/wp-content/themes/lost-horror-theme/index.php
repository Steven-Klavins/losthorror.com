<?php
get_header();
?>
<h2>Welcome!</h2>
<?php
while (have_posts()) {
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

get_footer();

?>
