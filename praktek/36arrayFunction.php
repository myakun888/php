<?php
// array function
// php banyak memiliki function bawaan untuk array, silahkan lihat dokumentasi nya untuk lebih jelas dan bagaimana cara menggunakan nya


$data = ['alquran','injil','zabur']; // array index
$kitab =[
    "islam"=>'alquran',
    "kristen"=>'injil',
    "yahudi"=>'zabur'];
$nomor = [8,3,5,7,10];

    //array_keys()
// mengambil keys dari array asossiatif, jika array index, maka diambil indexnya
var_dump(array_keys($kitab));//0,1,2
var_dump(array_keys($data));//"islam","kristen","yahudi"

//array_values()
//menggambil values dari array
var_dump($kitab);// "alquran","injil","zabur"

//array_map()
//mengubah semua data dari array dengan callback
var_dump(array_map(function($e){
    $x = "data aslinya adalah $e";
    return "$e = $e kitab suci $";
    },$data));

//sort()
sort($nomor);//ini sudah di urutkan 3,5,7,8,10
var_dump($nomor); // kita cek maka isi array sudah terurut

// var_dump($nomor === $sort);

//rsort()
//mengurutkan isi array dari belakang, atau secar descending/ di reverse
rsort($nomor); //mengurutkan / membalikan urutan array dari belakang ke depan 10,8,7,5,3
var_dump($nomor); // kita cek array sudah di urutkan dari belakang ke depan
//shuffle()
// mengacak urutan array
shuffle($nomor);///mengacak isi array
var_dump($nomor); // kita cek isi array sudah ter acak

