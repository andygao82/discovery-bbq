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
                <div class="col-1-1">
                    <div class="footer-heading">
                        <h2>NEWSLETTER</h2>
                        <div>Sign up to Discovery Fusion BBQ Newsletter</div>
                    </div>
                    <div class="footer-newsletter-form">

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-1-1">
                    <div class="footer-bottom">
                        <div class="social-media"></div>
                        <div class="copyright">
                            &copy; <?= date('Y') ?> Discovery Fusion BBQ All Rights Reserved
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
<script>
    $(function(){
        $('#menu-icon').on('click', function () {
            $(this).toggleClass('open')
        })
    })
</script>
<?php wp_footer(); ?>

</body>
</html>
