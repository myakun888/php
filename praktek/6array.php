<?php
//array adalah larik, bisa mengisi banyak data dengan berbagai tipe data
// membuat array pada php


$data = ["rasul","nabi",25,99];

var_dump($data);

// memanggil isi array
// dengan menuliskan index nya
echo ($data[1]).PHP_EOL;// nabi


//operasi pada array

$nabi = ['rasulallah saw','ibrahim as','yunus as','isa as'];

//melihat isi array berdasarkan index
echo($nabi[0]).PHP_EOL;//rasulalla
//menambah array dari belakang
$nabi[] = "khidir as";
var_dump($nabi)."\n";

$dunia = ['manusia',"amal","dosa","kebaikan"];
var_dump($dunia);

//menghapus array termasuk index nya
unset($dunia[2]);
var_dump($dunia);

//menghitung panjang array
echo(count($nabi)).PHP_EOL;
//>>>>>>>>>>>>>>>>>>>>

//array assosiatif , mirip object pada javascript
$data2 =[
    'rasul'=>"muhamamd saw",
    'gelar'=>"SAW"
];

echo($data2['rasul']).PHP_EOL;

$data3 = [
    1 =>"muhammad",
    2 =>"rasulallah",

];
//jadi memanggil isi array of object kita harus menggunakan key ny

echo($data3[2]).PHP_EOL;


//array di dalam array

$nabi=[
    "nama"=>"muhammad saw",
    "mukjizat"=>[
        1=>"kitab suci alquran",
        2=>"membelah bulan"
    ]
    ];

echo($nabi["nama"]).PHP_EOL; // muhammad saw
echo($nabi["mukjizat"][1]); // kitab suci alquran
