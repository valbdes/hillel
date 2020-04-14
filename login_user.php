<?php

error_reporting(E_ALL);
error_reporting(-1);
ini_set('error_reporting', E_ALL);

$userData = $_POST;
$namePatt = '/^.{1,15}$/m';
$passPatt = '/[a-zA-Zа-яА-Я,\-_\d]{8,}/m';
$emailPatt = '/[a-zA-Z0-9._-]{2,}[@]{1}[a-z-A-Z]+[.]{1}[a-zA-Z]+/';
$infoPatt = '/[A-ZА-Я]+/m';
$callBack = function ($match) {
    return mb_strtolower($match[0]);
};


if (preg_match($namePatt, $userData['login'])) {
    echo 'Hello' . ' ' .  $userData['login'] . '<br>';
} else {
    echo 'Incorrect login' . '<br>';
};
if (!preg_match($passPatt, $userData['password'])) {
    echo 'Incorrect password' . '<br>';
} else {
    echo 'Valid password' . '<br>';
};
if (preg_match($emailPatt, $userData['email'])) {
    echo 'Valid email' . '<br>';
} else {
    echo 'Incorrect email' . '<br>';
};

$result = preg_replace_callback($infoPatt, $callBack, $userData['info']);

echo $result;
class Field
{
    private $name;
    private $rule;

public function __construct($name,$rule)
{
  $this->name->$name;
  $this->rule->$rule;
  
}
public function getName()
{
    return $this->name;
}

public function getRule()
{
    return $this->rule;
}


}
class Validator 
{
    private array $rule ;
    private array $field;

public  function __construct($rule, $field)
{
  $this->rule->$rule;
  $this->field->$field;

}
public  function validate()
{
    return preg_match($this->rule,$this->field);
}
}

