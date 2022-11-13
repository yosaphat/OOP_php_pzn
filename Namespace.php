<?php


namespace{
    require_once "data/Conflict.php";
    require_once "data/Helper.php";

    $conflic1 = new \Data\One\Conflict();
    $conflic2 = new \Data\Two\Conflict();

    echo Helper\helpMe();
}