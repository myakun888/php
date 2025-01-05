# switch statement
adalah kode program mirip dengan if statement tapi ini dalam bentuk sederhana,
yang biasa digunakan hanya untuk perbandingan sederhana yaitu sama dengan ==






```php
$data = "A"
switch($data){
    case "A":
    #kode
    echo "anda lulus denga baik";
    break
    case "B":
    #kode
    case "C":
    echo   " anda lulus ";
    break
    default:
    #kode
    echo " anda belum lulus ";
}


// bentuk sintak alternatif
// hanya di bedakan dengna tana : dan diakhiri dengan endwsitch


switch($data): // penmbuka nya
    case "A":
    #kode
    echo "anda lulus denga baik";
    break
    case "B":
    #kode
    case "C":
    echo   " anda lulus ";
    break
    default:
    #kode
    echo " anda belum lulus ";
endswitch; // penutupnya


```

