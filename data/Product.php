<?php

class Product
{
    protected string $name;
    protected int $price;

    public function __construct(string $name, int $price)

    {
        $this->name = $name;
        $this->price = $price; //this untuk mengambil variable di class

    }
    //agar function bisa diakses yang lain
    public function getName(): string{
        return $this->name;
    }
}

class ProductDummy extends Product //extend memuat inheritance

{
    public function info()
    {
        echo "Name $this->name" . PHP_EOL;
        echo "Price $this->price" . PHP_EOL;
    }
}