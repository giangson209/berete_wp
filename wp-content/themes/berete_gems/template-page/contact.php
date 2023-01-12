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
                                <li><?php the_field('email') ?></li>
                            </ul>
                        </div>
                        <div class="item-contact">
                            <div class="t-contact"><span>Phone</span></div>
                            <ul>
                                <li><?php the_field('address') ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-7">
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
            </div>
        </div>
    </section>
    <section class="box-maps">
        <div class="maps"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/maps.png" class="img-fluid w-100" alt=""></div>
    </section>
</main>
<?php
get_footer();  ?>