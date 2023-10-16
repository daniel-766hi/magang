<?php
require_once __DIR__ . '/../Model/ToDoList.php';
require_once __DIR__ . '/../Helper/input.php';
require_once __DIR__ . '/../BusinessLogic/addToDoList.php';

function viewAddToDoList(){
    echo "Menambah TODO" . PHP_EOL;

    $todo = input("TODO(x untuk Batal): ");

    if($todo == "3"){
        echo "Batal Menambahkan TODO";
    }
    else{
        addToDoList($todo);
    }

}