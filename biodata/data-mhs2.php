<?php

// Menentukan nilai awal dan akhir perkalian
$awal = 12;
$akhir = 45;

// Menampilkan tabel perkalian
echo "<h1>DESAK MADE FI'RISYAYA</h1>";
echo "<h2>Tabel Perkalian $awal x $akhir</h2>";
echo "<table border='1' cellpadding='5' cellspacing='0'>";

// Menampilkan header tabel
echo "<tr><th></th><th>$awal</th></tr>";

// Looping untuk menampilkan baris tabel
for ($i = $awal + 1; $i <= $akhir; $i++) {
  echo "<tr><th>$i</th><td>" . ($i * $awal) . "</td></tr>";
}

echo "</table>";

?>
