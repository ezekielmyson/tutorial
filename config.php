<?php

date_default_timezone_set('Asia/Manila');

ini_set('session.use_only_cookies', 1);
ini_set('session.use_strict_mode', 1);

session_set_cookie_params([
    'lifetime' => 1800, // set the lifetime of session cookie to 30mins
    'domain' => 'localhost',
    'path' => '/',
    'secure' => true,
    'httponly' => true,
    'samesite' => 'Strict'
]);

session_start();

$sessionInterval = 60 * 30; // session cookie interval in minutes

if (!isset($_SESSION['last_regenerate']) || time() - $_SESSION['last_regenerate'] > $sessionInterval) {

    session_regenerate_id(true);
    $_SESSION['last_regenerate'] = time();
}
