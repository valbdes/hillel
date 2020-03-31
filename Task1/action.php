<?php


require_once 'config.php';
require_once 'helpers.php';

if (!empty($_POST)) {
    $postData = $_POST;
    if (key_exists('createTable', $postData)) {
        // unset($postData['createTable'])
        $query = file_get_contents(SQL_DIR . 'create.sql');
        $query = $pdo->prepare($query);
        $query->execute();
    }
}
?>
<a href="index.php">go back</a>