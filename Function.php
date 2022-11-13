<?php 

require_once ("data/Person.php");

$yosa = new Person("yosa", "kediri"); //Person ini adalah nama class
$yosa->name = "yosa";
$yosa->sayHello("ananda");


$ann = new Person("wahyu", "bali"); //Person ini adalah nama class
$ann->name = "satya";
$ann->sayHello(null);

$ann->info();