<?php

function getPDO()
{
    return new PDO(DB_DSN, DB_USER, DB_PASS, OPT);
};

$pdo = getPDO();

function tableCheck($pdo)
{
    $query = $pdo->query("SHOW TABLES LIKE 'users'");
    $tableExists = $query !== false && $query->rowCount() > 0;
    if ($tableExists == true) {
        echo 'Such table already exists';
    } else {
        require_once 'create_table.php';
    }
}
