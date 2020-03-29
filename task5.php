<?php
error_reporting(E_ALL);
error_reporting(-1);
ini_set('error_reporting', E_ALL);

abstract class User
{
    abstract public function increaseRevenue(int $quantity);
}

class Employee extends User
{
    private $revenue = 500;
    public function increaseRevenue(int $quantity)
    {
        $this->revenue += $quantity;
    }
    public function getRevenue()
    {
        return $this->revenue;
    }
}

class Student extends User
{
    private $revenue = 100;
    public function increaseRevenue(int $quantity)
    {
        $this->revenue += $quantity;
    }

    public function getRevenue()
    {
        return $this->revenue;
    }
}

$emplo = new Employee();
echo 'Employee revenue before increase ' . $emplo->getRevenue() . '<br>'; 
$emplo->increaseRevenue(300);
echo 'Employee revenue after increase ' . $emplo->getRevenue() . '<br>';

$student = new Student();
echo 'Student revenue before increase ' . $student->getRevenue() . '<br>';
$student->increaseRevenue(200);
echo 'Student revenue after increase ' . $student->getRevenue() . '<br>';

