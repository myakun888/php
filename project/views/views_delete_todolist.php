<?php
require_once __DIR__ . "/../models/model.php";
require_once __DIR__ . "/../businesLogic/delete_Todo_List.php";
require_once __DIR__ . "/../businesLogic/show_Todo_List.php";
require_once __DIR__ . "/../helper/input.php";
require_once __DIR__ . "/../views/views_Add_todolist.php";
require_once __DIR__ . "/../views/views_Todolist.php";


function views_delete_todolist()
{

    show_todo_list() . PHP_EOL;
    echo "masukan index / nomor TODO yang ingin di hapus" . PHP_EOL;
    // echo "c: kembali" . PHP_EOL;
    echo "x: keluar" . PHP_EOL;
    $pilihan = input("nomor");


    if ($pilihan == "x") {
        echo "batal menghapus" . PHP_EOL;
    } else {
        deleteTodoList($pilihan);
    }
}

// view_delete_todolist();
