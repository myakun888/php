<?php

//operator array
/**
 * mirip dengan operator perbandingan teteapi memilki sedikit perbedaan
 * 
 */

 // + atau union
 $data1 =['alquran' =>"islam",
 'injil'=>"nasrani"];
 $data2 = ['zabur'=>"bani israil",'taurat'=>"bani istrail"];
 $kitabSuci = $data1 + $data2;

 var_dump($kitabSuci);


 // ==
 # akan true jika key dan value sama, meskipun posisi nya berbeda

 $data3 =['alquran' =>"islam",
 'injil'=>"nasrani"];
 var_dump($data1 == $data3);//true
 var_dump($data1 == $data2);//false

 // ===
 # akan true jika key dan value serta posisi nya harus sama / sesuai
 $data4 =[
     'injil'=>"nasrani",
    'alquran' =>"islam"];
var_dump($data1 === $data3);//true
 var_dump($data1 === $data4);//true
 


 # !=
 # akan true jika key tidak memilkik kesamaan atau bededa
 $data5 =[
     'injil'=>"nasrani",
     'alquran' =>"islam",
];
var_dump($data1 != $data5);//true


# !==
#akan true jika keya dan value tidak sama
$data6 =[
    'alquran' =>"islam",
    'injil'=>"nasrani",

];


// var_dump($data1 !== $data6);//true


?>