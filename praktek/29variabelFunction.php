<?php

//variabel function dimana kita membuat variabel yang berisi funciton

function doa ($tuhan="allah"){
    echo "alhamadulillah $tuhan".PHP_EOL;
}

$doa1 = "doa";

// cara memanggilnya
$doa1("allah");



//* kelabihan kita bisa membuat variabel function kita bisa memasukan nya menjadi argument
//>>>>>>>>>>>>>>>>>>>>>>>

//parameter1 data sebagai parameter tipe data string
//parameter 2 funct kita ekpstasi adalah kita akan isi function

function doa3 ( string $data,$funct){

    $dataHasil = $funct($data);

    echo " tiada tuhan selain $dataHasil";

};

function rasul ($datasatu){
    return " $datasatu , nabi muhammad utusan allah".PHP_EOL;
}

//contoh 1
doa3("allah swt","rasul");

// contoh 2
$rasul2 = 'rasul';
doa3("allah swt",$rasul2);


// kita juga bisa memasukan function bawaan 
doa3("allah swt","strtoupper");
//strtoupper function bawaan merubah string menjadi huruf besar
 