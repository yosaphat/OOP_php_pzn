<?php 

class person

{
    const AUTHOR = "EXPOST";

    var string $name;
    var ?string $address = null; // arti ? adalah membolehkan nilainya null/kosong
    var string $country = "Indonesia";  //kalau nilai country kosong akan default Indonesia

    //didalam block class dinamakan properties, properties  akan diakses oleh object


    function sayHello(?string $name)
    {
        if (is_null($name)){
            echo "Hi, my name is $this->name" . PHP_EOL; //this mengambil data function /objek saat ini.object bukan kelas
        }else{
            echo "Hi $name, my name is $this->name" . PHP_EOL;
        }
    }   



}