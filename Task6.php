<?php

error_reporting(E_ALL);
error_reporting(-1);
ini_set('error_reporting', E_ALL);

trait Trait1
{
    public function method()
    {
        return 1;
    }
}

trait Trait2
{
    public function method()
    {
        return 2;
    }
}

trait Trait3
{
    public function method()
    {
        return 3;
    }
}

class Test
{
    use Trait1,
        Trait2,
        Trait3 {
        Trait1::method insteadof Trait2, Trait3;
        Trait1::method as method1;
        Trait2::method as method2;
        Trait3::method as method3;
    }
    public function getSum()
    {
        return $this->method1() + $this->method2() + $this->method3();
    }
}

$test = new Test();
echo $test->getSum();
