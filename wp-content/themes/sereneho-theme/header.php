<?php
/**
 * Theme header for Serene Ho Profile.
 *
 * This is a minimal WordPress-compatible header so that
 * plugins like Elementor can hook into wp_head() and render
 * their preview correctly.
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php
if ( function_exists( 'wp_body_open' ) ) {
	wp_body_open();
}
?>


