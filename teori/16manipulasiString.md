# manipulasi string
manipulasi pada string

## dot operator

dot (.), berguna untuk menyambung / menggabungkan string
selain dot , bisa juga dengan plus +, tetapi plus sudah tidak di rekomendasikan lagi


```php

$data = 'bismillah';

echo $data."alhamdulillah" // "bismillah alhamdulillah"
echo $data+'alhandulillah'// ini juga bisa tapi tidak di rekomendasikan lagi
// karena plus di gunakanan untuk pengoperasian matematika saja

```

## konversi ke number dan sebaliknya
untuk melakukan konversi kita bisa menggunakan function diantaranya

kita cukup dengan (tipedata)variabelnya
```php

var_dump((string)10)// '10'
var_dump((int)'10')// 10
var_dump((float)'10.1')//10.0

```

## megakses karakter pada string
string pada php , mirip dengan array kita bisa mengakses karakter dengan menggunakan index nya, apa kita akses melebihi indexs ny maka error

```php
$data = 'muhammad';
echo $data[0] // m
echo $data[1] // u

```

## variabel parsing
di php kita bisa juga melakukan variabel parsing, yaiu menggabungkan string dengan variabel

### kutip satu dan kutip dua
pada kutip satu kita harus menggunakan operator +, atau dengan operator dot .

tapi untuk lebih mudah kita bisa menggunakan kutip dua atau herodoc, kita hanya cukup menggunakan tanda dolar 

```php
$data = 'muhammad';

// ini dengan tanda kutip satu
echo $data.'saw'; 

// ini dengan tanda kutip dua
echo "$data saw"; // 

```

### curly bracket (kurung kurawal)
terkadang kita perlu mengabungkan variabel dengan string tampa spasi, dengan curly bracket kita bisa melakukan nya

kelebihan dari kutip dua kita bisa lebih fleksibel dan lebih mudah


```php

$data= 'friend';

echo "{$data}s"; // friends
// jika selain kutip dua tidak bisa melakukan seperti diatas 


```