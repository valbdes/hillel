<?php

error_reporting(E_ALL);
error_reporting(-1);
ini_set('error_reporting', E_ALL);
$userData = $_POST;
$namePatt = '/.{1,15}/m';

if (!preg_match($namePatt, $userData['login'])) {
    echo 'Hello' . $userData['login'];
} else {
    echo 'Max lengh of the name 15 letters';
};
