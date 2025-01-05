<?php
//ternary operator
/**
 * adalah bentuk sederahana dari if statemnet
 * dimana kita terkadanhanya menggunakan perkondisian sederhan
 * kita bisa menggunakan ternari operator
 * sturktur nya kondisi?'true':'else'
 */


 $agama = 'buda';

 $anda = null; // kita null aja dulu
$anda2 = null; // kita null aja dulu
 if ($agama == 'islam'){
    $anda = 'muslim';
 }
 else {
    $anda = 'kafir';
 }

 echo $anda;
$anda2 = $agama == 'islam'?"muslim":"kafir";



?>