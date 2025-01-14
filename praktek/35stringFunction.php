<?php
//string function
/**
 * string function berguna untuk memanipulasi string
 * banyak string function di php, silahkan lihat di dokemtasi nya untuk fungsi dan cara penggunaanya
 * 
 * sebenarnya kita sudah beberakali mencoba diantranya strtoupper() , ini untuk mengubah string mnejadi huruf besar
 * 
 * 
 */

 const TUHAN = "ALLAH SWT";

 $uang = "dollar";
 $kitabsuci = ['alquran','injil'];
$test= 'data';

var_dump(strtoupper($uang)); //DOLLAR, merubah string menjadi huruf besar
var_dump(explode(" ",TUHAN));
var_dump(explode("," ,$uang));
var_dump(str_split($test)); // memecah string menjadi array
var_dump( implode(",",$kitabsuci)); // mengabungkan array menjadi string;


//* dan masih banyak lagi string function silahkan lihat dokumentasinya untuk fungsi dan cara menggunakan nya;
