<?php
// Operator assignment di PHP digunakan untuk menetapkan nilai ke variabel. Selain operator assignment dasar (=), ada beberapa operator assignment gabungan yang mengkombinasikan operasi aritmatika dengan assignment.

// Menetapkan nilai ke variabel.
$a = 5;
echo "Nilai awal: $a<br>";

// Penambahan dan Assignment
// Menambahkan nilai ke variabel dan menetapkan hasilnya ke variabel tersebut.
$b = $a;
$b += 5;
echo "Setelah \$b += 5: $b<br>";


// Pengurangan dan Assignment
// Mengurangkan nilai dari variabel dan menetapkan hasilnya ke variabel tersebut.
// Pengurangan dan Assignment
$c = $a;
$c -= 3;
echo "Setelah \$c -= 3: $c<br>";

// Perkalian dan Assignment
// Mengalikan nilai dengan variabel dan menetapkan hasilnya ke variabel tersebut.
$d = $a;
$d *= 2;
echo "Setelah \$d *= 2: $d<br>";

// Pembagian dan Assignment
// Membagi nilai dengan variabel dan menetapkan hasilnya ke variabel tersebut.
$e = $a;
$e /= 4;
echo "Setelah \$e /= 4: $e<br>";

// Modulus dan Assignment
// Menghitung sisa bagi dari variabel dengan nilai dan menetapkan hasilnya ke variabel tersebut.
$f = $a;
$f %= 3;
echo "Setelah \$f %= 3: $f<br>";

// Eksponensiasi dan Assignment
// Mengangkat variabel ke pangkat nilai dan menetapkan hasilnya ke variabel tersebut.
$g = $a;
$g **= 2;
echo "Setelah \$g **= 2: $g<br>";
?>


