<?php

require_once 'config.php';
require_once 'helpers.php';
$userData = $_POST;

$query = "INSERT INTO users (name, surname, age, email, phone) VALUES (:name, :surname, :age, :email, :phone)";
$query = $pdo->prepare($query);
$query->execute($userData);
?>
<a href="index.php">go back</a>