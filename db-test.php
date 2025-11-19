<?php
require_once __DIR__ . '/wp-config.php';

echo '<pre>';
echo \"Testing database connection...\\n\\n\";

// Try to connect using mysqli with the constants from wp-config.php
$mysqli = @new mysqli( DB_HOST, DB_USER, DB_PASSWORD, DB_NAME );

if ( $mysqli->connect_errno ) {
    echo 'Connection failed.' . \"\\n\";
    echo 'Error code: ' . $mysqli->connect_errno . \"\\n\";
    echo 'Error message: ' . $mysqli->connect_error . \"\\n\";
} else {
    echo 'Connection SUCCESSFUL.' . \"\\n\";
    echo 'Host info: ' . $mysqli->host_info . \"\\n\";
    $mysqli->close();
}

echo \"\\nDone.\";
echo '</pre>';





