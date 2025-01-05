<?php

//manipulasi string

//dot operator
//kita bisa menggunakn dot operator untuk mengabungkan string dan variabel
// selain dot operator bisa juga dengan plus tapi plus sudah tidak direkomendasikan lagi, karena di sarankan hanya di gunakan pada operator matematika saja


$data1 = 'muhammad';
echo $data1."saw";

//varibel parsing

$data = 'muhammad ';

echo '$data SAW '."\n";// $data saw
echo "$data SAW ";// muhammad saw

//note
/**
 * pada kutip satu atau quote, kita tidak bisa melakukan interpolasi(mengabungkan variabel dan string);
 * 
 */

 // koversi string dan sebaliknya

 //contoh kita akan mengubah strigng ke int, float, dan sebaliknya
 // kita bisa dengan menggunakan functiob bawaan nya
 // cukup dengan henisnya dan variabelnya
 // contoh (string)variabel , ini untun mengubah ke string

 // ini mengubah integer ke string
echo ((string)10).PHP_EOL;//"10"
// mengubah float ke string
echo (string)10.9.PHP_EOL;//"10"
// mengubah string ke integer
echo (int)"10".PHP_EOL;//10


 // mengakses karakter pada string
// string pada php mirip dengan array kita bisa dengan menggunakan indexs nya , jika yang diakses meleibihi dari index nya akan error

 echo $data[0].PHP_EOL;// m 
 echo $data[1].PHP_EOL;// u 
//


## curly bracket {}
// terkadaang kita ignin menggabungkan variabel degan string tanpa ada spasi, kita bisa melakukan hal tersebut degan kurung kurawal , hal ini bisa di lakukan pada kutip dua / herodoc, 

$data2 = 'firend';

echo "{$data2}s"; // friends



?>