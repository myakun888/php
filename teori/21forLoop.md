# for loop

adalah salah satu keyword atau kata kunci yang di gunakan untuk melakukan perulangan selama kondisi for terpenuhi

sintak for loop pada php
```
for(init;kondisi;post_statement){

    code
}


```

contoh kode
for loop
```php

for($i=0;$i<10;$i++){

    echo"tiada tuhan selain alllah, nabi muhammad utusan allah"."\n";
}
```

### perlu di perhatikan dalam menulis for loop

- perkondisian
  ini berguna agar, looping di lakukan jika init statement memenuhi syarat,
- counter
  kita bisa menjadikan prestatemnt / post statement untuk menjadi conter




### sintak alternatif
pada for loop terdapat sintak alternatif hanya mengganti tag pembuka nya dengan titik :, dan di tutup dengan endfor

```php
for($i=0;$i<10;$i++):

    echo"tiada tuhan selain alllah, nabi muhammad utusan allah"."\n";
endfor;

```