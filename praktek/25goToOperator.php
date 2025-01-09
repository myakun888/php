<?php
#goto operator
/**
 * adalah fitur dari php yang di gunakan untuk menjalanka kode program tampa urutan , artinya kita bisa loncat ke kode program yang kita inginkan
 * 
 */

 //kode program goto oprerator


echo "tiada tuhan selain allah";
goto a;
echo " minta tolong selain allah".PHP_EOL;


a:
echo" kembali ke pada allah, karena semua adalah kuasa allah swt";
//perhatikan kode diatas, kode diatas melewati echo minta tolong selain allah, 
// kareana langsung ke echo kembali ke pada allah


//* goto pada looping
// pada looping gooto juga , bisa loncat ke kode yang kita inginkan, mirip dengan break / continu jika contine hanya loncat tapi tetap pada blok kode looping, goto bisa keluar dari block kode looping

for ($i=0; $i <10 ; $i++) { 
    
    if($i==8){
        goto x;

    };
    echo "tiada tuhan selain allah $i".PHP_EOL;
};
x:
echo "betul sekali";


//! ini contoh penggunaan yang salah , sehinga terjadi seperti looping tiada henti
//! karean ketika kode sudah dbibawah , goto menaikan lagi ke atas
//! seperti kode di bawah ini
// n:
// echo " alquran adalah petunjuk dalam kami menjalai hidup";

// echo "petunjuk kalian apa?";
// goto n;

// echo "x";



//* walau fitur ini menarik tapi harus cermat mengunakan karena jika kebanyakan akan membingungkan, dan juga bisa menyebabkan kode program jalan terus (seperti looping tiada henti) jika salah temapt