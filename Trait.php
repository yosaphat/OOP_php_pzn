<?php 

require_once "data/SayGoodbye.php";

use Data\Traits\{Person, SayHello, SayGoodbye};

$person = new Person();
$person->goodBye("yosa");
$person->hello("Budi");

$person->name = "yosa";
var_dump($person);

$person->run();