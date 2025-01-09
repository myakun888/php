<?php
#anonymus function
/**
 * adalah function yang tidak menggunakan / tanpa namma
 * ini biasa di gunakan untuk membuat function yang sederhana
 * bisa juga menjadi variabel function
 * bisa juga untuk kita kirimkan sebagai argument, atau bisa juga di sebut callback
 * 
 * >>>>>
 * 
 * 
 */

 //
 function bersyukur ($data,$datax){

    $hasil = $datax($data);

    echo "doa bersyukur $hasil".PHP_EOL;
 }
 
 
 $doa = function ($tuhan){
    echo "alhamdulillah $tuhan".PHP_EOL;
    return "alhamdulillah $tuhan";

};

 $doa("ya allah");// alhamdulillah ya allah



 // menjadi argument

 
 bersyukur("allah swt",$doa);




 ### mengakses variabel diluar closure
/**
 * secara default anonymus function tidak bisa mengakses variabel di luar closure nya
 * untuk bisa mengakses nya kita bisa menggunakan kata kunci use lalu di ikuti dengan variabel yang ingi kita akses
 * 
 */

$data2 = 'allah swt tuhanku';
 //! ini error karena tidak bisa mwngakses di luar closure

//  $doa2 = function (){
// echo "$data2";
//  };

//* tidak error karena menggunakan kata kunci use
$doa2 = function () use  ($data2){
    echo "$data2";
     };
 $doa2();