<?php
/**
 * Main template file for the Serene Ho Profile theme.
 *
 * This theme simply outputs the static HTML page that was copied from
 * sereneho.assured.sg so it can be activated and exported across sites.
 */

// Path to the static HTML file inside this theme.
$static_file = __DIR__ . '/sereneho.html';

if ( file_exists( $static_file ) ) {
    // Output the full static HTML document.
    readfile( $static_file );
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


