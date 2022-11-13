<?php 

require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "dadek";
$manager->sayHello("ann");

$vp =new VicePresident();
$vp->name = "ricky";
$vp->sayHello("rio");