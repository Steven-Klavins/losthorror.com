<!DOCTYPE html>
<html>

<head>
    <?php wp_head();?>
</head>

<body <?php body_class();?>>
    <div class="navHeader">
        <h1><span>Lost</span>Horror</h1>

        <div class="navLinks">

            <?php wp_nav_menu(array('theme_location' => 'headerMenuLocation'));?>
        </div>
        <div>
            <label class="burger" for="toggle">&#9776;</label>
            <input type="checkbox" id="toggle" />
            <span class="sideMenu">
                <a href="<?php echo site_url() ?>">Home</a>
                <a href="<?php echo site_url('/news') ?>">News</a>
                <a href="<?php echo site_url('/movie-reviews') ?>">Movie Reviews</a>
                <a href="<?php echo site_url('/practical-effects') ?>">Practical Effects</a>
                <a href="<?php echo site_url('/the-archive') ?>">The Archive</a>
            </span>

        </div>
    </div>