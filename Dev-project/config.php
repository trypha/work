<?php
// DB credentials.
define('DB_HOST', 'localhost'); // Host name
define('DB_USER', 'funnymovie_db'); // db user name
define('DB_PASS', 'lq68-4$82on4'); // db user password name
define('DB_NAME', 'imcardsm_db'); // db name

// Establish database connection.
try {
    $connection = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    exit("Error: " . $e->getMessage());
}
