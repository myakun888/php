# constanta

php pada dasar nya adalah mutable atau bisa berubah
jika ingin membuat variabel yang tidak bisa berubah atay contanta
maka kita akan menggunakan funcion **define(nama,isi)**

best praktice dalam penamaan constanta yaitu dengan uppuercase / huruf besar
```php
define("RASULALLAH","muhamamd saw");

```

dari contoh diatas
nama nya "RASUlALLAH",
isi nya "muhammad saw"

jika kita membuat dua nama konstant yang sama maka akan error


# update
pada php 7 keatas untuk membuat constanta bisa dengan cara dengan mengunakan keyword `const`
dan di dengan nama nya tanpa tanda dolar
```php
const data = 'ini adalah constan';

```