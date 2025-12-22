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
                    <nav class="navbar navbar-expand-lg">
  <div class="container">
    <!-- Toggle button -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Menu -->
                        <div class="collapse navbar-collapse" id="mainNavbar">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            
                            <!-- Normal nav items -->
                            <li class="nav-item">
                            <a class="nav-link active" href="#">Home</a>
                            </li>

                            <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                            </li>

                            <li class="nav-item">
                            <a class="nav-link" href="#">Services</a>
                            </li>

                            <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                            </li>

                            <!-- Dropdown -->
                                <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">More</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Blog</a></li>
                                    <li><a class="dropdown-item" href="#">Portfolio</a></li>
                                    <li><a class="dropdown-item" href="#">Careers</a></li>
                                </ul>
                                </li>
                            </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
<?php wp_footer(); ?>
</body>
</html>