<?php
#do while loop
/**
 * adalah perulangan yang mirip dengan while, hanya saja do while loop
 * minimal akan tetap di lakukan meskipun kondisi tidak terpenuhi
 * jika kondisi terpenuhi maka akan di lakukan perulangan
 */


 $data = 0;

 do {
    echo "aku bersaksi tiada tuhan selain allah, nabi muhammad utusan allah".PHP_EOL;
    $data++;
 } while ($data >= 10);

 //karena prilaku do while , struktur kodenya melakukan eksekusi code program terlebih dahulu baru melakukan pengecekan kondisi logika