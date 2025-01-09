# Arrow fuction

- arrow function adalah bentuk sederhana dari anonymus function
- arrow function fitur ini baru ada pad fitur php 7.4+
- arrow function otomatis mereturn nilai tanpa perlu kata kunci return
- perbadaan dengan anonymus function adalah dengan menyebutkan secaa explesit
dengan menggunakan kata kunci use
berbeda arrow function otomatis bisa mengakses diluar closurenya
tanpa harus menyebutkan secara explisit

## membuat arrow function
cukup dengan
`fn () => #kode`

```php

$tuhan = "allah"

$data = fn ()=> echo " tuhan saya $tuhan "; 

// arrow function otomatsi mereturn nilai
// mampu mengakses diluar closure nya, 

$data();
```

note:
gunakan arrrow function hanya untuk function yang sederhana