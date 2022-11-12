<?php 

require_once ("data/Person.php");

$yosa = new Person(); //Person ini adalah nama class
$yosa->name = "yosa";
$yosa->sayHello("ananda");


$ann = new Person(); //Person ini adalah nama class
$ann->name = "satya";
$ann->sayHello(null);