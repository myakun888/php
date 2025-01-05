<?php
// switch statement


$data = "C

";

switch ($data) {
    case 'A':
        echo " nilai anda sangat baik";
        break;
    case 'B':
        echo "nilai anda cukup baik";
        break;
    case 'C':
        echo "nilai anda baik";
        break;
    default:

        echo "silahkan belajar lagi";
        break;
}


//sintak alternatif
switch ($data): //dibuka dengan titik dua :
    case 'A':
        echo " nilai anda sangat baik";
        break;
    case 'B':
        echo "nilai anda cukup baik";
        break;
    case 'C':
    case 'D':
        echo "nilai anda baik 2";
        break;

    default:

        echo "silahkan belajar lagi";
        break;
endswitch; // tag penutup endswitch