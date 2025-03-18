<?php
//*
/**
 * ini adalah busines logic / logika bisnis untuk fitur
 * menampilkan todo
 * 
 */
// require_once __DIR__ . "/../models/model.php";


function show_todo_list()
{
    global $data;
    echo "TODOLIST" . PHP_EOL;
    foreach ($data as $key => $value) {
        echo "$key: $value" . PHP_EOL;
    };
};
// show_todo_list();
