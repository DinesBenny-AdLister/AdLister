<?php

$dbc = new PDO('mysql:host=127.0.0.1;dbname=adlister_db',"adlister_user","password");

$dbc->exec(
"DROP TABLE IF EXISTS users");
$dbc->exec(
"DROP TABLE IF EXISTS ads");
$dbc->exec(
"DROP TABLE IF EXISTS tags");



$query = 
"CREATE TABLE users (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    password VARCHAR(50) NOT NULL,
    phone_number VARCHAR(13),
    user_pic VARCHAR(50),
    UNIQUE KEY (username, email),
    PRIMARY KEY (id)
)";
$dbc->exec($query);

$query =
"CREATE TABLE ads (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    
    item VARCHAR(100) NOT NULL,
    section VARCHAR(50) NOT NULL,
    price VARCHAR(6) NOT NULL,
    item_pic VARCHAR(50),
    description VARCHAR(200) NOT NULL,
    user VARCHAR(50) NOT NULL,
    
    FOREIGN KEY (user)
    REFERENCES users (username),

    PRIMARY KEY (id)
)";
$dbc->exec($query);


$query =
"CREATE TABLE tags (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    tag VARCHAR(50) NOT NULL,
    item_id INT UNSIGNED NOT NULL,

    FOREIGN KEY (item_id)
    REFERENCES ads (id),

    PRIMARY KEY (id)
)";
$dbc->exec($query);


?>
