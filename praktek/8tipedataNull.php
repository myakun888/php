<?php

// data null adalah mempresentasikan data / variabel yang belum memiliki nilai


$data = null; //
$data1 =NULL;//
$datax = 'string';
// note membuata null bisa dengan huruf besar , bisa juga dengan huruf kecil


var_dump($data).PHP_EOL;


echo (is_null($data)).PHP_EOL;// 1 adalah representasi dari true
var_dump(is_null($data));// true

var_dump(is_null($datax));