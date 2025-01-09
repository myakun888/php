# function argumen
untuk mengirim informasi pada function , agar dinamis kita harus menggunakan argument
cara membuat argument sama seperti mebuat variabel
```php
function bismillah ($data){
    //kode program yang kita inginkan
echo " kekasih allah adalah nabi $data";
}

bismillah("muhammad saw");// kekasih allah adalah nabi muhammad saw;


```
jika argument lebih dari satu cukup beri tanda koma, dan tambahkan argument nya


### default value argument
saat kita membuat function yang memiliki argument, kita wajib memberi argument saat memangil nya, jika tidak maka akan error, tapi untuk mensiasati hal tersebut kita bisa memberikan `default value`
artinya saat kita tidak / lupa memberikan argument maka default value tersebut yang akan mengisi nya

cara membuat nya cukup dengan memberi tanda =,
```php
function bismillah ($data="islam"){
    //kode program yang kita inginkan
echo " saya adalah $data";
}

bismillah("islam") // islam
bismillah("muslim") // muslim

bismillah() // islam , tetap berisi islam karena kita sudah isi dengan default value


```
### kesalahan menulis default value
jika argument lebih dari satu, dan hanya satu argument yang kita buat default value nya
hindari menulis default value pada parameter/ argument pertama
karena tidak akan memiliki efek

kecuali jika dua duanya kita buat default value , itu tidak masalah

```php
function bismillah ($data="islam", $data2){
    //kode program yang kita inginkan
echo " saya adalah $data, nabiku $data2";
}
bismillah("rasul") // ini error

```


### type deklarasi
secara default php bisa mengconversi argument yang kita input di dalam function 
tapi kita juga bisa argument kita juga bisa menentukan argument typde data apa yang kita inginkan
cukup dengan menambahkan tipe datanya pada sebelum argemnt nya

```
function bismillah ( str$data){
    //kode program yang kita inginkan
echo " saya adalah $data";
}
```

```php
function bismillah (str $data){ //argument yang di perlukan string
    //kode program yang kita inginkan
echo " saya adalah $data";
}
```
**valid type **
|type|keterangan|
|----|----------|
|int| variabel harus integer|
|bool| variabel harus boolean|
|string| variabel harus string|
|array| variabel harus array|
|float| variabel harus float|

// ini akan di bahas pada materi OOP (object oriented programming)
clsas/ interface harus class
self harus self
callable harus callable

### variabel length argument list
adalah variabel dimana kita bisa banyak memasukan nilai / value
- cara membuatnya cukup dengan menambahkan tiga titik `...` pada awal variabel nya, dan ini akan menjadi dalam bnetuk array

```php
function bismillah (str ...$data){ //argument yang di perlukan string
    //kode program yang kita inginkan
echo " saya adalah $data";
}

bismillah("islam","muslim","mukmin","alim") // ["islam","muslim","mukmin","alim"];

```