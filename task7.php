<?php

error_reporting(E_ALL);
error_reporting(-1);
ini_set('error_reporting', E_ALL);


class User
{
    private $name;
    private $age;
    private $email;

    public function __call($name, $arguments)
    {
        if (!method_exists($this, $name)) {
            echo $name . ' - method does not exist';
        } else {
            $this->$name(implode(', ', $arguments));
        }
    }
    private function setName(string $name)
    {
        $this->name = $name;
    }
    private function setAge(int $age)
    {
        $this->age = $age;
    }
    public function getAll()
    {
        return $this->name . '-' . $this->age . '-' . $this->email;
    }
}

$user = new User;
$user->setAge(23);
$user->setName('Vladyslav');
$user->setEmail('info@gmail.com');
echo '<br>' . $user->getAll();
