<?php 

require_once ("data/Conflict.php");
require_once ("data/Helper.php");

use Data\One\{Conflict as Conflict1, Dummy, sample}; //membuat group untuk memanggil beberapa class di dalam namespace jadi satu biar lebih simple

use function Helper\{helpMe};

$conflict = new COnflict1();
$dummy = new Dummy();
$sample = new Sample();