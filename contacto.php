<?php
/*
Template Name: Contacto
*/

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

            <iframe src="https://www.google.com/maps/d/embed?mid=1Z_1G0V2gWCKB7YMK7dYhGPtzBDs4ipRd" width="640" height="480"></iframe>
        
            <?php echo do_shortcode('[ninja_form id=2]'); ?>

        </main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer(); ?>   