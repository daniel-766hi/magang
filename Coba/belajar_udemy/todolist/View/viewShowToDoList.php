<?php

require_once __DIR__ . '/../Helper/input.php';
require_once __DIR__ . '/../BusinessLogic/addToDoList.php';
require_once __DIR__ . '/../BusinessLogic/removeToDoList.php';
require_once __DIR__ . '/../Model/ToDoList.php';
require_once __DIR__ . '/../View/viewAddToDoList.php';
require_once __DIR__ . '/../View/viewRemoveToDoList.php';
require_once __DIR__ . '/../BusinessLogic/showToDoList.php';

function viewShowToDoList(){

    while(true){
        showTodoList();

        echo "Menu" . PHP_EOL;
        echo "1. Tambah Todo" . PHP_EOL;
        echo "2. Hapus Todo" . PHP_EOL;
        echo "3. Keluar" . PHP_EOL;

        $pilihan = input("Pilih");

        if($pilihan == "1"){
            viewAddToDoList();
        }
        else if($pilihan == "2"){
            viewRemoveToDoList();
        }
        else if($pilihan == "3"){
            break;
        }else{
            echo "Pilihan tidak dimengerti" . PHP_EOL;
        }
    }

    echo "Sampai Jumpa Kembali" . PHP_EOL;
}