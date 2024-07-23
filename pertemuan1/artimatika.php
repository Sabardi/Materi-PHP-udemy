<?php

// Operator aritmatika di PHP digunakan untuk melakukan operasi matematis pada nilai-nilai numerik.
$a = 10;
$b = 2;

// Penjumlahan
$sum = $a + $b;
echo "Penjumlahan: $a + $b = $sum<br>";

// Pengurangan
$diff = $a - $b;
echo "Pengurangan: $a - $b = $diff<br>";

// Perkalian
$prod = $a * $b;
echo "Perkalian: $a * $b = $prod<br>";

// Pembagian
$quot = $a / $b;
echo "Pembagian: $a / $b = $quot<br>";

// Modulus
$mod = $a % $b;
echo "Modulus: $a % $b = $mod<br>";

// Eksponensiasi
$exp = $a ** $b;
echo "Eksponensiasi: $a ** $b = $exp<br>";

// Operator increment dan decrement digunakan untuk menambah atau mengurangi nilai suatu variabel dengan satu.

$a = 5;

// Pre-increment
echo "Pre-increment: " . ++$a . "<br>"; // $a menjadi 6, kemudian dicetak 6

// Post-increment
echo "Post-increment: " . $a++ . "<br>"; // $a dicetak 6, kemudian menjadi 7
echo "Setelah Post-increment: " . $a . "<br>"; // $a sudah menjadi 7

// Pre-decrement
echo "Pre-decrement: " . --$a . "<br>"; // $a menjadi 6, kemudian dicetak 6

    // Post-decrement
echo "Post-decrement: " . $a-- . "<br>"; // $a dicetak 6, kemudian menjadi 5
echo "Setelah Post-decrement: " . $a . "<br>"; // $a sudah menjadi 5
?>

