<?php


//null coalesing operator
/**
 * ini berguna untuk mengecek suatu nilai jika null
 * maka akan di isi dengan value yang sudah kita tentukan, jika tidak null maka nilai asli nya yang akan di tampilkan
 */

 // secar umum diphp kita bisa menggunakan logika ifstement dan funciton issset()
 // bisa juga dengan is_null() ini mereturn boolean jika benar true, jika salah false


 //mengecek null dengan if statement

 $data = "muhammad";
 //note isset function , jika suatu nilai memeiliki value maka akan true, jika null / undifend maka false
 if(isset($data)){
    $action = 'ada data';
    echo $data.PHP_EOL;
 }
 else{
    echo "tidak ada data";
 }

 // dengan null coalesing operator
 //kita cukup dengan tanda ??

 $datax = $data??"penganti null";
 echo $datax;

 //penjelesan
/**
 * jika variaebl data null, maka di gantin dengan string pengganti null, jika variabel $data tidak null, maka masukan isi nya kedalan variabel $datax
 * 
 */

 // dengan adanya null coalesing operator
 /**
  * kita dapat dengan mudah mengganti / mengambil nilai null 
  */