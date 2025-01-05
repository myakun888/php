# ternary operator

adalah bentuk sederhana dari if statement
dimana terkadang ada control flow , dimana kita akan menggunakan perkondisian tetapi sangat sederhana

kode ternari seperti berikut

`kondisi?'true':'false";

artinya
jika kondisi benar maka yang true akan di eksekusi , jika salah maka yang false yang akan di eksekusi


```php
$agama = 'islam';
$anda = null
if($agama == 'islam'){
    $anda ='anda muslim';
}else {
    $anda ='anda kafir';
}

```
dari contoh diatas kita bisa sederhanakan

```php

$agama = 'islam';
$anda = null;
$anda = $agama=="islam"?'anda muslim':'anda kafir';


```