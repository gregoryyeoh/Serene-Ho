<?php
/**
 * Helper script to create the WordPress database using the
 * credentials already defined in wp-config.php.
 *
 * Usage:
 * 1. Make sure MySQL is running in XAMPP.
 * 2. Visit http://localhost/Serene-Ho/create-db.php in your browser.
 * 3. You should see a success or error message.
 * 4. Delete this file afterwards for security.
 */

require_once __DIR__ . '/wp-config.php';

header( 'Content-Type: text/plain; charset=utf-8' );

echo "Create WordPress database using wp-config.php settings\n";
echo "-----------------------------------------------------\n\n";

$host = DB_HOST;
$user = DB_USER;
$pass = DB_PASSWORD;
$db   = DB_NAME;

echo "Host: {$host}\n";
echo "User: {$user}\n";
echo "Database to create: {$db}\n\n";

// Connect to MySQL without selecting a database first.
$mysqli = @new mysqli( $host, $user, $pass );

if ( $mysqli->connect_errno ) {
	echo "Connection FAILED\n";
	echo "Error code: {$mysqli->connect_errno}\n";
	echo "Error message: {$mysqli->connect_error}\n";
	exit(1);
}

// Escape database name and create if not exists.
$db_escaped = $mysqli->real_escape_string( $db );
$sql        = "CREATE DATABASE IF NOT EXISTS `{$db_escaped}` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;";

echo "Running SQL:\n{$sql}\n\n";

if ( $mysqli->query( $sql ) === true ) {
	echo "SUCCESS: Database `{$db}` is ready.\n";
} else {
	echo "FAILED to create database.\n";
	echo "MySQL error: {$mysqli->error}\n";
}

$mysqli->close();

echo "\nDone. You can now visit http://localhost/Serene-Ho/ in your browser.\n";
echo "IMPORTANT: Delete this file (create-db.php) once everything works.\n";




