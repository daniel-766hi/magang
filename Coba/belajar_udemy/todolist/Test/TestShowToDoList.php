<?php

require_once __DIR__ . '/../Model/ToDoList.php';
require_once __DIR__ . '/../BusinessLogic/showToDoList.php';

$todoList[1] = "Belajar PHP Dasar";
$todoList[2] = "Belajar PHP OOP";
$todoList[3] = "Belajar PHP Database";

showTodoList();