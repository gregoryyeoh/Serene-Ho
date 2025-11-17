<?php
/**
 * Serene Ho Static Theme
 *
 * This minimal theme simply outputs the archived static HTML file.
 * Adjust $static_file_path below if you move the downloaded folder.
 */

// Absolute path to your downloaded static HTML file.
$static_file_path = 'C:\\Users\\gyeoh\\Downloads\\sereneho.assured.sg\\sereneho.assured.sg\\index.html';

if ( file_exists( $static_file_path ) && is_readable( $static_file_path ) ) {
    // Output the saved static page exactly as-is.
    readfile( $static_file_path );
    exit;
}

// Fallback message if the static file cannot be found.
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Serene Ho Static Theme</title>
</head>
<body>
    <h1>Static file not found</h1>
    <p>
        The static HTML file expected at:<br>
        <code><?php echo esc_html( $static_file_path ); ?></code><br>
        could not be read. Please verify the path inside
        <code>wp-content/themes/sereneho-static/index.php</code>.
    </p>
</body>
</html>


