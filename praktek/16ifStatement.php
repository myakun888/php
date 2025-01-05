<?php
// if statement
//adalah suatu kode program yang akan di eksekusi jika memenuhi suatu keadaan / kondisi tertentu


//* if

// $manusia= 'syahadat';
$agama="islam";
$sholat=5;

if($agama=='islam'){
    echo 'anda adalah seorang muslim'.PHP_EOL;
};



//* else
// terkadang kita ingin mengeksekusi kode program yang tidak memenuhi kondisi, kita menggunakan kode else

{
$agama= 'kristen';
   
if($agama=='islam'){
        echo 'anda adalah seorang muslim';
}
else {
    echo 'anda kafir';
}  ;
   
}


//* else if
// jika kita ingin menambahkan lebih dari satu kondisi percabangan, kita menggunakan kata kunci else if

{
    $agama = 'islam';
    $sholat=5;
    if ($agama=="islam" && $sholat >=7) {
        echo "anda alim";
    }

elseif ($agama=="islam" && $sholat >=6) {
    echo 'anda muslim';
}
elseif ($agama=="islam" && $sholat ==5) {
    echo 'anda islam';
}
else {
    echo 'anda kafir';

}
}

?>