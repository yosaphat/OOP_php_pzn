<?php

require_once "helper/MathHelper.php";

use Helper\MathHelper;

echo MathHelper::$name . PHP_EOL;

MathHelper::$name = "yosaphat ananda"; //stat
echo MathHelper::$name . PHP_EOL;

$result = MathHelper::sum(10,22,33,3,33); //static function
echo "Result: $result" . PHP_EOL;