<?php
/**
 * Front page template for the Serene Ho Profile theme.
 *
 * This renders the original static sereneho.html file (with local
 * image URL rewrites) specifically for the site homepage, so that
 * other templates (pages, posts, archives) can use normal
 * WordPress rendering.
 */

// Path to the static HTML file inside this theme.
$static_file = __DIR__ . '/sereneho.html';

if ( file_exists( $static_file ) ) {
	// Load the static HTML contents.
	$html = file_get_contents( $static_file );

	// Base URL to this theme (e.g. http://localhost/Serene-Ho/wp-content/themes/sereneho-theme)
	$theme_uri = get_stylesheet_directory_uri();

	/**
	 * Rewrite external image URLs to local theme paths.
	 */

	// Example: https://able.imgix.net/sereneho/22112770133635.jpg?q=70
	// becomes: [theme_uri]/assets/images/sereneho/22112770133635.jpg?q=70
	$html = str_replace(
		'https://able.imgix.net/sereneho/',
		$theme_uri . '/assets/images/sereneho/',
		$html
	);

	// Handle protocol-relative URLs as well, if present: //able.imgix.net/sereneho/...
	$html = str_replace(
		'//able.imgix.net/sereneho/',
		$theme_uri . '/assets/images/sereneho/',
		$html
	);

	// Handle the "sereheho" variant used on some images (e.g. hero image):
	// https://able.imgix.net/sereheho/40831673614669.jpg?w=1050&h=1050&fit=crop&q=70
	// -> [theme_uri]/assets/images/sereheho/40831673614669.jpg?w=1050&h=1050&fit=crop&q=70
	$html = str_replace(
		'https://able.imgix.net/sereheho/',
		$theme_uri . '/assets/images/sereheho/',
		$html
	);

	// Protocol-relative version: //able.imgix.net/sereheho/...
	$html = str_replace(
		'//able.imgix.net/sereheho/',
		$theme_uri . '/assets/images/sereheho/',
		$html
	);

	// Output the modified static HTML document.
	echo $html;
} else {
	// Fallback message if the static file is missing.
	status_header( 500 );
	?><!doctype html>
	<html>
	<head>
		<meta charset="utf-8">
		<title>Serene Ho</title>
	</head>
	<body>
		<p>The static profile page file could not be found in the theme directory.</p>
	</body>
	</html><?php
}


