<?php
error_reporting(E_ALL);
error_reporting(-1);
ini_set('error_reporting', E_ALL);

define("SQL_DIR", __DIR__ . '/sql/');
define('DB_HOST', 'localhost');
define('DB_DATABASE', 'task_db');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_DSN', "mysql:host=" . DB_HOST . ";dbname=" . DB_DATABASE);
$opt = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
];
define('OPT', $opt);
