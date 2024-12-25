# tipe data

## string
adalah tipe data teks , atau huruf
untuk membuat tipe data string cukup gunakan tanda kutip satu **'**, atau kutip dua **"**

```php
$data = 'ini string ';
$Data = "ini string juga "; // ini dengan tanda kutip dua
```

perbedan kutip satu dan dua,
kutip dua bisa melakukan interpolasi dapat menampung variabel

```php
$data = 'ini string ';
$Data = "ini string juga ";


echo "di baca $data" // di baca ini string
echo 'di baca $data' // di baca  $data
```
karena kutip satu tidak bisa melakukan interpolasi , jadi semua yang masuk akan di jadikan string



## number

number dibagi pada php ada int (bilangan bulat) dan float (bilangan pecahan)
adalah tipe data bilangan bulat

- int
```php
$angka = 99;

```

- float
adalah tipe data bilangan pecahan

```php

$angka = 9.9;
```

## boolean
adalah tipe data yang mengembalikan true or false (benar atau salah)

jika benar adalah true
jika salah adalah false
bisa juga di terjemahkan dengan angka
1 untuk true
0 untuk false ( bisa juga tidak ada)
## array
```php
$data = ['nabi muhammad','nabi isa']

$data2 = [
  'rasul'=> 'muhamamd saw',
  gelar => 'SAW';
]

```

untuk melihat tipe data bisa menggunakna

- vardump()
- getTyipe()
  

  vardump digunakan berguna untuk melihat tipe data dengan returnnya tipe data dan juga isi dari sebuah data tersebut


  gettyoe dgunakan untuk melihat tipe data dengan return hanya tipe nya saja