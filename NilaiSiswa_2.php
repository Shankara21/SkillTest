<?php
class Nilai
{
  public $mapel;
  public $nilai;

  public function __construct($mapel, $nilai)
  {
    $this->mapel = $mapel;
    $this->nilai = $nilai;
  }
}

class Siswa
{
  public $nrp;
  public $nama;
  public $daftarNilai = [];

  public function __construct($nrp, $nama)
  {
    $this->nrp = $nrp;
    $this->nama = $nama;
  }

  public function tambahNilai($mapel, $nilai)
  {
    $this->daftarNilai[] = new Nilai($mapel, $nilai);
  }
}

function generateRandomName($length = 10)
{
  $characters = 'abcdefghijklmnopqrstuvwxyz';
  $randomName = '';

  for ($i = 0; $i < $length; $i++) {
    $randomName .= $characters[rand(0, strlen($characters) - 1)];
  }
  return $randomName;
}

function generateRandomStudents($count)
{
  $students = [];
  for ($i = 0; $i < $count; $i++) {
    $name = generateRandomName(10);
    $mapel = ['Inggris', 'Indonesia', 'Jepang'][rand(0, 2)];
    $nilai = rand(0, 100);
    $siswa = new Siswa($i + 1, $name);
    $siswa->tambahNilai($mapel, $nilai);
    $students[] = $siswa;
  }

  return $students;
}

$siswaBaru = new Siswa(12345, 'Muhammad Lazuardi Timur');
$siswaBaru->tambahNilai('Inggris', 100);

$generateSiswa = generateRandomStudents(10);

foreach ($generateSiswa as $siswa) {
  echo "NRP : " . $siswa->nrp . "\nNama : " . $siswa->nama . "\n";
  foreach ($siswa->daftarNilai as $nilai) {
    echo "Mapel : " . $nilai->mapel . "\nNilai : " . $nilai->nilai . "\n";
  }
  echo "\n";
}
