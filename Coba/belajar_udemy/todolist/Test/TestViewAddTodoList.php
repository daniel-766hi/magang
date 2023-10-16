<?php

require_once __DIR__ . '/../View/viewAddToDoList.php';
require_once __DIR__ . '/../BusinessLogic/showToDoList.php';
require_once __DIR__ . '/../BusinessLogic/addToDoList.php';

addToDoList("Auro");
addToDoList("Daniel");
addToDoList("Ersa");
addToDoList("Silalahi");

viewAddToDoList();

showTodoList();

viewAddToDoList();

showTodoList();