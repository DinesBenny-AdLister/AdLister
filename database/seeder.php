<?php

USE users_db;

TRUNCATE users;

INSERT INTO users (
    username,
    email,
    phonenumber,
    password
    )

VALUES 
        ('mhmooner', 'mhmon@you.com', 2105229887, 'Poopsickle'),
        ('chicaT', 'chiquita@2day.com', 1982, 42.4, 'Pop')

?>