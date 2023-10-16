<?php

require_once __DIR__ . '/../Model/ToDoList.php';
require_once __DIR__ . '/../BusinessLogic/addToDoList.php';

addToDoList("Auro");
addToDoList("Daniel");
addToDoList("Silalahi");

var_dump($todoList);