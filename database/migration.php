<?php

// require 'parks_login.php';
define("DB_HOST", '127.0.0.1');
define("DB_NAME", 'adlister_db');
define("DB_USER", 'codeup');
define("DB_PASS", 'rocks');


require 'db_connect.php';


$dbc->exec('DROP TABLE IF EXISTS users');


$query = 'CREATE TABLE users (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    first_name VARCHAR(100) NOT NULL,
    last_name VARCHAR(100) NOT NULL,
    user_name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    password VARCHAR(100) NOT NULL,
    PRIMARY KEY (id)
)';

$dbc->exec($query);

?>