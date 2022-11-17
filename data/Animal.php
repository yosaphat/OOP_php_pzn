<?php

namespace Data;

// require_once "Food.php"

abstract class Animal
{
    public string $name;
    abstract public function run(): void; // abstract function cuma bisa di abstract class
}

class Cat extends Animal
{
    public function run() :void

    {    
        echo "Cat $this->name is running" .PHP_EOL;
    }
}

class Dog extends Animal
{
    public function run(): void
    {
        echo "Dog $this->name is running" . PHP_EOL;
    }


    
}