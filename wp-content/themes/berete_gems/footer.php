<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package berete_gems
 */

?>

<footer>
    <div class="fter-top">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="txt-fter">
                        <div class="item-fter">
                            <h4>BERETE JEWELLERS HQ</h4>
                            <ul>
                                <li>RIJFSTRAAT 2</li>
                                <li>2000 Antwerp</li>
                            </ul>
                        </div>
                        <div class="item-fter">
                            <h4>CONTACT</h4>
                            <ul>
                                <li>info@beretejewellers.com</li>
                                <li>+32 (4)XX XX XX XX</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="logo-fter"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/logo-fter.png" class="img-fluid" alt=""></div>
                </div>
            </div>
        </div>
    </div>
    <div class="fter-bottom text-uppercase">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="skillmedia"><a href="" target="_blank"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/skillmedia.png" class="img-fluid" alt=""></a></div>
                </div>
                <div class="col-md-6">
                    <div class="bott-right">
                        <ul>
                            <li><a href="">Privacy policy</a></li>
                            <li><a href="">©Berete2022</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<script type="text/javascript" src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/js/lib/bootstrap.min.js"></script>
<script type="text/javascript" src="https://channel.mediacdn.vn/Magazine/web20200701032610/js/fancybox.min.js"></script>
<script type="text/javascript" src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/js/lib/slick.min.js"></script> 
<script type="text/javascript" src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/js/private.js"></script>
<?php wp_footer(); ?>

</body>
</html>
