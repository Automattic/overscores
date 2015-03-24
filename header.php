<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Overscores
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<script src="//ajax.googleapis.com/ajax/libs/webfont/1.5.10/webfont.js"></script>
<script>
WebFont.load({
	google: {
		families: ['Karla', 'Montserrat']
	}
});
</script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<header id="masthead" class="site-header" role="banner">
		<hgroup class="site-branding">
			<h1 class="site-title"><span class="site-header-bubblewrap"><span class="site-header-bubblewrap-inner">Overscores</span></span></h1>
			<h2 class="site-description">A WordPress Content Generator</h2>
		</hgroup><!-- .site-branding -->

		<?php if ( !is_front_page() ) : ?>
			<nav id="site-navigation" class="main-navigation" role="navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php _e( 'Primary Menu', 'overscores' ); ?></button>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
			</nav><!-- #site-navigation -->
		<?php endif; ?>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
