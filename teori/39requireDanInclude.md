# require dan iclude

dalam membuat program kita tidak mungkin menumpuk semua kode di dalam satu file
kita biasa nya akan memisahkan, berdasarkan dari fungsin ny
function di file function, class di file dan lainya
ini bertujuan agar lebih modular , dan kita mudah untuk memaintance nya

di php ada kata kunci `require ` dan `include`


dengan kata kunci di atas kita bisa mengambiil apapun dari file lain


## simulasi

contoh kita membuat function doa , di file functionSatu.php
lalu kita ingin mengunakan nya pada file data.php

pada data.php kita hanya cukup mengambilnya dengan mengunakan kata kunci `require` atau `include`


### include
contoh
` include : 'relatif_pathnya`;` atau 
` require : 'relatif_pathnya`;`

```php


include  "functionSatu.php";

doa();

```
kita asumsikan contoh diatas adalah file data yang akan mengambil file function doa pada file functionSatu.php
dengan kata kunci `include`



### require

ini contoh require
```php
require  "functionSatu.php";

doa();


```

## perbedaan require dan iclude

perbedaan nya terletak pada error

- require
jika file (relatif pathnya salah) atauh file nya tidak ada atau data nya tidak ada
maka akan terjadi error dan kode program terhenti

- include
jika file atau datanya tidak ada, hanya akan ada peringatan, dan code program akan tetap jalan

### posisi require dan include

saat kita import dari file lain baik itu menggunakan require atau include
usahakan selalu di atas karena jika kita menaruh di bawah , terkadang error
karena php mengeksusi code program dari atas kebawah 


```php

doa(); // ini akan error
// karena kita mengeksekusi lebih dahulu
// sedangakan data nya baru kita import di bawah nya

include : "functionSatu.php";
```


### require_once dan include_once


terkadang kita tidak sadar saat kita mengimpor file
baik dengan `require` atau `include`

jika kita menggunakan kata kunci tersebut lebih dari satu kali, maka setiap data yang kita ambil akan lebih dari satu kali juga dan ini akan menyebabkan error

tapi untuk megatasi itu kita bisa menggunakan
`require_once` atau `include_once`
 sehingga jika doble tetap diambil satu kali



 ```php
include : "functionSatu.php";
include : "functionSatu.php";

// ini akan error karen kita dua kali mengambil datanya
doa();


 ```

```php
include_once : "functionSatu.php";
include_once : "functionSatu.php";

//ini tidak error meski kita mengambil dua kali, akan tetap di hitung satu kali

doa()

```
