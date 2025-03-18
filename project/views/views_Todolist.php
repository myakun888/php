<?php

require_once __DIR__ . "../../businesLogic/show_Todo_List.php";
require_once __DIR__ . "../../models/model.php";
require_once __DIR__ . "../../helper/input.php";
require_once __DIR__ . "/views_Add_todolist.php";
require_once __DIR__ . "/views_delete_todolist.php";
// require_once __DIR__ . "/views_Todolist.php";


function view_todolist()
{

    while (true) {

        echo "SELAMAT DATANG" . PHP_EOL;


        show_todo_list() . PHP_EOL;
        echo "MENU" . PHP_EOL;
        echo "silahkan masukan pilihan anda" . PHP_EOL;
        echo "1: untuk menambah TODO" . PHP_EOL;
        echo "2: untuk menghapus TODO" . PHP_EOL;
        echo "x: keluar" . PHP_EOL;

        $pilihan = input("pilihan");

        if ($pilihan == "1") {
            views_add_todo_list();
            // echo "anda masuk ke tambah todo" . PHP_EOL;
        } else if ($pilihan == "2") {
            views_delete_todolist();
            // echo "anda masuk ke delete todo" . PHP_EOL;
        } else if ($pilihan == "x") {
            break;
        }
    }
    echo "terimakasih";
}
