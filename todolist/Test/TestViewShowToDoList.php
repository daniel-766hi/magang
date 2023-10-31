<?php

require_once __DIR__ . '/../View/viewShowToDoList.php';
require_once __DIR__ . '/../BusinessLogic/addToDoList.php';

addToDoList("Auro");
addToDoList("Daniel");
addToDoList("Ersa");
addToDoList("Silalahi");
addToDoList("Prorgrammer");

viewShowToDoList();