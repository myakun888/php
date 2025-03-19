<?php

/**
 * ini adalah busines logic / logika bisnis
 * delete todolist
 */
// require_once __DIR__ . "/../models/model.php";


function deleteTodoList($nomor)
{
    global $data; // variabel dari dalam file models, 


    if ($nomor > sizeof($data)) {
        echo "tidak ada index dengan nomor $nomor" . PHP_EOL;
    }

    for ($i = $nomor; $i < sizeof($data); $i++) {

        $data[$i] = $data[$i + 1];
    }
    unset($data[sizeof($data)]);
}

// deleteTodoList(1);


//cara kerja
/**
 * function delet todolist
 * 
 * menerima parameter berupa angka
 * jika angka parameter lebih besar dari panjang array,maka tidak akan terjadi apa apap
 * 
 * jika nilai parameter kurang dari panjanga array
 * maka akan di lakukan for loop
 * dimana nilai paramater akan di tambahkan sebgai index , dan selama perulangan index akan berisi niliat +1 , sehingga value nya begeser
 * hingga paling bawah baru di lakukan unser
 * 
 * sehingga index tetap berurut
 * 
 * ini di lakukan karena unset serara default akan menghapus value array beserta index nya
 * maka dari itu di lakukan looping terlbih dahulu
 */
