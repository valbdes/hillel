<?php
error_reporting(E_ALL);
error_reporting(-1);
ini_set('error_reporting', E_ALL);

class Worker
{
    private $name;
    private $salary;
    public $age;

    public function __construct(string $name, int $age, int $salary)
    {
        if ($age<18){
            throw new Exception('Sorry,you should be older');
        }
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }
    public function getName(): string
    {
        return $this->name;
    }
    public function getSalary(): int
    {
        return $this->salary;
    }
}

try{
    $worker = new Worker('Jack', 12, 1000);
echo $worker->getSalary() . '*' . $worker->age . '= ';
echo $worker->getSalary() * $worker->age;
}catch(Exception $e) {
    echo $e->getMessage();
}
