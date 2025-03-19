<?php

require_once __DIR__ . "/../businesLogic/add_Todo_list.php";
require_once __DIR__ . "/../models/model.php";
require_once __DIR__ . "/../helper/input.php";
require_once __DIR__ . "/../businesLogic/show_Todo_List.php";
require_once __DIR__ . "/views_Todolist.php";


function views_add_todo_list()
{

    show_todo_list(); // menampilkan todolist
    $pilihan = input("masukan TODO "); // meneripa input dari user

    if ($pilihan == "x") { //jika pilihan x, maka batal
        echo "batal menambah TODO" . PHP_EOL;
    } else { // selain itu , kita eksekusi dengan function addTodolist($pilihan) dengan parameternya dari inputan user
        addTodoList($pilihan);
    }
}


// views_add_todo_list();
/**
 * pada file ini berisi, 
 * kita merequire_once beberpa file, add_Todo_list.php, model.php, input.php, show_Todo_List.php dan views_Todolist.php
 * 
 * pada proses nya views_add_todo_list()
 * menampilkan data , dengan menajalan function show_todo_list()
 * meminta input dari user, dimana hasil nya akan di tampung untuk di tambahkan ke function addTodolist
 * 
 * lalu dari pilah akan berjalan structur control
 * jika pilihan == x, maka batal dengan notifikasi echo "batal menambah todo"
 * jika selain itu , maka lakukan eksekusi dengan menjalankan functiion addTodoList()
 */
