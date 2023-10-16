<?php

class Person{
    const AUTHOR = "Magang Web Programmer";


    var string $name;
    var ?string $address = null;
    var string $country = "Indonesia";

    function __construct(string $name, ?string $address)
    {
        $this->name = $name;
        $this->address = $address;


    }

    function sayHelllo(?string $name){
        if(is_null($name)){
            echo "HI, my name is {$this->name}";
        }
        else{
            echo "Hi $name, my name is {$this->name}";
        }
    }

    function info(){
        echo "Author : " . self::AUTHOR . PHP_EOL;
    }
}
