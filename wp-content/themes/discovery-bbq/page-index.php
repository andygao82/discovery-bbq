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
    <div class="banner-content">
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
            <div class="inner-wrapper">
                <img src="<?= get_field('banner_menu_popup_image')?>" alt="<?= get_field('banner_heading')?>">
            </div>
        </div>
    </div>
    <section class="main-content">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="main-content-wrapper">
                        <div class="gallery-top">
                            <div class="gallery-trigger gallery-trigger-1">
                                <img src="<?php echo get_field('our_food_image_1')?>" alt="Our Food">
                                <span class="gallery-trigger-heading">OUR FOOD +</span>
                            </div>
                            <div class="gallery-trigger gallery-trigger-2">
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
                            <div class="gallery-trigger gallery-trigger-3">
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
        <div class="booking-form">
            <div class="booking-form-wrapper">

            </div>
        </div>
        <div class="google-map">

        </div>
    </section>
    <div class="gallery gallery-1">
        <div class="wrapper">
            <ul>
                <?php for ($i = 1; $i <=10; $i++) {?>
                    <?php if( get_field('our_food_image_'.$i.'') ):?>
                    <li><img src="<?php echo get_field('our_food_image_'.$i.'')?>" alt=""></li>
                    <?php endif ?>
                <?php } ?>
            </ul>
        </div>
    </div>
    <div class="gallery gallery-2">
        <div class="wrapper">
            <ul>
                <?php for ($i = 1; $i <=10; $i++) {?>
                    <?php if( get_field('our_bar_image_'.$i.'') ):?>
                        <li><img src="<?php echo get_field('our_food_image_'.$i.'')?>" alt=""></li>
                    <?php endif ?>
                <?php } ?>
            </ul>
        </div>
    </div>
    <div class="gallery gallery-3">
        <div class="wrapper">
            <ul>
                <?php for ($i = 1; $i <=10; $i++) {?>
                    <?php if( get_field('our_ambience_image_'.$i.'') ):?>
                        <li><img src="<?php echo get_field('our_food_image_'.$i.'')?>" alt=""></li>
                    <?php endif ?>
                <?php } ?>
            </ul>
        </div>
    </div>
</div>
<?php get_footer(); ?>
