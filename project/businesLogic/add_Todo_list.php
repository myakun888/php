<?php

/**
 * ini adalah businer logic / logic bisnis
 * untuk menambahkan todo list
 */

// require_once __DIR__ . "/../models/model.php";

//function addTodolist
/**
 * menggunakan parameter , dimana paramter ini akan di isi oleh user
 * 
 */
function addTodoList($todo)
{
    global $data; // variabel data dari file models , dalam bentuk array

    $jumlah_saat_ini =  sizeof($data); // me return panjang array

    $data[$jumlah_saat_ini + 1] = $todo;

    // var_dump($data);
};

// cara kerja nya
//fucntion menggambil string dari user
//lalu akan di cek array saat ini panjang ny berapa di tambah +1 , ini berguna sebagai index nya
//dan todo (inputan dari user) sebagai value nya
// yang di tambahkan ke array $data