<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package grupodoit
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) :

		if (has_post_thumbnail()) :
		$id = get_post_thumbnail_id($post->ID);
		$big_url = wp_get_attachment_image_src($id, 'item-banner', true);
		$thumb_url = wp_get_attachment_image_src($id, 'large', true);
		?>
						
						<?php if (wp_is_mobile()) { ?>
							<figure class="post-banner blog-banner" style="background-image: url('<?php echo $thumb_url[0] ?>');">
							<?php if (!is_single()) : ?>
								<a href="<?php echo get_permalink() ?>"></a>
							
							<?php endif; ?>
						</figure>

					<?php 
			} else { ?>
						<figure class="post-banner blog-banner" style="background-image: url('<?php echo $big_url[0] ?>');">
							<?php if (!is_single()) : ?>
								<a href="<?php echo get_permalink() ?>"></a>
							
							<?php endif; ?>
						</figure>
						<?php 
				} ?>

			<?php endif; 	
		?>
		<div class="entry-meta">
			<?php
			grupodoit_posted_on();
			grupodoit_posted_by();
			?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php /*grupodoit_post_thumbnail();*/ ?>

	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->

	<footer class="entry-footer">
		<?php grupodoit_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
