<?php


//membuat variabel
//selalu di awali dengan tanda $ dollar
$tuhan = "ALLAH SWT";

//untuk pembuatan nama diawali hanya boleh dengan huruf dan tanda under score _

$nabi = "Muhammad SAW";
$_sahabat = "para sahabat nabi";
// $3doa="doa"; ini salah karena tidak bisa dengan diawali oleh angka
echo $nabi.PHP_EOL;
echo $_sahabat.PHP_EOL;


//* teknik menulis variabel
/**
 * jika nama variabel lebih dari satu kalimat bisa di pisah dengan underscore atau
 *  bisa dengan camel case, atau snake case
 */
// camel case
//awal kalimat huruf kecil , lalu kalimat selanjutnya huruf besar
$nabiAllah = 'muhammad saw';

//snacke case
//setiap awal kalimat huruf besar
$NabiAllah = 'muhammad saw';
$nabi_allah_= 'muhamamd saw';

//* variabel pada php bersipat case senstif
// artinya membedakan huruf besar dan kecil

$muhammad='rasulallah';
$Muhammad='rasulallah';

//kedua variabel di atas namanya sama tetapi berbeda karena satu diawali dengan huruf kecil satu huruf besa

echo $muhammad.PHP_EOL;
echo $Muhammad.PHP_EOL;
