<?php
require_once 'config.php';
require_once 'helpers.php';
$users = getAllUserById($pdo);
?>
<h2>Get user info form</h2>
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

<h2>Delete User form</h2>
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