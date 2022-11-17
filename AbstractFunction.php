<?php

require_once "data/Animal.php";

use Data\{Animal,Cat,Dog};

$cat = new Cat();
$cat->name = "dadek";
$cat->run();


$dog = new Dog();
$dog->name = "helly";
$dog->run();

