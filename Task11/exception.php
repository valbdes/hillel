<?php

error_reporting(E_ALL);
error_reporting(-1);
ini_set('error_reporting', E_ALL);

class User
{
    private $id;
    private $password;
    private $email;

    public function __construct($id, $password, $email)
    {
        $this->id = $id;
        $this->password = $password;
        $this->email = $email;
    }
    public function getUserData()
    {
        $userData = [
            'id'       => $this->id,
            'password' => $this->password
        ];
        return  $userData;
    }
}
class myException extends Exception
{
    public function errorMessage()
    {
        $errorMsg = 'Error in ' . $this->getFile()
            . ' on line ' . $this->getLine() . ': <b>' . $this->getMessage();
        return $errorMsg;
    }
}
$rule = '/^.{1,8}$/';
$user = new User('1dfdfdf1', 'sdsddsdsdsdsdsds', 'vadfd@gdfdfdfdfdfmail.com');
// too much if's
try {

    $message = '';
    if (!preg_match($rule, $user->getUserData()['password']) === true) {

        $message .= 'Invalid password ';
    }
    if (gettype($user->getUserData()['id']) !== 'integer') {
        $message .= "Wrong type. id shoud be integer";
    }
    if ($message != '') {
        throw new myException($message);
    } else {
        echo '<pre>' . print_r($user->getUserData(), true) . '</pre>';
    }
} catch (myException $e) {
    echo $e->errorMessage();
}
