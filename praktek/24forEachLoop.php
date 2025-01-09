<?php
# for Each loop

/**
 * adalah perulangan yang di gunakan untuk array,
 */

 //tanpa menggunakan for each
// kita bisa mengguanakna perulangan biasa tapi ini kurang efektif

$nabi = ['muhammad saw','isa','musa'];


for ($i=0; $i < count($nabi) ; $i++) { 
    
    echo  "nabi kami $nabi[$i]".PHP_EOL;
}
// contoh di atas menggunakan perulangan for


//* dengan for Each

foreach ($nabi as  $index ) {
    // echo "nabi kami $value".PHP_EOL;
    echo "nabi kami $index".PHP_EOL;

}

foreach ($nabi as  $index => $value) {
    // echo "nabi kami $value".PHP_EOL;
    echo "nabi kami $index".PHP_EOL;

}
// memiliki dua parameter pertama sebagai value, kedua sebagaii index
// jika dia array assoistif yang keduan nya adalah keys ny


//* for each pada array keys and values / array assositif
foreach ($nabi as  $index => $value) {
    echo "index [$index] nabi kami $value".PHP_EOL;
 
    // jika hanya array biasa , keys akan menjadi index
}


$datas =[
    "islam"=>"muhammad saw",
    "kristen"=>"isa as",
    "yahudi"=>"musa as",
];

foreach ($datas as $key => $value) {
    echo "agama: $key, nabi: $value".PHP_EOL;
}

