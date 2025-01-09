<?php


function cek ($n1,$n2,callable $x){

$data = $x($n1,$n2);
echo  "hasil perkalian adalah $data";
}

$dd =function ($x1,$x2){
return $x1 * $x2;
};




cek (10,50,$dd);

cek (10,20,fn($x1,$x2) =>  $x1 * $x2);
