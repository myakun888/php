<?php

/**
 * ini adalah busines logic / logika bisnis
 * delete todolist
 */

require_once __DIR__ . "/../models/model.php";


function deleteTodoList($nomor)
{

    global $data;
    if ($nomor > sizeof($data)) {
        echo "tidak ada index dengan nomor $nomor" . PHP_EOL;
    }

    for ($i = $nomor; $i < sizeof($data); $i++) {

        $data[$i] = $data[$i + 1];
    }
    unset($data[sizeof($data)]);
}

// deleteTodoList(1);
