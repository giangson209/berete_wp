<?php 
/* Template Name: How it works */ 
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
    <section class="box-piece">
        <div class="container">
            <div class="list-piece">
                <?php while ( has_sub_field('list_content') ) : ?>
                    <div class="item-piece text-center">
                        <h3><span><?php the_sub_field('title') ?></span></h3>
                        <div class="desc">
                            <?php the_sub_field('description') ?>
                        </div>
                        <div class="icon"><img src="<?php echo the_sub_field('icon') ?>" class="img-fluid" alt=""></div>
                    </div>
                <?php endwhile; ?>
            </div>
            <div class="btn-piecr text-center">
                <a href="<?php the_field('link') ?>">create a one-of-a-kind piece <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/arrow-right.png" class="img-fluid"></a>
            </div>
        </div>
    </section>
    <section class="box-pricing">
        <div class="container">
            <div class="content-pricing">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="txt-pricing">
                            <div class="cate-pricing"><?php the_field('title_1') ?></div>
                            <h3><?php the_field('title_2') ?></h3>
                            <div class="desc">
                                <?php the_field('desc_pricing') ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="avarta"><img src="<?php echo the_field('avarta_pricing') ?>" class="img-fluid"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="box-checkp-picing">
        <div class="container">
            <div class="t-check-price">Check what goes into pricing</div>
            <div class="list-pricing">
                <?php while ( has_sub_field('list_dinamond') ) : ?>
                    <div class="item-pricing text-center">
                        <h3><?php the_sub_field('title') ?></h3>
                        <div class="desc">
                            <?php the_sub_field('content') ?>
                        </div>
                        <div class="icon-arrow"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/arrow-2.png" class="img-fluid"></div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
    <section class="box-cost">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="avarta"><img src="<?php echo the_field('avarta_much') ?>" class="img-fluid w-100" alt=""></div>
                </div>
                <div class="col-md-6">
                    <div class="txt-cost">
                        <h3><?php the_field('title_much') ?></h3>
                        <div class="desc">
                            <?php the_field('content_much') ?>
                        </div>
                    </div>
                </div>
            </div>
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