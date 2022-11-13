<?php


require_once "data/Person.php";

$person = new person("yosa", "kediri");
$person->name = "yosa";
$person->address = "kediriii";

var_dump($person); 


echo "Name : $person->name" . PHP_EOL;
echo "address : $person->address" . PHP_EOL;
echo "address : $person->country" . PHP_EOL;

$person2 = new Person("yosa", null);
$person2->name = "yosa";
$person2->adress = null;

var_dump($person2);