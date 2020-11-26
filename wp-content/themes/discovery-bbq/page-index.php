<?php
/* Template Name: Home Page */
get_header();
$img_path = get_template_directory_uri( '/' );
?>
<div class="page-main">
	<section class="banner">
        <div class="container">
            <div class="row">
                <div class="col-1-1">
                    <div class="banner-image">
                        <img src="<?= get_field('banner_image')?>" alt="<?= get_field('banner_heading')?>">
                    </div>
                    <div class="banner-content">
                        <div class="banner-content-wrapper">
                            <h1 class="banner-content-heading"><?= get_field('banner_heading')?></h1>
                            <div class="banner-content-text"><?= get_field('banner_context')?></div>
                            <a href="javascript:;" id="menu-popup-btn">OUR MENU ></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
                <div class="col-1-1">
                    <div class="main-content-wrapper">
                        <div class="gallery-top">
                            <div class="gallery-trigger gallery-trigger-1">
                                <span class="gallery-trigger-heading">OUR FOOD +</span>
                            </div>
                            <div class="gallery-trigger gallery-trigger-2">
                                <span class="gallery-trigger-heading">OUR FOOD +</span>
                            </div>
                        </div>
                        <div class="gallery-bottom">
                            <div class="contact-detail">
                                <div class="contact-detail-wrapper">
                                    <div class="contact-detail-item">
                                        <h3>OPENING HOURS</h3>

                                    </div>
                                    <div class="contact-detail-item">
                                        <h3>LOCATION</h3>

                                    </div>
                                    <div class="contact-detail-item">
                                        <h3>PHONE</h3>

                                    </div>
                                </div>
                            </div>
                            <div class="gallery-trigger gallery-trigger-3">
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
</div>
<?php get_footer(); ?>
