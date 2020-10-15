<?php
get_header();
?>
 <h2 ><?php the_title()?></h2>
<?php
while (have_posts()) {
    the_post();?>

    <div><?php the_content();?></div>

    <?php
}

get_footer();

?>