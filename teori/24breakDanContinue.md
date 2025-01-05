# break dan contiune

### break
sebelumnya mungkin sudah dikit kita singgung untuk , kita pernah gunakan pada pengguanan
code program switchase

break ini berfungsi menghentikan code program yang sedan di eksekusi atau sedang berjalan, termasuk dalam kode perulangan

saat kita membuat kode / keyword ```break`` maka kode program di bawahnya tidak akan di eksekusi, atau jika dia dalam perualangn akan berhenti dan keluar dari kode block programnya

contoh kita gunakan pada if statement


```php
$data = 0;

//contoh 1
while($data<10){

    if($data==9){
        
        break; 
    }else{
        echo "alhamdulillah";
    }
    $data++;
}
```

### breke akan menghentikan kondisi apapun


```php
$data = 0;

//contoh 1
while($data<10){

echo "tiada tuhan selain allah";
break;

//meskipun tidak ada counter, tapi jika ada keyword break maka kode program berhenti
    
}
```


## continue

continue kebalikkan dari break , jika break total menghentikan program, maka continue melanjutkan program dan dia hanya melewati kode program di bawahnya di lanjukkan ke post statement atau prestetmen, dan melakukan lagi kode programnya


```php
$data = 0;

//contoh 1
while($data<10){

    if($data==9){
        
        continue; 
    }else{
        echo "alhamdulillah";
    }
    $data++;
}
```
ketika menemui kode keyword continue, php langsung kembali ke post/prestatement untuk melanjutkan kode program