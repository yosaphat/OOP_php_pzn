<?php 

interface HelloWorld
{
    function sayHello(): void;
}

$helloWorld = new class("yosa") implements HelloWorld{
    public string $name; //anonymous class 
    public function __construct(string $name){
        $this->name = $name;
    }

    public function sayHello(): void
    {
        echo "Hello $this->name \n" ;
    }
};

$helloWorld->sayHello();