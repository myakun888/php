# function return value
secara default function tidak mereturn / mengembalikan apa apa
tetapi kita bisa jika ingin membuat function yang mengembalikan nilai
dengan menambahkan kata kunci `return` di dalam block function nya

```php

function doa (){

    return 'ya allah ampuni dosa kami';
}

```

sifat return

- return ini hanya bisa mengembalikan satu data tidak bia lebih
- return akan mengehentikan code program di bawah nya, artinya setiap kode program di bawah return tidak di eksekusi, dalam satu blok tersebut
  

```php

function doa ($saya){
    
    $hasil = "ya allah ampuni dosa $saya";

    return $hasil
    //echo 'testing'   // kode di bawah baris return tidak di eksekusi
}

$data = doa("hamba")

echo "$data";
```
dari contoh diatas variabel data , yang berisi function doa berisi value , karena function nya me return nilai


### funciton return value 2


funciton return value juga bisa di terapkan dalam 
if statement,switch dan lainya

```php


function doa ($saya){
 $data = 'islam';
 
 
switch(){
    case "islam":
    return "muslim";
    case "kristen":
    return "nasrani";
    case "buda":
    return "buda";
    }

}
```

### return value type deklarasi

- kita juga bisa menentukan tipe data yang akan kita return atau kembalikan,
ini berguna untuk membuat agar function kita konsisten , sesuai value tipe data yang kita inginkan

jadi programmer lain saat membaca kode program kita, mereka juga tau tipe data yang akan di return

membuat return type deklrasi
cukup dengan menambhkan `: tipedata` setelah tanda `()`

```php
funciton doa($data) :int
{
return $data
}

```
artinya tipe data yang kita inginkan saat di return dari function diatas adalah int
