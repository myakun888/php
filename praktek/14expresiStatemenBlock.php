<?php
#expressi, statement dan block


#expresi
// adalah saat kita membuat / mendeklarasikan variabel, function dll


$data= 'bismillah'; //ekpresi sederhana

// expresi komplek
function data (){
echo 'alhamdulillah';
};


#statement
#adalah suatu ekpresi / kumpulan dari expresi yang diakhir dengan tanda titk koma

$data3 = 'alhamdulillah'; 
function data2 (){
    echo 'alhamdulillah';
    };

#block
/**
 * adalah suatu kumpulan dari statement statement yang di awalai dan diakhiri dengan tanda kurung kurawal {}, agar kita dapat membedakan  scope (wilayahnya / batasan )
 * yang mana global, dan local
 */

 {
    // didalam block ini di sebut local, di luar block ini di sebut global;
$data3 = 'alhamdulillah'; 
$data5 = 'alhamdulliha';

}
?>