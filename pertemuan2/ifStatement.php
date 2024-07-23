<?php
if (true) {
    // kode yang dieksekusi jika kondisi bernilai true
    echo '<p style="border-bottom: 2px solid black; display: inline-block; width: 100%;">1. if statment</p>';
}

$age = 18;

// Kondisi ($age >= 18) memeriksa apakah nilai variabel $age adalah 18 atau lebih.
if ($age >= 18) {
    // Jika kondisi tersebut bernilai true, maka string "You are an adult." akan ditampilkan.
    echo "You are an adult.";
}

echo '<p style="border-bottom: 2px solid black; display: inline-block; width: 100%;">2. if-else Statement</p>';

$temperature = 20;
// Kondisi ($temperature > 30) memeriksa apakah suhu lebih dari 30.
if ($temperature > 30) {
    // ika true, maka "It's hot outside." ditampilkan.
    echo "It's hot outside.";
} else {
    // Jika false, maka "It's not too hot outside." ditampilkan.
    echo "It's not too hot outside.";
}

echo '<p style="border-bottom: 2px solid black; display: inline-block; width: 100%;">3. if-else if-else Statement</p>';

$score = 80;
// Kondisi pertama ($score >= 90) memeriksa apakah nilai lebih dari atau sama dengan 90.
if ($score >= 90) {
    echo "Grade: A";

// Jika false, kondisi berikutnya ($score >= 80) akan diperiksa.
} elseif ($score >= 80) {
    echo "Grade: B";

// Jika kondisi sebelumnya juga false, kondisi berikutnya ($score >= 70) akan diperiksa.
} elseif ($score >= 70) {
    echo "Grade: C";

// Jika semua kondisi false, blok else akan dieksekusi.
} else {
    echo "Grade: D or below";
}

echo '<p style="border-bottom: 2px solid black; display: inline-block; width: 100%;">4. Nested if Statements</p>';

$age = 25;
$hasID = true;

// Kondisi pertama memeriksa apakah $age lebih dari atau sama dengan 18.
if ($age >= 18) {
    // Jika true, maka kondisi kedua diperiksa untuk memastikan $hasID bernilai true.
    if ($hasID) {
        // Jika $hasID true, maka "You are allowed to enter." ditampilkan.
        echo "You are allowed to enter.";
    } else {
        // Jika $hasID false, maka "You need an ID to enter." ditampilkan.
        echo "You need an ID to enter.";
    }
} else {
    // Jika $age kurang dari 18, maka "You are too young to enter." ditampilkan.
    echo "You are too young to enter.";
}

echo '<p style="border-bottom: 2px solid black; display: inline-block; width: 100%;">5. Using Logical Operators</p>';
$age = 22;
$hasTicket = true;

// Kondisi ($age >= 18 && $hasTicket) memeriksa dua kondisi dengan operator logika &&.
// Operator && memastikan kedua kondisi harus bernilai true untuk mengevaluasi keseluruhan ekspresi sebagai true.

if ($age >= 18 && $hasTicket) {
    // Jika kedua kondisi terpenuhi, "You can attend the event." ditampilkan.
    echo "You can attend the event.";
} else {
    // Jika salah satu atau kedua kondisi tidak terpenuhi, "You cannot attend the event." ditampilkan.
    echo "You cannot attend the event.";
}

echo '<p style="border-bottom: 2px solid black; display: inline-block; width: 100%;">6. switch Statement as an Alternative</p>';
// Kadang-kadang switch statement bisa menjadi alternatif yang lebih bersih untuk if-else dengan banyak kondisi.

$day = "Monday";

// switch memeriksa nilai $day dan mencocokkannya dengan kasus yang diberikan.
switch ($day) {
    case "Monday":
        echo "Start of the work week.";
        // break digunakan untuk menghentikan eksekusi setelah menemukan kecocokan.
        break;
    case "Wednesday":
        echo "Midweek day.";
        break;
    case "Friday":
        echo "Almost the weekend!";
        break;

    // default digunakan jika tidak ada kasus yang cocok.
    default:
        echo "It's just a regular day.";
}