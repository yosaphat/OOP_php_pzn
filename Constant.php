<?php

require_once "data/Person.php";

define("makanan", "halal");
const APP_VERSION = "0.8";

echo makanan . PHP_EOL;

echo APP_VERSION . PHP_EOL;
echo Person::AUTHOR . PHP_EOL; 