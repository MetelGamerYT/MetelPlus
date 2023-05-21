<?php 
    $dsn = 'mysql:dbname=metelplus;host=localhost';
    $username = 'root';
    $password = '';
    
    $con = new PDO($dsn, $username, $password);
    $con->exec("CREATE TABLE IF NOT EXISTS users (id INT(8) NOT NULL AUTO_INCREMENT,firstname VARCHAR(255) NOT NULL,lastname VARCHAR(255) NOT NULL,email VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL,PRIMARY KEY (id))");
    $con->exec("CREATE TABLE IF NOT EXISTS movies (id INT(8) NOT NULL AUTO_INCREMENT,movie_name VARCHAR(255) NOT NULL,movie_description Text NOT NULL,movie_filename VARCHAR(255) NOT NULL, movie_thumbnail VARCHAR(255) NOT NULL,PRIMARY KEY (id))");
?>