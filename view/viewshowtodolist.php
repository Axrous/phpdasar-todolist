<?php

require_once "./Model/todolist.php";
require_once "./Businesslogic/Showtodolist.php";
require_once "./Helper/input.php";
require_once "./view/viewaddtodolist.php";
require_once "./view/viewremovetodolist.php";

function viewShowTodoList() {

    while (true) {
        showTodoList();
        echo "MENU" . PHP_EOL;
        echo "1. Tambah" . PHP_EOL;
        echo "2. Hapus" . PHP_EOL;
        echo "x . Keluar" . PHP_EOL;
    
        $pilihan = input("Pilih Angka");
        if($pilihan == "1"){
            viewaddTodolist();
        } else if($pilihan == "2") {
            viewremoveTodoList();
        } else if($pilihan == "x") {
            break;
        } else {
            echo "Pilih nu aya goblog." . PHP_EOL;
        }
    }
    echo "Sampai jumpa lagi";
}