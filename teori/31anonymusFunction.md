# anonymus function
adalah function tanpa nama
- function ini biasanya di gunakan untuk membuat function yang sederhana
- biasanya di gunakan menjadi argument, atau sebagai value di variabel
- dengan ini kita bisa menjadiknya argument di function lainya


## cara menulis anonymus function

```php

$data = funciton ()($arg1){
    echo "alhamdulillah $arg1,  ";
}

$data("ya allah");

```


## anonymus function sebagai argument

kita bisa mengirimkan / menjadikan function anonymus menjadi argumen



```php

function sapa ($data, $func){

    $hasil = $fucn($data);
    echo " asalamualaikum $hasil";
}

sapa ("rasul allah", function ($nama){
    return strtoupper($nama); 
})


```
note : strtoupper adlah function bawaan yang berguna merubah huruf kecil menjadi besar



## mengakses varibel di luar closure
- secara defaul anonymus function tidak bisa mengakses variabel diluar closure nya
- untuk bisa mengakses kita harus secara spesfifik menyebutkan nya dengan menggunakan kata kunci `use`
lalu sebutkan variabel yang ingin di akses
```php
$tuhan = "allah swt";
$rasul = "rasulallah saw";

$data = function () use ($tuhan, $rasul){
    echo $tuhan, $rasul;



}

```