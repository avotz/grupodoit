<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * Template Name: Page Retail 
 * @package grupodoit
 */

get_header();
?>

	<div class="main">
		<div class="inner">

		<?php
		while ( have_posts() ) :
			the_post();

			//get_template_part( 'template-parts/content', 'retail' );
			$postType = 'retail';
			include(locate_template('template-parts/content-slide.php'));
			

		endwhile; // End of the loop.
		?>

		</div><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
