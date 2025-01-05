<?php

//break dan continue
/**
 * break adalah keyword yang di gunakan untuk melalukan menghentikan code program
 * baik itu di dalam perulangan
*/

for ($i=0; $i < 10 ; $i++) { 
    if($i==8){
    echo "alhamdulillha ya allah $i ".PHP_EOL;
        
        break;
    }
    echo "alhamdulillha ya allah $i ".PHP_EOL;
}


for ($i=0; $i < 10 ; $i++) { 
    
    echo "alhamdulillha ya allah $i ".PHP_EOL;
break;
}


//>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>


//continue
/**
 * adalah code program kebalikan dari break, jika break mengehntikan total code program,
 * maka continue hanya melewati kode dibawahnya dan melanjutkan post / pre statement, dan melajuktan code program seperti semula;
 * 
 */

 for ($i=0; $i < 10 ; $i++) { 
    if($i==8){
        continue;
    echo "bismillah ya allah $i ".PHP_EOL; // karena kode ini di bawah dari continue , maka tidak di eksekusi, tapi langsung di lewati ke post statement selanjutnya
        
    }
    echo "bismillah ya allah $i ".PHP_EOL;
}