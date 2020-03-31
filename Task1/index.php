<?php



require_once 'config.php';
require_once 'helpers.php';

$does_table_exist = tableCheck($pdo);
if ($does_table_exist) {
    echo 'Such table already exists';
    require_once 'user_form.php';
    require_once 'selectUserById.php';
} else {
    require_once 'create_table.php';
}   
