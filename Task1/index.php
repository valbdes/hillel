<?php



require_once 'config.php';
require_once 'helpers.php';

$does_table_exist = tableCheck($pdo);
if ($does_table_exist) {
    echo '<h1>Such table already exists</h1>';
    require_once 'userForm.php';
    require_once 'selectUserById.php';
} else {
    require_once 'createTable.php';
}
