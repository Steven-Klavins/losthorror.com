<?php
get_header();
?>


<?php
while (have_posts()) {
    ?>
    <div class="postCard">
    <h2><?php the_title()?></h2>

    <?php the_post();?>


    <?php the_content();?>
<a href="<?php the_permalink();?>">Read more...</a>
</div>
    <?php

}

get_footer();

?>