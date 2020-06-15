<?php
/* Template Name: Coming Page */
get_header();
$img_path = get_template_directory_uri( '/' );

?>
	<section class="coming-soon">
        <div class="logo">
            <img src="<?php echo $img_path.'/images/logo.svg' ?>" alt="Discovery BBQ">
        </div>
        <h1><span>Website Coming Soon...</span></h1>
    </section>
    <section class="details">
        <ul>
            <li>Address - F03/172-210 Burwood Hwy, Burwood East VIC 3151</li>
            <li>Phone - 03-9803-9999</li>
            <li><i class="fa fa-instagram" aria-hidden="true"></i><span>discovery_bbq</span></li>
            <li><i class="fa fa-facebook" aria-hidden="true"></i><span>Discovery Fusion BBQ Buffet</span></li>
        </ul>
    </section>
<?php get_footer(); ?>
