<?php
//di php selain function bawaan seperti string function, array function
// ada juga function bawaan degan prefix is, banyak silahkan lihat di dokumentasinya
// ini kita bahasa sebagian
// return dari is function ini kebanyakan boolean

$data = "data";

//is_string() // mengecek string
var_dump(is_string($data)); // true

var_dump(is_integer($data));//false, karena variabel $data adalah string

//dan masih banyak lagi is function ini
//is_bool(), is_callable(), dan lainya