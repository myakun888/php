<?php

function recLoop ($n1)
{

    // $data1 = 0;

    $datax = 1;
    for ($i=1; $i <=$n1 ; $i++) { 
        $datax *=$i ;
        
    };
    return "$datax hasil" ;
}

// echo (1*2*3*4*5)."\n";
// var_dump( recLoop(4));
echo recLoop(5);
