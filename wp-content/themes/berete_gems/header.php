<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package berete_gems
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link rel="stylesheet" type="text/css" title="" href="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/css/lib/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" title="" href="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/css/font-awesome.css"> 
    <link rel="stylesheet" type="text/css" title="" href="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/css/lib/slick.min.css">
    <link rel="stylesheet" type="text/css" title="" href="c<?php bloginfo( 'stylesheet_directory' ); ?>/assets/ss/lib/slick-theme.min.css"> 
    <link rel="stylesheet" type="text/css" title="" href="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/css/style.css"> 
    <script type="text/javascript" src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/js/lib/jquery.min.js"></script>   

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="d-none"> 
    <div class="header-top">
        <div class="container">
            <div class="content-menu">
                <div class="row align-items-center">
                    <div class="col-md-3">
                        <div class="logo"><a href=""><img src="images/logo.png" class="img-fluid" alt=""></a></div>
                    </div>
                    <div class="col-md-9">
                        <div class="h-menu text-uppercase">
                            <ul>
                                <li><a href="">ABoUT US</a></li>
                                <li><a href="">CASES</a></li>
                                <li><a href="">How it works</a></li>
                                <li><a href="">CONTACT</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>