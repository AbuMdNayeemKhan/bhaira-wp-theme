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
    <div id="header_area">
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <a href="#"><img src="<?php echo get_theme_mod( 'bhaira_logo' )?>" alt="" class='img-fluid'></a>
                </div>
                <div class="col-9">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Projects</a></li>
                        <li><a href="#">Price</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
<?php wp_footer(); ?>
</body>
</html>