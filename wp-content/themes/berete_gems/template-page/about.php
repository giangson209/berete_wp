<?php 
/* Template Name: About */ 
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
                    <div class="link-banner">
                        <a href="<?php the_field('link_banner') ?>">CONTACT US <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/arrow-right.png" class="img-fluid" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="box-about">
        <div class="container">
            <div class="list-about">
                <?php while ( has_sub_field('list_content') ) : ?>
                    <div class="item-about">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="avarta"><img src="<?php echo the_sub_field('avarta') ?>" class="img-fluid w-100" alt=""></div>
                            </div>
                            <div class="col-md-6">
                                <div class="txt-about">
                                    <h3><?php the_sub_field('title') ?></h3>
                                    <div class="desc">
                                       <?php the_sub_field('content') ?>
                                    </div>
                                    <div class="link-detail"><a href="<?php the_sub_field('link') ?>"><span>Get your unique piece of jewellery</span> <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/arrow-right.png" class="img-fluid" alt=""></a></div>
                                </div>
                            </div>
                        </div>
                    </div> 
                <?php endwhile; ?>
            </div>
        </div>
    </section>
    <section class="box-discover pb-0">
        <div class="container">
            <div class="title text-center">
                <h2>Discover our hidden gems</h2>
            </div>
            <div class="list-gems">
                <div class="row">
                    <div class="col-md-3">
                        <div class="item-gem"><a href=""><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/gem-1.png" class="img-fluid w-100" alt=""></a></div>
                    </div>
                    <div class="col-md-3">
                        <div class="item-gem"><a href=""><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/gem-2.png" class="img-fluid w-100" alt=""></a></div>
                    </div>
                    <div class="col-md-3">
                        <div class="item-gem"><a href=""><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/gem-3.png" class="img-fluid w-100" alt=""></a></div>
                    </div>
                    <div class="col-md-3">
                        <div class="item-gem"><a href=""><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/gem-4.png" class="img-fluid w-100" alt=""></a></div>
                    </div>
                </div>
            </div>
            <div class="link-detail text-center"><a href=""><span>SHOW MORE hiddacen gems</span> <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/arrow-down.png" class="img-fluid" alt=""></a></div>
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
            <div class="frm-content">
                <div class="item">
                    <select name="" id="">
                        <option value="">SELECT YOUR BUDGET</option>
                        <option value="">5</option>
                        <option value="">10</option>
                        <option value="">15</option>
                    </select>
                </div>
                <div class="item">
                    <select name="" id="">
                        <option value="">Choose your color</option>
                        <option value="">White</option>
                        <option value="">Green</option>
                        <option value="">Pink</option>
                    </select>
                </div>
                <div class="item">
                    <select name="" id="">
                        <option value="">SELECT A SIZE</option>
                        <option value="">12</option>
                        <option value="">14</option>
                        <option value="">16</option>
                    </select>
                </div>
                <div class="item">
                    <select name="" id="">
                        <option value="">DATE OF DELIVERY</option>
                        <option value="">12</option>
                        <option value="">14</option>
                        <option value="">16</option>
                    </select>
                </div>
                <div class="item">
                    <select name="" id="">
                        <option value="">Where Will We Be Shipping Your Project?</option>
                        <option value="">12</option>
                        <option value="">14</option>
                        <option value="">16</option>
                    </select>
                </div>
                <div class="item">
                    <div class="item-file">
                        <p>Share some inspiration with us</p>
                        <input type="file" class="inp_file" id="up_file"><label for="up_file" class="mb-0">UPLOAD PHOTO</label>
                    </div>
                </div>
                <div class="item">
                    <div class="item-btn">
                        <input type="submit" class="btn_field" value="SENT">
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php
get_footer();  ?>