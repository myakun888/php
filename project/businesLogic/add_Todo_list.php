<?php

/**
 * ini adalah businer logic / logic bisnis
 * untuk menambahkan todo list
 */

// require_once __DIR__ . "/../models/model.php";

function addTodoList($todo)
{
    global $data;

    $jumlah_saat_ini =  sizeof($data);

    $data[$jumlah_saat_ini + 1] = $todo;
    // var_dump($data);
};
