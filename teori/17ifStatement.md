# if statementd

php juga mendukung if statement, sama seperti bahasa pemrograman lain

if statement adalah suatu kode programan yanga akan berjalan jika memenuhi kondisi tertentu

membuat if statement
```
if (konsisi){
    kode program
}
```
```php

$nilai = 80;
$absen = 80;


//cara pertama jika hanya statement nya 1 baris
if ($nilai>=60 and $absen>=70)
echo "anda lulus"

// cara keuda dengan kurung kurawal, jika statement lebih dari 1 baris

if ($nilai>=60 and $absen>=70){
    
echo "anda lulus"
}
// rekomendasi gunakan cara ke 2
```


## else

terkadang kita tidak hanya ingin mengeksekusi kode yang hanya memenuhi syarat saja, kita juga ingin megeksekusi kode yang tidak memenuhi syarat , kita bisa menggunakan kata kunci else (selain itu)


```php

$nilai = 50;
$absen = 80;

if ($nilai>=60 and $absen>=70){
    
echo "anda lulus"
}
else {
    echo "tidak lulus";
}

```


## else if

if statement kita bisa menyisipkan lebih dari satu kondisi, jika ingin memasukan lebih dari satu kondisi kita bisa menggunakan kata kunci ` else if `


```php

$nilai = 80;
$absen = 80;


//cara pertama jika hanya statement nya 1 baris
if ($nilai>=60 and $absen>=70)
echo "anda lulus"

// cara keuda dengan kurung kurawal, jika statement lebih dari 1 baris

if ($nilai>=80 ){
    
echo "nilai anda A";
}
else if ($nilai>=70){
echo "nilai anda b"
}
else if ($nilai >=60){
    echo "nilai anda c";
    }
else { echo "anda tidak lulus"
 }

// sintak alternatif
// menganti tanda kurung pembukan denga :, dan penutupnya dengan endif

if ($nilai>=80 ): //pembuka
    
echo "nilai anda A";

else if ($nilai>=70)
echo "nilai anda b"
else if ($nilai >=60)
 echo "nilai anda c";
else  echo "anda tidak lulus"
 endif // penutup

```
