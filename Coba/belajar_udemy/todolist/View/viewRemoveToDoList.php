<?php
require_once __DIR__ . '/../Helper/input.php';
require_once __DIR__ . '/../BusinessLogic/removeToDoList.php';

function viewRemoveToDoList(){
    echo "Menghapus TODO" . PHP_EOL;

    $pilihan = input("Nomor (3 untuk membatalkan)");

    if ($pilihan == "3"){
        echo "Batal Menghapus TODO" . PHP_EOL;
    }
    else{
        $success = removeToDoList($pilihan);
        if($success){
            echo "Sukses Menghapus todo Nomor $pilihan" . PHP_EOL;
        }
        else{
            echo "Gagal Menghapus todo Nomor $pilihan" . PHP_EOL;
        }

    }
    
}