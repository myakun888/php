# null coalesing operator

adalah operator yang mengecek apakah suanu variabel itu null atau tidak

secara umum di php kita bisa mengecek suatu variabelitu bisa dengan is_null, atau dengan kombinasi if statment dan funcition isset()


jika dengan isnull ini akan mereturn boolean true jika benar dan false jika salah,

biasa nya dengan if statemen dan function isset()
dengan logic sebagai berikut

```php
$data = null;


if(isset($data)){
    $action = 'data disi string';
    echo $action;
}else{
    $action = 'data null';
    echo $action
}



```

## dengan coalensing operator
dengan coalesing operator cukup dengan disederhanakan dengan ??

```php
$data =null;

$hasil = $data??"data dari null";


```
penjelasannya jika variabel berisi null maka akan diambil value dari sebelah kanan
jika tidak null maka nilai atau value ny asli yang di tampilkan