<?php
#for loop pada php

/**
 * for adalah salah satu keyword yang di gunakan untuk melakukan perulangan
 * 
 */
// for dengan ini



// for degan init statemnet
for ($i=0; $i <10 ; ) { 
    # code...
    echo "tiada tuhan selain allah, nabi muhammad utusan allah".PHP_EOL;
    $i++; 
}


$data =0;
//for dengan kondisi
for (;$data <10 ; ) { 
    # code...
    echo "tiada tuhan selain allah, nabi muhammad utusan allah".PHP_EOL;
    $data++; 
}


//for dengan post statement
//! di rekomendasikan menggunakan cara penulisan seperti ini
//
 for ($i=0; $i <10 ; $i++) { 
    # code...
    echo "tiada tuhan selain allah, nabi muhammad utusan allah".PHP_EOL;
 }

 
 //sitak alternatif pada post statement
//hanya mengganti tanda kurung kurawal dengan :, dan di akhiri dengan endfor

for ($i=0; $i <10 ; $i++) : 
    # code...
    echo "tiada tuhan selain allah, nabi muhammad utusan allah".PHP_EOL;
endfor;
