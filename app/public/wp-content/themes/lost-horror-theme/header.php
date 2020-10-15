<!DOCTYPE html>
<html>

<head>
    <?php wp_head();?>
</head>

<body>
    <div class="navHeader">
        <h1><span>Lost</span>Horror</h1>

        <div class="navLinks">
            <a class="active" href="<?php echo site_url() ?>">Home</a>
            <a href="#news">News</a>
            <a href="#contact">Movie Reviews</a>
            <a href="#practicaleffects">Practical Effects</a>
            <a href="#thearchive">The Archive</a>
            </div>
            <div >
                <label class="burger" for = "toggle">&#9776;</label>
                <input type="checkbox" id ="toggle"/>
                <span class="sideMenu">
                <a href="<?php echo site_url() ?>">Home</a>
                    <a href="#">News</a>
                    <a href="#">Movie Reviews</a>
                    <a href="#">Practical Effects</a>
                    <a href="#">The Archive</a>
                    </span>

        </div>




    </div>

