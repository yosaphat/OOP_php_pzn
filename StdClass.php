<?php 

$array = [
    "firstName" => "yosaphat",
    "middleName" => "ananda",
    "lastName" => "mikola"
];

$object = (object)$array; //mengubah array menjadi object
var_dump($object);

echo "First Name $object->firstName" . PHP_EOL;
echo "Middle Name $object->middleName" . PHP_EOL;
echo "Last Name $object->lastName" . PHP_EOL;

$arrayLagi = (array) $object;
var_dump($arrayLagi);

require_once "data/Person.php";

$person = new Person("yosa", "kediri");
var_dump($person);

$arrayPerson= (array) $person; //mengubah array
var_dump($arrayPerson);