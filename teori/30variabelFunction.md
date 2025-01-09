# variabel function

di php mendukung konsep variabel function
dimana kita bisa memasukan function di dalam variabl


- cara membuat nya
  cukup masukean nama function ke dalam variabel yag kita inginkan atau kita buat
  contoh
  kita mempunya function yang dengan nama function doa, dan variabel dengan nama dat

  `$data = "doa"`

- dan saat memangilnya kita bisa memangil variabel tersebut
`$data()`


```php
function doa (){
    echo "bismillah";
} // ini function nya


$data1 = "doa" // data1 adalah variabel, doa adalah function nya


// kita bisa memanggilnya

$data1()//ini menjadi variabel function
```

## penggunana variabel function

selain kita bisa membuat / memasukan funciton ke dalam variabel menjadi variabel function

kita juga bisa menjadikan nya di dalam argument.
atau bisa juga di sebut call back

```php

function data ($nilai1, $func){

    $dataHasil = $fucn($nilai1);

    echo "nabi kami $dataHasil "
}

function fix ($datax){
    return" yang tercinta $datax ";
}

$data("muhammad saw","fix"); // nabi kami yang tercinta muhammad saw

// ini menggunakan function bawaan php, strupper berguna untuk mengbuah string menjadi huruf besar

data("muhammad saw","strtoupper"); // nabi kami MUHAMMAD SAW
```

