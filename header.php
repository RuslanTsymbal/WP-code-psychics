<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package psychics
 */
?>


<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-
    " content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Psychics</title>
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/dist/img/favicon.png" type="image/x-icon">
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Halant" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/dist/styles/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header id="header">
        <div class="header-top">
            <div class="container-fluid">
                <div class="header-logo">
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri(); ?>/dist/img/logo.png" alt="Logo">
                    </a>
                </div>
                <div class="header-search">
                    <form method="#" action="#" class="form-search">
                        <input type="text" placeholder="Search Psychics / Services">
                        <button type="submit" class="header-search-btn">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </button>
                    </form>
                </div><!-- .header-search -->
                <div class="header-registration">
                    <button class="header-registration-btn" type="submit">
                        Register
                    </button>
                     <button class="header-registration-btn" type="submit">
                        Sign in
                    </button>
                    <button class="btn-right" type="submit">
                        Join as Psychic
                    </button>
                </div><!-- .header-registration -->
            </div><!-- .container-fluid -->
        </div><!-- .header-top -->

<!-- nav -->

        <nav>
            <div id="wrapper">
              <?php wp_nav_menu('menu=first'); ?>
            </div>

<!-- .wrapper-mobile -->

            <div id="wrapper-mobile">
                <div class="btn-group">
                   <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    MENU
                   </button>
                   <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Our Psychics</a>
                        <a class="dropdown-item" href="#">Articles</a>
                        <a class="dropdown-item" href="#">Categories</a>
                        <a class="dropdown-item" href="#">Blog</a>
                        <a class="dropdown-item" href="#">Price</a>
                        <a class="dropdown-item" href="#">Contact us</a>
                        <a class="dropdown-item" href="#">FAQ</a>
                    </div>
                </div>
            </div><!-- #wrapper-mobile -->
        </nav>
    </header><!-- #header -->
