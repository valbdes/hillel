<?php
error_reporting(E_ALL);
error_reporting(-1);
ini_set('error_reporting', E_ALL);

abstract class User
{
    abstract public function increaseRevenue();
}

class Employee extends User
{
    private $revenue = 0;
    public function increaseRevenue()
    {
        $this->revenue += 200;
    }
    public function getRevenue()
    {
        return $this->revenue;
    }
}

class Student extends User
{
    private $revenue = 0;
    public function increaseRevenue()
    {
        $this->revenue += 200;
    }

    public function getRevenue()
    {
        return $this->revenue;
    }
}

$student = new Student();
$student->increaseRevenue();
echo $student->getRevenue();
