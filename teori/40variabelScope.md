# variabel scope

variabel scope adalah dimana kita mampu mengakses suatu varibel berdasarkan scope / batasannya
secar garis besar scope dibagi menjadi tiga

## global scope
semua variabel di luar dari function adalah global scope
artinya kita tidak bisa mengakses variabel yang dluar function

```php
$data = 'data';

function doa (){
    echo $data; // ini eror, kita tidak bisa mengakses varibel di global jika kita dari dalam function
}
```

## local scope
dimana kita hanya bisa mengakses varibel di dalam blok lokal kita atau di dalam code program biasanya di dalam `{ }`

artinya dia hanya bisa mengakses variabel dari dalam function itu sendiri
contoh pada function

```php

function doa () {

    $data = 'ada'; // lokal scopr
}

echo $data // kita tidak bisa mengakses variabel data yang ada di dalam function doa
```

### kata kunci global keyword
secar default  jika kita di dalam function kita tidak bisa mengakses variabel global / atau di luarnya
untuk dapat mengakses nya kita bisa menggunakan kata kunci `globals`  di depan variabel yang ingin kita aksesn;

caranya kita tulis `globals $varabelnya`


```php

$data = 'data';
function doa () {

global $data;
echo "$data"; // data

//dapat di akses karena sudah mengguankan kata kunci global
   
}

```

### $GLOBAL variabel
selain kita bisa menggunakan global keyword kita juga bisa menggunakan $GLOBAL variabel

karena secara defult seluruh / setiap variabel yang di buat di global scope akan tersimpan di variabel $GLOBAL yang berbentuk array


untuk mengaksesnya kita 

`$GLOBAL["nama_variabelnya"]`;

```php
$data = "doa"; // nama variabel nya data

function doa (){

    echo " {$GLOBAL["data"] }"
}

```
untuk memastikan kalian bisa cek dengan var_dun($GLOBAL)
untuk melihat apa saja yang tersimpan di dalam array tersebut

variabel ini sifat nya super gelobal artinya kita bisa 
ngambil nya baik dari dalam / luar block function


jadi kita bisa untuk mengakses variabel di global scope
kita bisa menggunakan dua cara yaitu
dengan keyword `global` atau global variabel `$GLOBAL`

## static scope

secara default variabel yang kita simpan di dalam local scope , itu siklus hidupnya hanya sebatas pada functon tersebut saat di eksekusi
ketika selesai maka selesai juga variabel tersebut



### tanpa static
```php

function jalan () {
    $data 0;
$data++;
echo $data
}

jalan() //1
jalan() //1

```

### dengan static

tapi kita juga bisa membuat suatu variabel menjadi static,
dengan menambahkan kata kunci static pada variabel nya

dengan menjadikan variabel nya static , siklus nya tetap hidup meskipun function telah selesai di eksekusi

```php

function jalan () {
static  $data 0;
$data++;
echo $data
}

jalan() //2
jalan() //3

```



