<?php
#while loop
/**
 * adalah salah satu keyword perulangan,
 */

$data = 0;

while ($data <= 10) {
    echo "aku bersaksi tiada tuhan selain allah, nabi muhmmad utusan allah" . "\n";

    $data++;
};

#sintak alternatif dari while loop

while ($data <= 20) :
    echo "aku bersaksi tiada tuhan selain allah, nabi muhmmad utusan allah"." $data". "\n";
    $data++;
endwhile;
