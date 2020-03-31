<?php

function getPDO()
{
    return new PDO(DB_DSN, DB_USER, DB_PASS, OPT);
};

$pdo = getPDO();

function tableCheck(PDO $pdo)
{
    $query = $pdo->query("SHOW TABLES LIKE 'users'");
    $tableExists = $query !== false && $query->rowCount() > 0;
    if ($tableExists == true) {
        return true;
    } else {
        return false;
    }
}

function getAllUserById(PDO $pdo)
{
    $query = "SELECT id FROM users ORDER BY id ASC ";
    $query = $pdo->query($query);
    $query = $query->fetchAll(PDO::FETCH_COLUMN);
    
    return $query;
}

