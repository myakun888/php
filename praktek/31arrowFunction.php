<?php  
//arrow function
/**
 * adalah bentuk sederhana dari anomnymus function
 * secar fungsi hampir sama
 * kelebihan arrow function, dapat mengakses variabel di luar closure tanpa menggunakan kata kunci use
 * otomatis mereturn nilai
 */

 //* membuat arrow function
 // dengan menggunakan kata kunci fn di ikuti ()=> 


 const TUHAN= "ALLAH SWT";

 $doa = fn ()=> "ya allah ya tuhanku".PHP_EOL;

 echo $doa();


 //* arrow function mampu mengakses variabel diluar closure nya, tanpa harus menggunakan kata kunci use seperti anonymus function


 //kita akan megakses constanta tuhan

 $doa2 = fn()=> TUHAN." adalah pemilik alam semesta".PHP_EOL;
 

 echo $doa2();