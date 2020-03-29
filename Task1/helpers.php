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
        // echo 'Bullshit';
?><form action="action.php" method="post">
            <!-- <p>Ваше имя: <input type="text" name="name" /></p>
        <p>Ваш возраст: <input type="text" name="age" /></p> -->
            <p><input type="submit" value="Create Table" name="createTable" /></p>
        </form>
<?php
    }
}
