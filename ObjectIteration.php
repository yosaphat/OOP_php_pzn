<?php 

class Data implements IteratorAggregate
{
    var string $first = "First";
    public string $second = "Second";
    private string $third = "Third";
    protected string $forth = "Forth";



    // public function getIterator(): Traversable // membuat iterasi agar variable yang di private/protected bisa diakses
    // {
    //     $array = [
    //         "first" =>$this->first,
    //         "second"=>$this->second,
    //         "third"=>$this->third,
    //         "forth" =>$this->forth,
    //     ];

    //     return new ArrayIterator($array);
    // }

    public function getIterator(): Traversable
    {
           yield "first" =>$this->first;
           yield "second"=>$this->second;
            yield"third"=>$this->third;
            yield"forth" =>$this->forth;
        
    } //yield dilakukan saat melakukan generator
}
$data = new Data();

foreach ($data as $property => $value){
    echo "$property : $value" . PHP_EOL;
}