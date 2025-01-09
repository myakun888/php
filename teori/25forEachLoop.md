# for each loop
adalah perulangan yang di gunakan pada array


### tanpa for each

kita bisa menggunakan perulangan dengan for atau yang lainya
untuk melakukan perulangan pada array ,

```php
$data = ["muhammad saw","isa","musa"];

for($i=0;$<= count($data);$i++){

    echo $data[$i]; // ini menampilkan isi array bedasarkan indeks
}
```


### dengan for each

struktur kode **for each**
```
$array = ["muhammad saw","isa","musa"];
forEach( $array as $values ){
    #kode
    echo $value // menampilkan values nya


}

```


```php

$data = ["muhammad saw","isa","musa"];

forEach($data as $value){

    echo " nabi kami $value";
}
```


### For each pada array keys and values


```php

$data = [
    "islam" => "muhammad saw",
    "kristen"=>,"isa",
    "yahudi" =>"musa"];

forEach($data as $value, $keys){

    echo " agama : $keys, nabi : $value"; 
}

```
> note 
parameter pertama adalah value, dan kedua adalah keys nya
jika hanya array biasa maka parameter keduanya akan berupa indexs