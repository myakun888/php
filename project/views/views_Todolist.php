<?php

require_once __DIR__ . "../../businesLogic/show_Todo_List.php";
require_once __DIR__ . "../../models/model.php";
require_once __DIR__ . "../../helper/input.php";
require_once __DIR__ . "/views_Add_todolist.php";
require_once __DIR__ . "/views_delete_todolist.php";
// require_once __DIR__ . "/views_Todolist.php";


function view_todolist()
{
    //melakukan perulangan while
    //yang berguna agar selalu mengulang menampilkan / menjalankan function view_todolist
    while (true) {

        echo "SELAMAT DATANG DI APLIKASI \" SELAMAT DATANG DI APP TODOLIST BERBASIS CMD \"." . PHP_EOL;


        show_todo_list() . PHP_EOL; // menampilkan data todolist saat ini
        echo "MENU" . PHP_EOL;
        echo "Silahkan Masukan Pilihan Anda" . PHP_EOL;
        echo "1: Untuk Menambah TODO" . PHP_EOL;
        echo "2: Untuk Menghapus TODO" . PHP_EOL;
        echo "x: Keluar" . PHP_EOL;

        $pilihan = input("pilihan"); // meminta input dari user

        if ($pilihan == "1") { // jika pilihan == "1", maka akan memasuki view tambah todo, dengan menjalankan function view_add_todo_list
            views_add_todo_list();
        } else if ($pilihan == "2") { //jika pilihan == "2", maka akan memasuki view delete todo,dengan menjalankan function views_delete_todolist
            views_delete_todolist();
        } else if ($pilihan == "x") { // jika pilihan == "x", maka akan berhenti dengan menjalankan keyword break, lalu perluangan while akan berhenti, dengan notice echo "terimakasih";
            break;
        }
    }
    echo "Terimakasih" . PHP_EOL;
}
