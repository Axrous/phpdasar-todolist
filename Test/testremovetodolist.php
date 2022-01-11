<?php

require_once "./Model/todolist.php";
require_once "./Businesslogic/removetodolist.php";
require_once "./Businesslogic/Addtodolist.php";
require_once "./Businesslogic/Showtodolist.php";


addTodolist("Arga");
addTodolist("Satya");
addTodolist("Mulyono");
addTodolist("Muantap Jiwa");


showTodoList();

removeTodoList(3);

showTodoList();

removeTodoList(2);

showTodoList();

var_dump(removeTodoList(5));
