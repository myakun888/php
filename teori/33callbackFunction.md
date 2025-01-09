# callback function

adalah mekanisme memangil function di argument, atau menjadikan funciton sebagai argument

sebernya kita sudah beberapa kali melakukan callback function di materi sebelumnya


```php
function perkalian ($n1,$n2){
    return $n1 * $n2;
}

function pembagian ($n1,$n2){
    return $n1 * $n2;
}
function eksekusi (int $x1,int $x2,callable $func){

    $hasil = $func($x1,$x2);

    echo "$hasil";
}

// membuat dua fucntion lalu lalu satu funtion di jadikan callback nya
eksekusi (10,10,"perkalian");
eksekusi (100,2,"pembagian");



//langsung memasukan function menjadi callback ny

eksekusi (10,10,function  ($n1,$n2){
    return $n1 * $n3;
})

//note untuk parameter yang kita jadikan function, kita baiknya menggunakan type argument ny (sudah di bahas di materi function argument)
// untuk function tipe nya callable, jadi programmer tau , argument ini sebagia function
```



### cara lain memangil callback
pada php 7 keatas
ada cara lain memangil callbck, dengna cara menggunakan calluserfunction,
ini tidak di wajibkan hanya sekedar informasi saja

```php
function perkalian ($n1,$n2){
    return $n1 * $n2;
}

function pembagian ($n1,$n2){
    return $n1 * $n2;
}

function eksekusi (int $x1,int $x2,callable $func){
    
    // cara biasa
    //$hasil = c$func($x1,$x2);


    // menggunakan call user function
    $hasil = call_user_func($func,$x1,$x2);
    //sama saja dengan dibawah ini
    //$hasil = $func($x1,$x2); // ini cara umum
    


    echo "$hasil";
}

```