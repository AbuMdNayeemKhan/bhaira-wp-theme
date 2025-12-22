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
    <div id="header_area" class=' py-3'>
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <a href="#"><img src="<?php echo get_theme_mod( 'bhaira_logo' )?>" alt="" class='img-fluid'></a>
                </div>
                <div class="col-9">
                    <?php wp_nav_menu( array('theme_location' => 'main_menu', 'menu_id' => 'nav'));?>
                </div>
                    
<?php wp_footer(); ?>
</body>
</html>