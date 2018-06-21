<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package elcapisimo
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( get_elcapisimo_elements_class_slug() ); ?>>
	<header class="entry-header <?php echo get_elcapisimo_header_class(); ?>">
		<?php
		if ( 'post' === get_post_type() && is_home() ) :
		?>
		<div class="entry-meta">
			<?php
			elcapisimo_posted_on();
			?>
		</div><!-- .entry-meta -->
		<div class="category-meta">
			<?php the_category( elcapisimo_category_separator() ); ?>
		</div>
		<?php endif;
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
			echo '<hr class="elcapisimo-title-separator">';
			elcapisimo_posted_by();
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif; ?>
	</header><!-- .entry-header -->

	<div class="<?php echo get_elcapisimo_content_class(); ?>">
		<div class="entry-content">
			<?php
			elcapisimo_post_thumbnail();
			if ( ! is_single() || is_home() ) {
				the_excerpt( sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'elcapisimo' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				) );
			} else {
				?>
					<div class="entry-meta">
				<?php
				elcapisimo_posted_on();
				?>
					</div><!-- .entry-meta -->
				<?php
				the_content();
			}
			?>
		</div>
			<?php

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'elcapisimo' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
