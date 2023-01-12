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
    <link rel="stylesheet" type="text/css" title="" href="https://channel.mediacdn.vn/Magazine/web20200701032610/css/fancybox.min.css"> 
    <link rel="stylesheet" type="text/css" title="" href="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/css/lib/slick.min.css">
    <link rel="stylesheet" type="text/css" title="" href="c<?php bloginfo( 'stylesheet_directory' ); ?>/assets/ss/lib/slick-theme.min.css"> 
    <link rel="stylesheet" type="text/css" title="" href="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/css/style.css"> 
    <script type="text/javascript" src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/js/lib/jquery.min.js"></script>   

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header> 
    <div class="header-top">
        <div class="container">
            <div class="content-menu">
                <div class="row align-items-center">
                    <div class="col-md-3 col-6 col-sm-6">
                        <div class="logo"><a href=""><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/logo.png" class="img-fluid" alt=""></a></div>
                    </div>
                    <div class="col-md-9 col-6 col-sm-6">
                        <div class="h-menu text-uppercase">
                            <div class="mm-menu">
                                <!-- <ul>
                                    <li><a href="/about">ABoUT US</a></li>
                                    <li><a href="">CASES</a></li>
                                    <li><a href="">How it works</a></li>
                                    <li><a href="">CONTACT</a></li>
                                </ul> -->
                                <?php
                                    wp_nav_menu(
                                        array(
                                            'theme_location' => 'Menu',
                                            // 'menu_id'        => 'primary-menu', 
                                        )
                                    );
                                ?> 
                            </div>
                            <div class="btn-menu">
                                <a href="javascript:void(0)"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/cubic.png" class="img-fluid" alt="">menu</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="menu-tracking">
        <div class="container">
            <div class="track-top">
                <div class="row align-items-center">
                    <div class="col-md-6 col-sm-6 col-6">
                        <div class="logo"><a href="/"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/logo.png" class="img-fluid" alt=""></a></div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-6">
                        <div class="close-menu text-right"><a href="javascript:void(0)"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/cubic.png" class="img-fluid" alt="">Close</a></div>
                    </div>
                </div>
            </div>
            <div class="content-track">
                <div class="row w-100">
                    <div class="col-md-6">
                        <div class="h-track">
                            <?php
                                wp_nav_menu(
                                    array(
                                        'theme_location' => 'Menu',
                                        // 'menu_id'        => 'primary-menu', 
                                    )
                                );
                            ?> 
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="info-track">
                            <div class="skillmedia">Skillmedia</div>
                            <ul>
                                <li>RIJFSTRAAT 2, 2000 ANTWERP</li>
                                <li><a href="tel:+32 (4)XX XX XX XX">+32 (4)XX XX XX XX</a></li>
                                <li><a href="mailto:INFO@BERETEJEWELLERS.COM">INFO@BERETEJEWELLERS.COM</a></li>
                            </ul>
                            <div class="link-detail"><a href="/contact"><span>Let Connect</span> <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/arrow-right.png" class="img-fluid" alt=""></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>