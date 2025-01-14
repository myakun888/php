# is_function


di php banyak function bawaan selain array function string function
terdapat juga prefix function yang diawali dengan `is`


diantaranya
- is_null() , untuk mengecek apakah variabel ini bernilai null/tidak
- is_int() , untuk mengecek apakah milai ini integer atau bukan
- is_bool(), untuk mengecek apakahh nilai ini bernilai boolean 
- is_string(), untuk mengecek apakah nilai ini string atau bukan
- is_float(), untuk mengecek apakah nilai ini float
- is_callable(), untuk mengecek apakah nilai ini callable/function atau bukan

### return valuenya
kebanyakn is funciton ini akan mereturn value berupa boolean
true jika benar, false jika salah  

  dan masih banyak lagi 
  silahkan cek di dokumentasinya 



```php
$data = "alquran";

is_string($data); //true
is_float($data); //false, karen value dari $data adalah string
```