<?php
require_once 'config.php';
require_once 'helpers.php';
$users = getAllUserById($pdo);
?>
<h1>GEt User info</h1>
<form action="getUserInfo.php" method="GET">
    <select name="user_id">
        <?php foreach ($users as $user) : ?>
            <option value="<?php echo $user ?>">
                <?php echo $user ?>
            </option>
        <?php endforeach; ?>
    </select>
    <button>Get info</button>
</form>

<h1>Delete User</h1>
<form action="deleteUser.php" method="POST">
    <select multiple name="user_id[]">
        <?php foreach ($users as $user) : ?>
            <option value="<?php echo $user ?>">
                <?php echo $user ?>
            </option>
        <?php endforeach; ?>
    </select>
    <button>Delete User</button>
</form>
