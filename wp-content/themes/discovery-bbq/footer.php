<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package discovery_bbq
 */

?>

	<footer id="colophon" class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="footer-inner-wrapper">
                    <div class="footer-heading">
                        <h2>NEWSLETTER</h2>
                        <div>Sign up to Discovery Fusion BBQ Newsletter</div>
                    </div>
                    <div class="footer-newsletter-form">
                        <!-- Begin Mailchimp Signup Form -->
                        <div id="mc_embed_signup">
                            <form action="https://gtechsolution.us7.list-manage.com/subscribe/post?u=9465032801dd4a1dd69a1d74a&amp;id=da6d500d8c" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                <div id="mc_embed_signup_scroll">
                                    <div class="mc-field-group">
                                        <label for="mce-EMAIL" style="display: none"></label>
                                        <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="ENTER YOU EMAIL">
                                    </div>
                                    <div class="submit"><input type="submit" value="SUBMIT >" name="subscribe" id="mc-embedded-subscribe" class="button"></div>

                                    <div id="mce-responses" class="clear">
                                        <div class="response" id="mce-error-response" style="display:none"></div>
                                        <div class="response" id="mce-success-response" style="display:none"></div>
                                    </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_9465032801dd4a1dd69a1d74a_da6d500d8c" tabindex="-1" value=""></div>
                                </div>
                            </form>
                        </div>
                        <!--End mc_embed_signup-->
                    </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="footer-bottom">
                        <div class="footer-bottom-left">
                            <div class="social-media">
                                <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                                <a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            </div>
                            <div class="copyright">
                                &copy; <?= date('Y') ?> Discovery Fusion BBQ All Rights Reserved
                            </div>
                        </div>
                        <div class="dd">
                            <a href="http://ddcreative.com.au/" target="_blank">Website by D&D Creative</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</footer><!-- #colophon -->
</div><!-- #page -->
<script type="text/javascript" src="<?php echo get_template_directory_uri('/'); ?>/js/in-view.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri('/'); ?>/js/slick.min.js"></script>
<script>
    $(function(){
        var menu = $('#site-navigation');
        var caidan = $('#menu-pop-up');
        var gallery = $('.gallery');

        $('#menu-icon').on('click', function () {
            $(this).toggleClass('open');
            $('body').toggleClass('nav-in');
            menu.toggleClass('active');
        });

        $('.menu-item a').on('click', function () {
            $(this).toggleClass('open');
            $('body').removeClass('nav-in');
            $('#menu-icon').removeClass('open');
            menu.toggleClass('active');
        });

        $('#menu-item-98').on('click', function (e) {
            e.preventDefault();
            caidan.fadeIn('fast');
        });

        $('#menu-popup-close-btn').on('click', function(){
            caidan.fadeOut('fast');
        });

        $('.close-btn').on('click', function(){
            gallery.fadeOut('fast')
        });

        $('#menu-popup-btn').on('click', function(){
            caidan.fadeIn('fast');
        });

        $('#book-a-table').click(function () {
            $('html, body').animate({ scrollTop: $('.booking-form').offset().top }, 1000);
        });

        inView('.banner-content').on('enter', function(){
            $('.banner-content-wrapper').addClass('slideIn');
        });

        inView('.banner-content').on('enter', function(){
            $('#banner-fire').addClass('slideIn');
        })

        inView('.gallery-top').on('enter', function(){
            $('.gallery-trigger-1').addClass('slideIn');
            $('.gallery-trigger-2').addClass('slideIn');
        });

        inView('.gallery-bottom').on('enter', function(){
            $('.gallery-trigger-3').addClass('slideIn');
        });

        $.each([1,2,3], function(index, num){
            $('.gallery-'+ num +' ul').slick({
                slidesToShow: 1,
                prevArrow: $('#slider-controller-'+ num +' .prev'),
                nextArrow: $('#slider-controller-'+ num +' .next')
            });

            $('.gallery-'+ num +' .backFirst').on('click', function(){
                $('.gallery-'+ num +' ul').slick('slickGoTo', 0);
            });

            var totalSlides =  $('.gallery-'+ num +' ul li').length;
            var slidesNum = (totalSlides - 1)/2 - 1;

            $('.gallery-'+ num +' .goLast').on('click', function(){
                $('.gallery-'+ num +' ul').slick('slickGoTo', slidesNum);
            });
        })

        $('.gallery-trigger').on('click', function(){
            var num = $(this).data('gallery');
            console.log(num);
            $('.gallery-'+ num +'').fadeIn();
            $('.gallery-'+ num +' ul' ).get(0).slick.setPosition();
        });

    })
</script>
<?php wp_footer(); ?>

</body>
</html>
