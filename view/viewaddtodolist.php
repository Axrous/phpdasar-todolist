<?php

require_once "./Helper/input.php";
require_once "./Model/todolist.php";
require_once "./Businesslogic/Addtodolist.php";

function viewAddTodoList() {

    echo "MENAMBAHKAN TODO" . PHP_EOL;

    $todo = input("Todo (x jika ingin batal) ");

    if ($todo == "x") {
        echo "Batal menambah todo" . PHP_EOL;
    } else {
        addTodolist($todo);
    }
}