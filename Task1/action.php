<?php
error_reporting(E_ALL);
error_reporting(-1);
ini_set('error_reporting', E_ALL);

require_once 'config.php';
require_once 'helpers.php';

if (!empty($_POST)) {
    $postData = $_POST;
    if(key_exists('createTable', $postData)){
        // unset($postData['createTable'])
        $query = file_get_contents(SQL_DIR . 'create.sql');
        $query = $pdo->prepare($query);
        $query->execute();
    }
}
?>
<form action="" name='create_user' method="POST"></form>

    // $query = "INSERT INTO users (name, surname, age, email, phone) VALUES (:name, :surname, :age, :email, :phone)";
    // $query = $pdo->prepare($query);
    // $query->execute($userData);