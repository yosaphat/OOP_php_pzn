<?php
namespace Data; //namespace untuk menyimpan class agar tidak error bila ada nama yang class yang sama


abstract class Location {
    public string $name;
}

class City extends Location{

}
class Province extends Location{

}

class Country extends Location{

}