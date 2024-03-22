<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head();?>
</head>
<body>
<header>
    <div class="container">
        <div class="hed-flx">
            <div class="head-logo"><img src="<?php echo get_template_directory_uri(); ?>/images/Logo.svg" alt="logo">
</div>
            <div class="navbar"> 
            <?php
wp_nav_menu( array(
    'theme_location' => 'primary-menu',
    'menu_class'     => 'primary-menu-class', // Optional CSS class for the menu
    // Add more parameters as needed
) );
?>
        </div> 
        <div class="sub-btn">
            <button class="btn-submt">Meet with us</button>
        </div>
    </div>
</div>
</header>






















































