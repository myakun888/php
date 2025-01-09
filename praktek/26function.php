<?php
# function
/**
 * terbagi menjadi dua function bawaan atau build in, dan function buatan sendiri
 * 
 */
// membuat function

function saya (){
    echo "bismillah".PHP_EOL;
}

//memanggil function
saya();

//* lokasi function
// function bisa dibuat dimana saja bisa di if statement,switch statement, perulangan atau lainnya

$agama = "islam";

if($agama=="islam"){
    function muslim(){
        echo "alhamdulillah".PHP_EOL;
    }
  muslim();
}
else {
    echo "astafiruwlah";
};