<?php

//calback function
/**
 * adalah function yang di kirimkan di dalam argument dari suatu function
 * 
 */

 const TUHAN  = "ALLAH SWT";

 //note gunakan type data nya saat membuat argument agar programmer tau , yang mana parameter biasa, yang mana paramter segabai funciton, contoh callable adalah type argument untuk function

 //Function satu

 function syahadat ($nama, callable $bacaan ) {

    $doa = $bacaan($nama);

    echo "$doa, alhamdulillah".PHP_EOL;

 }
// function dua , ini kita akan jadikan callbacknya
 $baca= fn ($nm1) => "$nm1 bersaksi tiada tuhan selain allah";


 syahadat("fajrin",$baca);


 //contoh diatas kita membuat dua function , satunya kita jadikan callback function


 //* kita juga bisa langsung membuat functionya di dalam argument

 //dalam contoh ini kita membuat anonymus fuction di dalam argumentnya
 syahadat("dianwisora",function ($nama){
    return "istriku $nama,bersaksi tiada tuhan selain allah";
 });


 ## cara lain menggunakan call_user_function
// cara ini juga bisa , tapi ini tidak di wajibkan
// bebas , hanya sekedar inforsi , ini

function syahadat2 ($nama, callable $bacaan){

    $hasil = call_user_func($bacaan,$nama);
    // diatas sebernya sama sepert
    //$hasil = $bacaan($nama)
    return "$hasil terima kasih ya tuhanku maha besar allah";
}

syahadat2("m fajrin", $baca);


//>>>>>>>>>>>>>>>>>>>>>>>>>>


function nama ($n1,$n2){

    echo "nama depan: $n1, nama belakang: $n2".PHP_EOL;
};

nama( "muhammad", 'saputra');


//kita juga bisa menggunakan callback dari func bawaan


function ubah ($data,callable $func){

    $hasil = $func($data);
    echo $hasil;
}
// kita menggunakan strtoupper, mengubah string menjadi huruf besar
//strtoupper() adalah func bawaan dari php
ubah("fajrin","strtoupper");