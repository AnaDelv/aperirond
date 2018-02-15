<?php
$host = 'localhost'; // localhost || 127.0.0.1
$port = '3306';
$db = 'aperirond';
$username = 'root';
$passwd = '';

function pdoErrors() {
    $_SESSION['error_message'] = "Erreur fatale";
    header('Location: /index.php');
}

try {
    $bdd = new PDO("mysql:host=$host;port=$port;dbname=$db", $username, $passwd);
    $bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    pdoErrors();
}