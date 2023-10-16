<?php

require_once __DIR__ . '/../Model/ToDoList.php';
require_once __DIR__ . '/../View/viewRemoveToDoList.php';
require_once __DIR__ . '/../BusinessLogic/addToDoList.php';
require_once __DIR__ . '/../BusinessLogic/showToDoList.php';

addToDoList("Auro");
addToDoList("Daniel");
addToDoList("Ersa");
addToDoList("Silalahi");

showTodoList();

viewRemoveToDoList();

showTodoList();