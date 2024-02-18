<?php

// cara pertama
// function nilaiTerbesarKedua($array)
// {
//   rsort($array);

//   $value = $array[1];

//   return $value;
// }

// cara kedua 
function nilaiTerbesarKedua($array)
{
  $max = PHP_INT_MIN;
  $secondMax = PHP_INT_MIN;

  foreach ($array as $nilai) {
    if ($nilai > $max) {
      $secondMax = $max;
      $max = $nilai;
    } elseif ($nilai > $secondMax && $nilai != $max) {
      $secondMax = $nilai;
    }
  }

  return $secondMax;
}

$array = [11, 20, 21, 90, 75];


echo "Nilai Terbesar kedua : " . nilaiTerbesarKedua($array);
