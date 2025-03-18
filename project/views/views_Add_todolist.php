<?php

require_once __DIR__ . "/../businesLogic/add_Todo_list.php";
require_once __DIR__ . "/../models/model.php";
require_once __DIR__ . "/../helper/input.php";
require_once __DIR__ . "/../businesLogic/show_Todo_List.php";
require_once __DIR__ . "/views_Todolist.php";


function views_add_todo_list()
{

    # code...



    // echo "selamat datang menu TAMBAH TODO" . PHP_EOL;
    // echo "c : untuk kembali" . PHP_EOL;
    // echo "x : untuk batal dan kembali" . PHP_EOL;
    show_todo_list();
    $pilihan = input("masukan TODO ");

    if ($pilihan == "x") {
        echo "batal menambah TODO" . PHP_EOL;
        // break;
    } else {
        addTodoList($pilihan);
        // show_todo_list();
    }

    // echo "TERIMAKASIH " . PHP_EOL;
}


// views_add_todo_list();
