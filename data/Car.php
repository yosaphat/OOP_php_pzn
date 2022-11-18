<?php 

namespace Data;

interface HasBrand
{
    function getBrand(): string;
}

interface IsMaintenence
{
    function isMaintenance(): bool;
}


interface Car extends HasBrand

{
    function drive(): void;

    function getTire(): int;
}

class Avanza implements Car, IsMaintenence
{
    public function drive(): void
    {
        echo "Drive Avanza" . PHP_EOL;
    }

    public function getTire(): int
    {
        return 4;
    }
    public function getBrand(): string
    {
        return "Toyota";
    }
    public function isMaintenance(): bool
    {
        return false;
    }
}