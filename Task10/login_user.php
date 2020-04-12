<?php

error_reporting(E_ALL);
error_reporting(-1);
ini_set('error_reporting', E_ALL);

$userData = $_POST;
$namePatt = '/^.{1,15}$/m';
$passPatt = '/[a-zA-Zа-яА-Я,\-_\d]{8,}/m';
$emailPatt = '/[a-zA-Z0-9._-]{2,}[@]{1}[a-z-A-Z]+[.]{1}[a-zA-Z]+/';
$infoPatt = '/[A-Z]+/m';
$repPatt = '$0';

if (preg_match($namePatt, $userData['login'])) {
    echo 'Hello' . ' ' .  $userData['login'] . '<br>';
} else {
    echo 'Max length of the name 15 letters' . '<br>';
};
if (!preg_match($passPatt, $userData['password'])) {
    echo 'incorrect password' . '<br>';
} else {
    echo 'Valid password';
};
if (preg_match($emailPatt, $userData['email'])) {
    echo 'Email Correct' . '<br>';
} else {
    echo 'Incorrect email';
};

 $result = preg_replace($infoPatt, $repPatt, $userData['info']);

 echo $result;

