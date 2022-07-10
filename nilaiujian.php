<?php

$nilaiujiansiswa = [
  ['nama' => 'Radit', 'nilai' => 75],
  ['nama' => 'Fuji', 'nilai' => 90],
  ['nama' => 'Santoso', 'nilai' => 50],
  ['nama' => 'Raihan', 'nilai' => 70],
  ['nama' => 'Naufal', 'nilai' => 20],
  ['nama' => 'Putri', 'nilai' => 30],
  ['nama' => 'Haryanti', 'nilai' => 85],
  ['nama' => 'Dian', 'nilai' => 15],
];

# nilai yang kurang dari atau sama dengan 30
$nilai30Kebawah = array_filter($nilaiujiansiswa, function ($item) {
  return $item['nilai'] <= 30;
});

# nilai yang lebih dari 80
$nilaiYangLebihDari80 = array_filter($nilaiujiansiswa, function ($item) {
  return $item['nilai'] <= 30;
});

?>
<p><a href="home.html">Kembali</a></p>