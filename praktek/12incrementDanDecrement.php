<?php

#increment adalah proses kenaikan 1 nilai
# terbagi menjadi dua pree increment
#dan post increment
$nilai = 10;

#post increment
# mengembalikan nilai lalu di naikan 1 angka
// $nilai2 = $nilai++;
// var_dump($nilai2);//10



#pree increment
#menaikan 1 angka lalu mengembalika nilai 
$nilai2 = ++$nilai;

// var_dump($nilai2);//10
var_dump($nilai2);//11


#decrement menurunka satu nilai
$data2 =10;

#post decrement
#menggambalikan nilai dan menurunkan 1 angka
$datax = $data2--;
var_dump($datax);//10

#pree decrement
#menurunkan 1 angka lalu, mengembalikan nilai
// $datax = --$data2;
var_dump($datax);//9

//! note , silahkan gunakan sesuai keperluan
//kalau mau simpel tidak menggunakan atau di simpan dalam variabel langsung gunakan $nilai++

$datay=20;

var_dump($datay++);//20
//mengapa 20, karena nilai nya sudah di tampilkan terlebih dahulu baru di tambah

var_dump($datay);// ini baru 21, karena diatas sdh di tambahkan




