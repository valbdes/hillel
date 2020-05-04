<?php

class Product
{
    private $name;
    private $value;

    public function set($name, $value)
    {
        $this->name = $name;
        $this->value = $value;
    }

    public function getName()
    {
        return $this->name;
    }
}
class ProductHandling
{
    public  static function save(Product $product)
    {
        
    }
    public static function update(Product $product)
    {

    }
    public static function delete(Product $product)
    {

    }
}

class DisplayProduct
{
    public static function show(Product $product)
    {
        
    }
    public static function print(Product $product)
    {

    }
}

$product = new Product();

$product->set('Name', 33);

ProductHandling::save($product)