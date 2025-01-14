<?php
// require dan include
/**
 * dalam membuat program kita tidak mungkin menumpuk semau kode program di dalam satu file, kita harus memebagi sesui dengan fungsi masing masing agar kita mudah dalam memaintance program kita
 * untuk itu kita harus memisahkan sesuai fungsinya agar lebih modular
 * 
 * kedua keyword diatas adalah berguna untuk mengimport data dari file lain, baik itu function atau varibel dll
 * 
 */

 //kita akan mengambil dari file data.php

//  require "../doa/data.php";
//include "../doa/data.php";

require_once "../doa/data.php";

echo ($tuhan);
echo ($nabi);


//* posisi require dan include
/**
 * karena kode program php berjalan dari atas ke bawah
 * selalu tarok diatas / diawal file karena code program akan di import dari atas, karena jika di tarok di bawah akan error , karena data sudah di gunakan tapi belum di import,
 */


 //* perbedaan require dan include
/**
 * jika data yang kita import tidak ada, atau file yang kita import tidak ada, atau path ny salah
 * jika require akan terjadi error dan kode program berhenti
 * jika inlude akan terjadi peringtan dan kode program tetap di eksekusi/berjalan sampai ke bawah
 */

//* require_once dan include_once
// terkadang kita melakukan include / require lebih dari satu kali
/**
 * sehingga data pun akan terimport dua kali, ini akan mengakibatkan error saat kode program di jalankan
 * 
 * maka dari itu ada kata kunci require_once atau include_once
 * ini berguna untuk mengatasi jika kita lebih dari satu kali akan tetap dianggap satu kali
 * 
 */

//! rekomendasi gunakan require_once atau include_once, dari pada inlcude atau require