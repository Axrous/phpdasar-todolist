<?php

require_once "./view/viewremovetodolist.php";
require_once "./Model/todolist.php";
require_once "./Businesslogic/Addtodolist.php";
require_once "./Businesslogic/Showtodolist.php";

addTodolist("Arga");
addTodolist("Satya");
addTodolist("Mulyono");

showTodoList();

viewRemoveTodoList();

showTodoList();