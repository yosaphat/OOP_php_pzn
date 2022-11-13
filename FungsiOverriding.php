<?php 

require_once "data/Manager.php";


$manager = new Manager();
$manager->name ="ann";
$manager->sayHello("ricky");

$vp = new VicePresident(); //memanggil class
$vp->name = "yozha";
$vp->sayHello("miko");