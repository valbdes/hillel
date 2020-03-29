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
echo $emplo->getRevenue();
$emplo->increaseRevenue(300);
$student = new Student();
$student->increaseRevenue(200);
echo $student->getRevenue();

$emplo = new Employee();
echo "Employees Revenue was" . ' ' . $emplo->getRevenue();
echo '<br>';
$emplo->increaseRevenue(100);
echo "Employees Revenue now" . ' ' . $emplo->getRevenue();

echo '<br>';

$stu = new Student();
echo "Students Revenue was" . ' ' . $stu->getRevenue();
echo '<br>';
$stu->increaseRevenue(20);
echo "Students Revenue now" . ' ' . $stu->getRevenue();