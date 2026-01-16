<?php
/*
 * Theme Name: Bhaira
 * Theme URI: http://example.com/bhaira
 * This template for displaying the header section of the theme.
 */
?>
<!DOCTYPE html>
<html lang="<php language_attributes(); ?>" class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header id="header_area" class=' <?php echo get_theme_mod('bhaira_menu_position')?>'>
        <div class="container">
            <div class="row">
                <div class="col-md-3 align-self-center">
                    <a href="#"><img src="<?php echo get_theme_mod( 'bhaira_logo' )?>" alt="" class='img-fluid'></a>
                </div>
                <div class="col-md-9 align-self-center">
                    <?php wp_nav_menu( array('theme_location' => 'primary_menu', 'menu_id' => 'nav-menu'));?>
                </div>
            </div>
        </div>
    </header>