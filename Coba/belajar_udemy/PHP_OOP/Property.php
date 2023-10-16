<?php

require_once 'data/Person.php';

$person = new Person();
$person->name = "Auro";
$person->address = "Medan";
$person->country = "Indonesia";

var_dump($person);

echo "Name      : $person->name " . PHP_EOL;
echo "Address   : $person->name " . PHP_EOL;
echo "Country   : $person->country" . PHP_EOL;

