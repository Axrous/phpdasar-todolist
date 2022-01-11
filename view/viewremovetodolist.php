<?php

require_once "./Helper/input.php";
require_once "./Businesslogic/removetodolist.php";
require_once "./Model/todolist.php";

function viewRemoveTodoList() {
    echo 'MENGHAPUS TODO' . PHP_EOL;

    $number =input("No. Todo (x untuk keluar");

    if($number == "x") {
        echo "Batal menghapus todo";
    } else {
        $success = removeTodoList( $number);

        if($success) {
            echo "Sukses Menghapus todo nomor $number" . PHP_EOL;
        } else {
            echo "Gagal menghapus todo nomor $number" . PHP_EOL;
        }
    }


}