<?php
function input($todo)
{
    echo "$todo :";

    $hasil = fgets(STDIN);
    return trim(strtolower($hasil));
};


// var_dump(input());

//ini adalah function yang berguna untuk mengambil input dari user melalui cmd
/**
 * menggunakan function bawaan dari php
 * fget()   // dengan parameter ny menggunakn STDIN  
 * 
 * cara kerja setelah function di jalankan dan akan meminta input dari user, setelah menamgpat hasil inputan lalu akan di return
 * yang selanjutnya akan di gunakan dari masing masing logic (input, delete dan logic lain )
 * hasil return di lakukan trim karena secara defult hasil nya meninggalkan white space, jadi harus di return, dan akan berdampat jika inputan selain angka, maka dari itu di lakuakn trim
 */
