<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
    <?php wp_head();?>
</head>
<meta charset="<?php bloginfo('charset')?>">

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
                <?php wp_nav_menu(array('theme_location' => 'headerMenuLocation'));?>
            </span>

        </div>
    </div>