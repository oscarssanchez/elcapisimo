<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package elcapisimo
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'elcapisimo' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<div class="site-title-description">
				<?php
				the_custom_logo();
				if ( is_front_page() && is_home() ) :
					?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php esc_html( bloginfo( 'name' ) ); ?></a></h1>
					<?php
				else :
					?>
					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php esc_html ( bloginfo( 'name' ) ); ?></a></p>
					<?php
				endif;
				$elcapisimo_description = get_bloginfo( 'description', 'display' );
				if ( $elcapisimo_description || is_customize_preview() ) :
					?>
					<p class="site-description"><?php echo esc_html ( $elcapisimo_description ); /* WPCS: xss ok. */ ?></p>
				<?php endif; ?>
				<nav id="site-navigation" class="main-navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'elcapisimo' ); ?></button>
					<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					) );
					?>
				</nav><!-- #site-navigation -->
				<?php
				if ( ! is_front_page() && ! is_home() ) :
				?>
			</div>
				<div class="site-post-category">
					<h3><?php the_category( elcapisimo_category_separator() ); ?></h3>
					<hr>
				</div>
			<?php endif; ?>
		</div><!-- .site-branding -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
