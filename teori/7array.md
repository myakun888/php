# array
array atau larik adalah tipe data yang dapat menampung banyak data, 

```php
$data = ['data',99,];
```

array memiliki index yang diawali dari 0

contoh diatas, jumlah nya itu ada 2
tapi jika di hitung dengan index ny diawali dari 0,

untuk memangil nilai 99
kita gunakan index ny , dalam contoh ini 
index ny adalah 1

```php
$data[1] // 99
```






### operasi pada array

```php

//memanggil isi array
$data =['muhammad saw','isa as','ibrahim as'];

$data[0];//muhamamd saw

//menambah array (dari belakang)
$data[]= "yunus as";
// mengubah array berdasarkan index nya
// $namavariabel[index]= isi array
$data[0] = "RASULALLAH SAW" // isi dari index 0 akan menjadi RASULALLAH SAW


//menghapus isi array , termasuk indexnya hilang juga , dengan function unset($variabel(index))

contoh kita menghapus dosa tubuh
kita asumsikan
array dengan nama dunia, isi nya dosa dengan index 4
unset(dunia(4))
```
## array of object atau array assosiatif

jika di javascript memiliki object
maka di php ada array of object , mirip juga dengan map, karena memiliki key dan value


```php
$data = [
    "nama" => "muhammad",
    "lahir"=> "mekkah",
    "nabi ke" => 25,
    40 => "diangkat jadi nabi"
]
```




untuk memanggil isi jika di array biasa menggunakan indexs nya di array of object menggunakan key ny
contoh

```php
$data = ["nama"]; // muhammad saw
$data = [40]; // diangkat jadi nabi

```
jadi memanggil nya sesuai dengan key nya

## array di dalam array
di dalam array bisa juga kita masukan array lagi
```php
$data = [
    "nama" => "muhammad",
    "lahir"=> "mekkah",
    "nabi ke" => 25,
    40 => "diangkat jadi nabi",
    "sahabat"=>[
        1=> "umar bin khatab",
        2=>"ali bin abi tholib",
    ]
]


//untuk memangil tetap gunakan key nya
$data = ["sahabat"][1]; // umar bin kahatab

```