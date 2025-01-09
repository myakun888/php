# function

function adalah kode program yang akan berjalan ketika kita panggil
di bahasa pemrograman lain function juga di sebut method
function terbagi menjadi dua
1. function built in
2. function buatan sendiri
   
###   function built in
adalah function bawaan dari bahasa pemrogram itu sendiri
contoh yang sudah pernah kita gunakan diantarany
echo(), var_dump(), isset(), count()
dan masik banyak function bawaan lainya

### function buatan sendiri 
adalah function yang kita buat sesuai apa yang kita mau, kode program di dalam function tersebut 


## mebuat funciton

membuat function cukup gunakan kata kunci `function` di ikuti dengan `nama functionya`, lalu tanda `()` dan blok kurung kurawal `{}`dimana di dalam blok tersebut kita menulis kode program nya
berikut kode ny
```php
function bismillah (){
    //kode program yang kita inginkan
}
```

### memangil function
cukup dengan nama nya dan di akhiri dengan ()
```php
bismillah ();
```

### lokasi function
tidak seperti bahasa pemrograman lain yang memiliki aturan kusus pada lokasi funciton
function pada php bisa di buat di mana saja, 
bisa di dalam if statement, looping dan sebagianya

```php

for($i=0;$i<10;$i++){
    function bismillah (){
    //kode program yang kita inginkan
}
bismillah ()
}

```

