<?php
error_reporting(E_ALL);
error_reporting(-1);
ini_set('error_reporting', E_ALL);


require_once 'config.php';
require_once 'helpers.php';

try {


    switch ($_GET['param']) {
        case 'create': {
                tableCheck($pdo);
            }
            break;
        case 'insert': {

            ?>
            <div class="form-wrapper">
            <form method="POST" action="<?php echo SITE_URL . '/handler'; ?>" class="register-form">
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email"
                           class="form-control"
                           id="email" name="email"
                           placeholder="email@email.com"
                           value="<?php echo $email ?? ''; ?>"
                           required
                    />
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Your password" required>
                </div>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text"
                           class="form-control"
                           id="name"
                           name="first_name"
                           placeholder="First Name"
                           value="<?php echo $first_name ?? ''; ?>"
                           required
                    />
                </div>

                <div class="form-group">
                    <label for="last_name">Last Name</label>
                    <input type="text"
                           class="form-control"
                           id="last_name"
                           name="last_name"
                           placeholder="Last Name"
                           value="<?php echo $last_name ?? ''; ?>"
                           required
                    />
                </div>

                <input type="submit" value="Create an account" name="register">
            </form>
        </div>
        <?php


                // $user = [
                //     'name' => 'Dimka',
                //     'surname' => 'Ogurec',
                //     'age' => 23,
                //     'email' => 'ogurec333@gmail.com',
                //     'phone' => '+380630000000'
                // ];
                // $query = "INSERT INTO users (name, surname, age, email, phone) VALUES (:name, :surname, :age, :email, :phone)";
                // $query = $pdo->prepare($query);
                // $query->execute($user);
            }
            break;
        default: {
                die('Fuckup');
            }
    }
} catch (PDOException $exception) {
    echo '<pre>' . print_r($exception->getCode() . ' - ' . $exception->getMessage(), true) . '</pre>';
    echo '<pre>' . print_r($exception->getFile() . ' - ' . $exception->getLine(), true) . '</pre>';
}
?>
<!-- <form action="action.php" method="post"> -->
<!-- <p>Ваше имя: <input type="text" name="name" /></p>
    <p>Ваш возраст: <input type="text" name="age" /></p>
    <p><input type="submit" /></p> -->
<!-- </form> -->