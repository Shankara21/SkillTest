<?php
function karakterTerbanyak($kata)
{
  $kemunculan = [];

  for ($i = 0; $i < strlen($kata); $i++) {
    $karakter = strtolower($kata[$i]);
    if (isset($kemunculan[$karakter])) {
      $kemunculan[$karakter]++;
    } else {
      $kemunculan[$karakter] = 1;
    }
  }

  $maksimum = max($kemunculan);

  $karakterTerbanyak = [];

  foreach ($kemunculan as $karakter => $jumlah) {
    if ($jumlah == $maksimum) {
      $karakterTerbanyak[] = $karakter;
    }
  }

  $result = '';

  foreach ($karakterTerbanyak as $karakter) {
    $result .= "$karakter $maksimum" . "x, ";
  }
  $result = rtrim($result, ", ");

  return $result;
}

$kata1 = "Strawberry";
$kata2 = "Wellcome";


echo "Hasil untuk kata '$kata1' : " . karakterTerbanyak($kata1) . "\n";
echo "Hasil untuk kata '$kata2' : " . karakterTerbanyak($kata2) . "\n";
