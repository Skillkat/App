<?php
$server = 'localhost:3306';
$username = 'root';
$password ='';
$database = 'php_loign_database';

try {
    $conn = new PDO("mysql:host=$server; dbname=$database;", $username, $password);
} catch (PDOException $e) {
    die('Connected failed: ' . $e->getMessage());
}
?>
<!-- !!!CODIGGO PHP NO ALTERAR HASTA MEJORAR!!!-->