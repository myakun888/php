<?php   
#reference

/**
 * di php ada fitur reference , tapi berbeda dengan yang ada pada c++ /c #, yang merujuk pada pointer
 * pada php reference lebih ke shortcut pada windows / alias pada linux
 */

 #assign by reference
// artinya kita bisa membuat variabel dan mengambil dari satu nilai yang sama 

//tanpa assign

$data = 'alquran';

$kitab_suci = $data;

$kitab_suci = 'alquran karim';

echo $data.PHP_EOL; // alquran;


// degan assing by reference / memberi nilai dengan assign
// dengan menambhakn tanda & pada variabel yang ingin kita ambil nilai nya
// dengan assign value by reference akan berdampak variabel itu tersubung secara langsung dan kita juga bisa megubah isi nya dan variabel awal nya juga ikut berubah,

$data2 = 'alquran';
$kitab_suci2 = &$data2; // kita melakukan assign by reference

$kitab_suci2 = 'alquran nul karim';

echo $data2; // alquran nul karim



# pass by reference
/**
 * selain kita bisa melakukan assign by refrence(mengambil nilai), kita juga bisa melakukan passing data / mengirim data dengan asssign
 * cukup dengan menambhakna tanda & pada argument nya
 */


 function doa (&$data){

    $data++;
 };

 $nilai =1;

 echo doa($nilai).PHP_EOL;
 echo $nilai;


 //returning references
//selain mengambil nilai, mempasing data, reference juga bisa bis mengembalikan nilai pada functon
// tapi gunak fitur ini hanya di perlukan saja, karean agak membingungkan
// cara nya cukup tambahkan tanda & pada depan namafunciton nya

function &datay (){
   static $datax = 100;
    return $datax;
};

$a = &datay();
$a = 200;

$b= &data();
echo $b; //';

//! perlu di perhatikan fitur returning reference ini jarang digunakan dalam membuat aplikasi keculai memamg di perlukan