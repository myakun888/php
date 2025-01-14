<?php
// recuirsive function
/**
 * adalah function yang memangil diri nya sendiri
 * terkadadang ada suatu yang lebih mudah di kerjakan dengan recuirsive function
 * 
 * contoh faktorial
 * kita bisa menyelesaikan factorial dengan looping
 * tapi kita juga bisa menyelesaikan faktorial dengan recuirsive function
 */

// faktorial adalah perkalian dengan nilai sebelumnya
// contoh faktorial 5 adalah 1*2*3*4*5

//menyelesaikan fakktorial degan looping for loop

function foorlop($value)
{

  $nilai = 1;
  for ($i = 1; $i <= $value; $i++) {
    $nilai *= $i;
  }
  return "hasil dari faktorial $value dengan forloop, adalah $nilai" . PHP_EOL;
}

echo foorlop(5);


// faktorial dengan recuirsive 
function recLoop($value)
{

  $hasil = 0;
  if ($value == 1) {
    return 1;
  } else {
    // return "hasil dari faktorial $value".$value * recLoop($value -1).PHP_EOL;
    return $value * recLoop($value - 1);
  }
  // return "hasil dari faktorial $value , dengan recuisive adalah $hasil";
  // return "$hasil";

}
echo recLoop(5);



// ini contoh dengan recuirsive dan  callback

// $x2 = function ($value) {

//   $hasil = 0;
//   if ($value == 1) {
//     return 1;
//   } else {
//     // return "hasil dari faktorial $value".$value * recLoop($value -1).PHP_EOL;
//     return $value * recLoop($value - 1);
//   }
//   // return "hasil dari faktorial $value , dengan recuisive adalah $hasil";
//   // return "$hasil";

// };
// function cek($value, callable $x)
// {

//   $data = $x($value);

//   echo "hasil faktorial $value adalah $data";
// }

// cek(5, $x2);
// // echo (1*2*3*4*5)."\n";
// // var_dump( recLoop(4));
// // echo recLoop(5);
// cek(3, function ($value) {

//   $hasil = 0;
//   if ($value == 1) {
//     return 1;
//   } else {
//     // return "hasil dari faktorial $value".$value * recLoop($value -1).PHP_EOL;
//     return $value * recLoop($value - 1);
//   }
//   // return "hasil dari faktorial $value , dengan recuisive adalah $hasil";
//   // return "$hasil";

// });
