<?php
/* Template Name: Home Page */
get_header();
$img_path = get_template_directory_uri( '/' );
?>
<div class="page-main">
	<section class="banner">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="banner-image">
                        <img src="<?= get_field('banner_image')?>" alt="<?= get_field('banner_heading')?>">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="banner-content" id="about-us">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="banner-content-wrapper">
                        <img src="<?= $img_path.'/images/fire.svg' ?>" alt="fire" id="banner-fire">
                        <h1 class="banner-content-heading"><?= get_field('banner_heading')?></h1>
                        <div class="banner-content-text"><?= get_field('banner_context')?></div>
                        <a href="javascript:;" id="menu-popup-btn">OUR MENU ></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="menu-pop-up">
        <div class="wrapper">
            <div id="menu-popup-close-btn" class="close-btn">
                <span></span>
                <span></span>
            </div>
            <div class="inner-wrapper">
                <img src="<?= get_field('banner_menu_popup_image')?>" alt="<?= get_field('banner_heading')?>">
            </div>
        </div>
    </div>
    <section class="main-content">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="main-content-wrapper" id="our-photo">
                        <div class="gallery-top">
                            <div class="gallery-trigger gallery-trigger-1" data-gallery="1">
                                <img src="<?php echo get_field('our_food_image_1')?>" alt="Our Food">
                                <span class="gallery-trigger-heading">OUR FOOD +</span>
                            </div>
                            <div class="gallery-trigger gallery-trigger-2"  data-gallery="2">
                                <img src="<?php echo get_field('our_bar_image_1')?>" alt="Our Food">
                                <span class="gallery-trigger-heading">OUR BAR +</span>
                            </div>
                        </div>
                        <div class="gallery-bottom">
                            <div class="contact-detail">
                                <div class="contact-detail-wrapper">
                                    <div class="contact-detail-item">
                                        <h3>OPENING HOURS</h3>
                                        <?= get_field('opening_hours')?>
                                    </div>
                                    <div class="contact-detail-item">
                                        <h3>LOCATION</h3>
                                        <?= get_field('location')?>
                                    </div>
                                    <div class="contact-detail-item">
                                        <h3>PHONE</h3>
                                        <?= get_field('phone')?>
                                    </div>
                                    <div class="social-media">
                                        <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                                        <a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="gallery-trigger gallery-trigger-3"  data-gallery="3">
                                <img src="<?php echo get_field('our_ambience_image_1')?>" alt="Our Food">
                                <span class="gallery-trigger-heading">OUR AMBIENCE +</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="content-bottom">
        <div class="booking-form" id="booking-form">
            <div class="booking-form-wrapper">
                <h2>BOOK A TABLE</h2>
                <?= do_shortcode('[contact-form-7 id="14" title="Contact form 1"]') ?>
                <div id="claimer">We will send you an email to confirm your booking. All bookings will be kept for 15 minutes past the reservation time.</div>
            </div>
        </div>
        <div class="google-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3150.319889855201!2d145.14925921532!3d-37.85280487974524!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad63fded70254d5%3A0xc3a86b103dadc42f!2z54Kt5omAIERpc2NvdmVyeSBGdXNpb24gQkJR!5e0!3m2!1sen!2sau!4v1606518397026!5m2!1sen!2sau" width="826" height="632" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
    </section>
    <div class="gallery gallery-1">
        <div class="outer-wrapper">
            <div class="wrapper">
                <div class="close-btn">
                    <span></span>
                    <span></span>
                </div>
                <ul>
                    <?php for ($i = 1; $i <=10; $i++) {?>
                        <?php if( get_field('our_food_image_'.$i.'') ):?>
                            <li>
                                <div class="inner-wrapper">
                                    <img src="<?php echo get_field('our_food_image_'.$i.'')?>" alt="">
                                </div>
                            </li>
                        <?php endif ?>
                    <?php } ?>
                </ul>
                <div class="slider-controller" id="slider-controller-1">
                    <span class="backFirst"><i class="fas fa-backward"></i></span>
                    <span class="prev"><i class="fas fa-step-backward"></i></span>
                    <span class="next"><i class="fas fa-step-forward"></i></span>
                    <span class="goLast"><i class="fas fa-forward"></i></span>
                </div>
            </div>
        </div>
    </div>
    <div class="gallery gallery-2">
        <div class="outer-wrapper">
            <div class="wrapper">
                <div class="close-btn">
                    <span></span>
                    <span></span>
                </div>
                <ul>
                    <?php for ($i = 1; $i <=10; $i++) {?>
                        <?php if( get_field('our_bar_image_'.$i.'') ):?>
                            <li>
                                <div class="inner-wrapper">
                                 <img src="<?php echo get_field('our_bar_image_'.$i.'')?>" alt="">
                                </div>
                            </li>
                        <?php endif ?>
                    <?php } ?>
                </ul>
                <div class="slider-controller" id="slider-controller-2">
                    <span class="backFirst"><i class="fas fa-backward"></i></span>
                    <span class="prev"><i class="fas fa-step-backward"></i></span>
                    <span class="next"><i class="fas fa-step-forward"></i></span>
                    <span class="goLast"><i class="fas fa-forward"></i></span>
                </div>
            </div>
        </div>
    </div>
    <div class="gallery gallery-3">
        <div class="outer-wrapper">
            <div class="wrapper">
                <div class="close-btn">
                    <span></span>
                    <span></span>
                </div>
                <ul>
                    <?php for ($i = 1; $i <=10; $i++) {?>
                        <?php if( get_field('our_ambience_image_'.$i.'') ):?>
                            <li>
                                <div class="inner-wrapper">
                                    <img src="<?php echo get_field('our_ambience_image_'.$i.'')?>" alt="">
                                </div>
                            </li>
                        <?php endif ?>
                    <?php } ?>
                </ul>
                <div class="slider-controller" id="slider-controller-3">
                    <span class="backFirst"><i class="fas fa-backward"></i></span>
                    <span class="prev"><i class="fas fa-step-backward"></i></span>
                    <span class="next"><i class="fas fa-step-forward"></i></span>
                    <span class="goLast"><i class="fas fa-forward"></i></span>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
