<?php
// variabel scope
/**
 * scope artinya adalah batasan / wilayah
 * 
 * di php secara garis  besar scope di bagi menjadi 2 local , dan global
 * 
 * 
 */

 //* global scope

/**
 * setiap variabel yang dibuat di luar blok scope { } function,
 * maka itu masuk ke global
 * 
 * jika kita berada dalam function kita tidak bisa mengakses variabel yang di luar blok scope nya
 * 
 * 
 */

 $kitab= 'alquran';
 function doa (){

    $kitab2 = 'alquran kairm';
    echo $kitab2; // ini bisa karena , mengakses dari lokal ny sendiri
    // echo $kita;// ini error karena variabel doa berada di dluar socpe lokal funciton 
 }

doa();

// artinya di dalam function kita tidak bisa mengakses variabel yang ada di luarnya



//* lokal scope
/**
 * lokal scope adalah variabel yang hanya bisa di akses dari lokal itu sendiri
 * dari luar tidak bisa mengakses sesuatu yang ada di dalam function
 */
function doa2 (){
    $kitab3 = 'alquran';
}

echo "$kitab3"; // error , karena variabel lokal3 berada di dalem lokal funcito doa2, yang hanya bisa di akses dari funciton itu sendiri



//* keyword global
/**
 * lalu bagaimana jika kita ingin mengakses variabel yang ada di global, jika kita berada di blok function
 * 
 * cukup gunakan keyword / kata kunci global 
 */

  $ALLAH = 'tuhan semesta alam';

 function berdoa (){
     global $ALLAH;
    echo  $ALLAH.PHP_EOL;
 }

 echo $ALLAH.PHP_EOL;


 //jadi dengan kata kunci global kita bisa mengakses variabel glabal dari dalam block function


 //* variabel GLOBALS
/**
 * selain keyword global, php juga memiliki variabel $GLOBALS
 * 
 * sebenarnya saat kita membuat variabel di  scope global, itu akan masuk ke variabel $GLOBALS, variabel $GLOBALS ini berbentuk array dimana keys nya adalah nama variabel yang kita buat,jadi kita bisa megakses dengan keys nya
 * 
 * dengan variabel global $GLOBALS["nama_variabelnya"
 * contoh
 * kita membuat variabel dengna nama rasul
 * $rasul = 'rasul allah';
 * 
 * echo $GLOBALS["rasul"];
 * 
 */
 //* jadi kita bisa menggunakan keyword global atau bisa juga dengan variabl $GLOBAL, untuk 
$rasul = 'rasul allah'; //
var_dump($GLOBALS);  // silahkan di cek 

// mengakses dengan variabel global $GLOBALS["nama_variabelnya"]
echo $GLOBALS["rasul"];

function doa22(){
    $tuhanSemestaAlam = "ALLAH SWT";
}
doa22();

var_dump($GLOBALS);// kita cek di dalam nya ada variabel dengan nama rasul

//karena berbentu array keys / array assosiatif jadi kita bisa mengakses nya seperti array key
$GLOBALS["rasul"]; // "rasul allah"
