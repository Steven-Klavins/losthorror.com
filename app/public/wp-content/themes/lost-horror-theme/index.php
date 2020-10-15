<?php
get_header();
?>
<?php
while (have_posts()) {
    ?>
    <div class="postCard">
        <?php the_post();?>
        <h2><?php the_title()?></h2>
        <?php the_content();?>
        <a href="<?php the_permalink();?>">Read more...</a>
    </div>
<?php

}

get_footer();

?>