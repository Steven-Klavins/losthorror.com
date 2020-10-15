<?php
get_header();
?>
<h2><?php the_title()?></h2>
<?php
while (have_posts()) {
    the_post();?>

    <?php the_content();?>
    <?php
}

get_footer();

?>