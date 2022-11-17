<?php
require_once "data/Programmer.php";

$company = new Company();
$company->programmer = new Programmer ("yosa");
var_dump($company);

$company->programmer = new BackendProgrammer("yosa");
var_dump($company);

$company->programmer = new FrontendProgrammer("ann");
var_dump($company);

sayHelloProgrammer(new Programmer ("yosha"));
sayHelloProgrammer(new BackendProgrammer("annd"));
sayHelloProgrammer(new FrontendProgrammer("annds"));