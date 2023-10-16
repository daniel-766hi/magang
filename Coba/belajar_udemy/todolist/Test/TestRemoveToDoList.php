<?php

require_once __DIR__ . '/../BusinessLogic/addToDoList.php';
require_once __DIR__ . '/../BusinessLogic/showToDoList.php';
require_once __DIR__ . '/../BusinessLogic/removeToDoList.php';
require_once __DIR__ . '/../Model/ToDoList.php';

addToDoList("Auro");
addToDoList("Daniel");
addToDoList("Ersa");
addToDoList("Silalahi");

showTodoList();

removeToDoList(2);

showTodoList();

$succes=removeToDoList(1);
var_dump(@$succes);

showTodoList();
