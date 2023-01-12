<?php 
/* Template Name: Case */ 
get_header();  ?>
<main>
    <section class="box-bannner banner-about">
        <div class="caption-banner position-relative">
            <div class="container">
                <div class="info-caption text-center">
                    <h1><?php the_field('title_banner') ?></h1>

                    <div class="desc-banner">
                       <?php the_field('content_banner') ?> 
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="box-payment">
        <div class="list-case"> 
            <?php while ( has_sub_field('list_case') ) : ?>

                <div class="content-payment">
                    <div class="left">
                        <div class="avarta"><img src="<?php echo the_sub_field('avarta') ?>" class="img-fluid w-100" alt=""></div>
                    </div>
                    <div class="right">
                        <div class="txt-payment">
                            <div class="title">
                                <h2><span><?php the_sub_field('title') ?></span></h2>
                            </div>
                            <div class="desc">
                                <?php the_sub_field('content') ?>
                            </div>
                            <div class="link-detail"><a href="<?php the_sub_field('link') ?>">Get your unique piece of jewellery <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/arrow-right.png" class="img-fluid" alt=""></a></div>
                        </div>
                    </div> 
                </div>
            <?php endwhile; ?>
        </div>
        <div class="loadmore-case text-center">
            <a href="javascript:void(0)" id="loadmore-case">VIEW MORE CASES <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/arrow-right.png" class="img-fluid" alt=""></a>
        </div>
    </section>
    <section class="box-form">
        <div class="container">
            <div class="title text-center">
                <h2><span>The perfect fit for any budget</span></h2>
            </div>
            <div class="desc-form text-center">
                <p>When it comes to rings, jewellery & diamonds, everyone wishes they “knew somebody.”</p>
                <p>Well, we’re that somebody. We’re the experts so you don’t have to be one.</p>
            </div>
            <div class="touch-form text-center"><span>Let’s get in touch!</span></div>
            <?= do_shortcode('[contact-form-7 id="152" title="Contact form"]'); ?>
        </div>
    </section>
</main>
<?php
get_footer();  ?>