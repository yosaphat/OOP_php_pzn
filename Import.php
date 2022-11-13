<?php
require_once ("data/Conflict.php");
require_once ("data/Helper.php");

use Data\One\Conflict; //use digunakan sebagai inport class
use function Helper\helpMe;
use const Helper\APLICATION;

$conflict1 = new Conflict();
$conflict2 = new Data\Two\Conflict();

helpMe();

echo APLICATION . PHP_EOL;