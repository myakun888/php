# reference



reference adalah mengambil / mengakses variabel lain dengan nama yang berbeda

fitur reference di php berbeda dengan yang ada di c++ / c, jika di c fitur ini pointer
sedangkandi php kalau kita analogikan seperti short cut pada windows atau alias pada linux

membuat assing reference kita hanya menambahkan tanda `&` di depan varaibel nya
`&$nama_variabel`

## assign by reference
artinya pada php kita bisa membuat variabel menuju satu value yang sama

```php

//tanpa reference
$asmaul_husna = 'ya malik'

$asamul_husna2 = &$asmaul_husna;
echo $asmaul_husna;// ya malik


$asmaul_hunsa2 = 'yua kudus'; 
echo $asmaul_husna2 // ya kudus

```


## pass by reference

selain assign atau memberikan nilai dari variabel lain, kita juga bisa mengirimkan nya sebagai data

cukup menambahkan tanda & pada argumen saat membuat function nya

karena jika tanpa reference , secar default yang kita ambil hanya data nya saja, jika kita ulangi lagi maka data akan kembali ke awal
degna pass by reference data mirip menjadi static,

```php

function doa (&$data){

    $data++
}

$nilai =1;

doa($nilai);
echo $nilai;
```


## return by reference

fitur ini bisa mengembalikan reference pada function
namun hati hati karena , gunakan fitur ini jika memang di perlukan, karena fitur ini bisa membingungkan

cara menggunakan nya cukup tambahkan tanda & pada awal nama function nya

```php

funciton &doa(){

    static $data = 100;
    return $data
}

$a = $doa();
$a = 200;

$b = $doa()

echo $b
```