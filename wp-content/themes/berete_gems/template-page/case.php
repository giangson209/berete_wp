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
            <!-- <div class="content-payment">
                <div class="left">
                    <div class="avarta"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/about.jpg" class="img-fluid w-100" alt=""></div>
                </div>
                <div class="right">
                    <div class="txt-payment">
                        <div class="title">
                            <h2><span>Case 1</span></h2>
                        </div>
                        <div class="desc">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                            <p>consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                        <div class="link-detail"><a href="">Get your unique piece of jewellery <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/arrow-right.png" class="img-fluid" alt=""></a></div>
                    </div>
                </div> 
            </div>
            <div class="content-payment">
                <div class="left">
                    <div class="avarta"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/about.jpg" class="img-fluid w-100" alt=""></div>
                </div>
                <div class="right">
                    <div class="txt-payment">
                        <div class="title">
                            <h2><span>Case 2</span></h2>
                        </div>
                        <div class="desc">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                            <p>consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                        <div class="link-detail"><a href="">Get your unique piece of jewellery <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/arrow-right.png" class="img-fluid" alt=""></a></div>
                    </div>
                </div> 
            </div>
            <div class="content-payment">
                <div class="left">
                    <div class="avarta"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/about.jpg" class="img-fluid w-100" alt=""></div>
                </div>
                <div class="right">
                    <div class="txt-payment">
                        <div class="title">
                            <h2><span>Case 3</span></h2>
                        </div>
                        <div class="desc">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                            <p>consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                        <div class="link-detail"><a href="">Get your unique piece of jewellery <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/arrow-right.png" class="img-fluid" alt=""></a></div>
                    </div>
                </div> 
            </div>
            <div class="content-payment">
                <div class="left">
                    <div class="avarta"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/about.jpg" class="img-fluid w-100" alt=""></div>
                </div>
                <div class="right">
                    <div class="txt-payment">
                        <div class="title">
                            <h2><span>Case 4</span></h2>
                        </div>
                        <div class="desc">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                            <p>consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                        <div class="link-detail"><a href="">Get your unique piece of jewellery <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/arrow-right.png" class="img-fluid" alt=""></a></div>
                    </div>
                </div> 
            </div> -->
        </div>
        <div class="loadmore-case text-center">
            <a href="">VIEW MORE CASES <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/arrow-right.png" class="img-fluid" alt=""></a>
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