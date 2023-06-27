<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ecommerce
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body class="m-0 p-0 mx-0 px-0" <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'ecommerce' ); ?></a>

	<header id="masthead" class="site-header px-0 mx-0">
	<div class="site-branding"></div><!-- .site-branding -->

	<nav class="d-flex flex-wrap justify-content-center py-3 mb-4 row p-0 mx-0">
		<div class="col-12 col-md-2 d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
			<?php the_custom_logo(); ?>
		</div>
		<div class="col-12 col-md-5 mx-0 px-0">
			<?php aws_get_search_form(true); ?>
		</div>
		<div class="col-12 col-md-5">
			<?php
			wp_nav_menu(array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
				'container_class' => 'ms-auto',
				'menu_class'     => 'navbar-nav'
			));
			?>
		</div>
	</nav>
</header><!-- #masthead -->


