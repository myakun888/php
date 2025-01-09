<?php
#function argument 

use function PHPSTORM_META\type;

/**
 * kita dapat mengirimkan inforamsi pada function dengan cara mengirimkan argument
 * cara membuat argument pada funciton sama seperti membuat vairabel 
 */

 function bismillah ($data,){
echo "alhamdulillah $data bersyukur";
 };

 bismillah("kami");

 //jika lebih dari satu argument, bisa dengan beri tanda koma dan tambahkan lagi argument nya
  
 //contoh argument lebih dari satu,
 function bismillah2 ($data,$data2){
    echo "alhamdulillah $data bersyukur atas semua $data2";
     };

bismillah2("kami","rezki");
//! jika function memiliki argument kita wajib mengisi argument, jika tidak atau kurang maka akan error
 //contoh
// bismillah2("kami"); //ini error karena argument nya ada 2, sedangkan di isi cuma satu


//* default value argument
// kita bisa menambahkan default value yang berguna untuk mengisi nilai value tersebut jika kita tidak mengisi pada argument nya
// cara membuat default value cukup beri tanda = lalu di ikuit value apa yang ingin kita isi
function namaTuhan ($allah="allah"){
    echo "asmaul husna $allah".PHP_EOL;
};

namaTuhan();

//* kesalahan dalam membuat default value,
// jika kita membuat lebih dari dua argument maka hindari memasang default value pada argument pertama, lebih baik taru default value selain dari argument pertama, karena tidak akan mengefek

function namanabi ($agama="islam", $nabi="muhamamd"){
    echo "agama $agama, nabi kami $nabi";
};

//namanabi("nabi muhammad")// perlu di ingat tidak mengefek, ini hanya mengisi argumen pertama



//* type deklarasi 
// secar default php bisa mengconversi tipe data dari argument, tapi kita bisa menentukan tipe nya jika kita inginkan cukup dengan mengetik tipe data nya di depan argument ny

function cek (int $nilai1, int $nilai2){
 $total = $nilai1 + $nilai2;
 echo "Total $nilai1 + $nilai2 = $total".PHP_EOL;
}

cek(8,9);
cek(true,false);
cek("1","8");


//* variabel-lenght argument list
// adalah variabel argument dimana kita bisa memasukan lebih dari , dengan returnya menjadi array
// cara membuat nya cukup dengan tiga titik di depan variabel argument yang kita inginkan jadi variabel argument list


function data2 ($nilai,...$nilai2){
$data = $nilai2;
echo"$nilai".PHP_EOL;
var_dump($data);
}




