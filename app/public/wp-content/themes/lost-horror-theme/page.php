<?php
get_header();
while (have_posts()) {
    the_post();?>
    <h1 style="width: 100%; text-align: center;"><?php the_title()?></h1>
    <div><?php the_content();?></div>

    <?php
}

get_footer();

?>