# expression, block, statement


ini lebih ke teori tidak harus paham tapi setidaknya kita tahu
untuk beberapa bahasa pemrograman mungkin ini mirip atau sama ya


## ekpression

adalah saat kita mendeklarasikan / membuat variabel, function, class atau apa pun dalm kode program itu disebut expresi

- ekpresi 
  ```php
  $data = 'bismillah'; // satu expresi
  $data2 = ['alquran','injil']


  ```
- ekpresi komplek
  banyak ekpresi komplek diantaran function, object, class
 ```php

function $data (){
    echo 'bismillah';
}
```

## statement
statement kumpulan dari setiap ekpresi
atau kumpulan dari suatu expresis baik ekpresi sederhana atau ekpresi komplek,dan diakhiri dengan titik koma **;**

```php

$data1= 'bismillah;
```

## blok
kumpulan dari statement dalam suatu kode program yang di batasi atau diawali dan diakhiri dengan tanda kurung kurawal **{ }**
dengan itu kita bisa melihat batasan nya (scope) jadi kita bisa membedakan baik itu scope nya global atau bukan

```php
$data='ini global';
{
// dalam ini local
$data1='bismillah'
;
$data='ini local';

}

```