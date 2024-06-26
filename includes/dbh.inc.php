<?php

include 'config.inc.php';
// $host = 'localhost';
// $dbname = '';
// $dbusername = 'root';
// $dbpassword = '';

// try {

    // $pdo = new PDO("mysql:host=$host;dbname=$dbname;",$dbusername, $dbpassword);
//     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// } catch (PDOException $e) {
//      die("connection failed". $e->getMessage());
// }

// option2 involves creating a config file that will contain all the sensitive information and using a .gitignore to hide the sensitive information

try {

    $pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
     die("connection failed". $e->getMessage());
}