<?php
require_once "data/Location.php";

use Data\{Loacation, City, Province, Country};

//$location = new Location(); error karena class location abstract

$city = new City();
$province = new Province();
$country = new Country();