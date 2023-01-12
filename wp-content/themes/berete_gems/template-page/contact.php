<?php 
/* Template Name: Contact */ 
get_header();  ?>
<main>
    <section class="banner-about">
        <div class="caption-banner caption-contact position-relative">
            <div class="container">
                <div class="info-caption text-center">
                    <h1><?php the_field('title_banner') ?></h1>

                    <div class="desc-banner">
                        <?php the_field('content_banner') ?>
                    </div>
                    <div class="link-banner">
                        <a href="">Let’s get in touch!</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="box-contact-cate">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-5">
                    <div class="txt-contact">
                        <div class="item-contact">
                            <div class="t-contact"><span>Address</span></div>
                            <?php the_field('address') ?> 
                        </div>
                        <div class="item-contact">
                            <div class="t-contact"><span>Email </span></div>
                            <ul>
                                <li><a href="mailto:<?php the_field('email') ?>"><?php the_field('email') ?></a></li>
                            </ul>
                        </div>
                        <div class="item-contact">
                            <div class="t-contact"><span>Phone</span></div>
                            <ul>
                                <li><a href="tel:<?php the_field('phone') ?>"><?php the_field('phone') ?></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-7">
                    <?= do_shortcode('[contact-form-7 id="152" title="Contact form"]'); ?>
                </div>
            </div>
        </div>
    </section>
    <section class="box-maps">
        <div class="maps"><?php the_field('content_maps') ?></div>
    </section>
</main>
<?php
get_footer();  ?>