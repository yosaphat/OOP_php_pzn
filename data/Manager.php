<?php 

class Manager
{
    var string $name;

    var string $title;

    function sayHello(string $name):void{
        echo "HI $name, my name is Manager $this->name" . PHP_EOL;
    }
}

class VicePresident extends Manager{


    function sayHello(string $name):void{
        echo "HI $name, my name is VP $this->name" . PHP_EOL;
    }

}

