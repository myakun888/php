<?php
#operator perbandingan
#adalah operator yang membandingkan kedua nilai (dari kiri ke kanan) dan mengembalikan boolean,true jika benar dan false jika salah

# ==
var_dump(10 =='10');// true
var_dump(10 == 10);// true
var_dump(10 == 9);// false

# ===
var_dump(10 === 10);// true
var_dump(10 === '10');// false

# !=
var_dump(10 != 9);// true
var_dump(10 != "9");// tue
var_dump(10 != 10);// false


# <>
var_dump(10 <> 9);// true
var_dump(10 <> "9");// tue
var_dump(10 <> 10);// false
//! note <> sama seperti != artinya tidak sama dengan, bestpractice gunakan != , kebanyakan bahasa pemrograman lain menggunakan itu

#!==
var_dump(10!=="10");//true
var_dump(10!==10);//false

# <
var_dump(10<99);//true
var_dump(99<10);//false

# >
var_dump(99>10);//true
var_dump(10>99);//false

# <=
var_dump(10<=99);//true
var_dump(99<=99);//true
var_dump(100<=99);//false

# >=
var_dump(99>=10);//true
var_dump(99>=99);//true
var_dump(99>=100);//false
?>_