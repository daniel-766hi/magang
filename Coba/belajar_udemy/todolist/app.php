<?php

require_once __DIR__ . '/Model/ToDoList.php';
require_once __DIR__ . '/BusinessLogic/addToDoList.php';
require_once __DIR__ . '/BusinessLogic/removeToDoList.php';
require_once __DIR__ . '/BusinessLogic/showToDoList.php';
require_once __DIR__ . '/View/viewAddToDoList.php';
require_once __DIR__ . '/View/viewShowToDoList.php';
require_once __DIR__ . '/View/viewRemoveToDoList.php';
require_once __DIR__ . '/Helper/input.php';


echo "Aplikasi Todolist" . PHP_EOL;


 viewShowToDoList();