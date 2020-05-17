<?php 

$i = 5; // Variabel i diisi dengan angka 5

echo "Aku adalah angka " . $i . "<br>"; // Memanggil dan menampikan nilai pada variabel i

echo "Jika aku ditambah 20, jumlahku sekarang " . ($i += 20) . "<br>"; // menjumlahkan variabel i dengan angka 20, menghasilkan 25

echo "Jika aku dikali 4, jumlahku sekarang " . ($i *= 4) . "<br>"; // mengalikan variabel i sebelumnya yaitu 25 dengan angka 4, menghasilkan 100

echo "Jika aku dikurang 10, jumlahku sekarang " . ($i -= 10) . "<br>"; // mengurangi variabel i sebelumnya yaitu 100 dengan angka 10, menghasilkan 90

echo "Jika aku dibagi 5, maka sisaku sekarang adalah " . ($i %= 5) ; // mengambil sisa bagi variabel i sebelumnya yaitu 90 dengan angka 5, yang mana sisa baginya adalah 0


 ?>