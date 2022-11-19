<?php

namespace Data\Traits;

trait SayGoodbye
{
    public function goodBye(?string $name): void
    {
        if (is_null($name)) {
            echo "good bye" . PHP_EOL;
        } else {
            echo "goodbye $name " . PHP_EOL;
        }
    }
}

trait SayHello
{
    public function hello(?string $name): void
    {
        if (is_null($name)) {
            echo "Hello " . PHP_EOL;
        } else {
            echo "Hello $name" . PHP_EOL;
        }
    }}

trait HasName
{
    public string $name;
}

trait CanRun
{
    abstract public function run(): void;
}

class ParentPerson
{
    public function goodBye(?string $name): void
    {
        echo "Good bye in Person" . PHP_EOL;
    }

    public function hello(?string $name): void
    {
        echo "Hello in Person " . PHP_EOL;
    }
}

trait All
{
    use SayHello, SayGoodbye, CanRun {
        //bisa di override
        //hello as pivate;
        //goodbye as private;
    }
}

class Person extends ParentPerson
{
    use All;
    public function run(): void
    {
        echo "Person $this->name is running" . PHP_EOL;
    }
}
