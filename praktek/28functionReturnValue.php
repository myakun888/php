<?php   
#function return value
/**
 * secara default function tidak mengembalikan nilai apapun,
 * tetapi kita bisa membuat function bisa mengembalikan
 * nilai / return value
 * 
 * caranya cukup dengan menambahkan kata kunci return di dalam block kode nya
 * 
 * perlu di ingat return value hanya bisa mengembalikan 1 jenins nilai
 * 
 * setiap kode program yang berada di bawah return tidak akan di eksekusi;
 * kata kunci 
 */


 function doa ($dzikir){
    // $data = $dzikir;
    return $dzikir.PHP_EOL;
 }
$hasil = doa('tiada tuhan selain allah');

echo(doa('nabi muhammad utusan allah'));
echo $hasil;



// return value bisa juga di gunakan di dalam if dan switch statement, ternari operator dll


function status ($data){

  $hasil = $data=="islam"?"muslim":"kafir";
//  $data=="islam"?"muslim":"kafir";
//  return $data
 return $hasil.PHP_EOL; 

}

echo status('islam');


//* return type decklarasi
/**
 * adalah dimana kita bisa menentukan tipe data yang akan menjadi return value nya
 * 
 * caranya cukup dengan menambahkan titik dua, :tipeData ny setelah tanda () 
 * 
 * 
 */

 function status2 ($data) :string {

    $hasil = $data=="islam"?"muslim":"kafir";
  //  $data=="islam"?"muslim":"kafir";
  //  return $data
   return $hasil.PHP_EOL; 
  
  }