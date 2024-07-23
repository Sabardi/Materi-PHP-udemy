<?php
// Inisialisasi variabel
$a = true;
$b = false;

// AND (&&)
// Mengembalikan true jika kedua operan bernilai true
$c = $a && $b; // $c bernilai false karena $b bernilai false
echo "\$a && \$b: " . ($c ? 'true' : 'false') . "<br>";

// OR (||)
// Mengembalikan true jika salah satu atau kedua operan bernilai true
$d = $a || $b; // $d bernilai true karena $a bernilai true
echo "\$a || \$b: " . ($d ? 'true' : 'false') . "<br>";

// NOT (!)
// Mengembalikan kebalikan dari nilai boolean operan
$e = !$a; // $e bernilai false karena $a bernilai true
echo "!\$a: " . ($e ? 'true' : 'false') . "<br>";

// AND (and)
// Sama seperti &&, tetapi memiliki prioritas yang lebih rendah
$f = $a and $b; // $f bernilai false karena $b bernilai false
echo "\$a and \$b: " . ($f ? 'true' : 'false') . "<br>";

// OR (or)
// Sama seperti ||, tetapi memiliki prioritas yang lebih rendah
$g = $a or $b; // $g bernilai true karena $a bernilai true
echo "\$a or \$b: " . ($g ? 'true' : 'false') . "<br>";

// XOR (xor)
// Mengembalikan true jika salah satu dari operan bernilai true, tetapi tidak keduanya
$h = $a xor $b; // $h bernilai true karena hanya satu operan yang bernilai true
echo "\$a xor \$b: " . ($h ? 'true' : 'false') . "<br>";



// Inisialisasi variabel
$a = true;
$b = false;

// AND (&&)
// Mengembalikan true jika kedua operan bernilai true

// Struktur if memeriksa apakah $a && $b bernilai true.
// Jika ya, mencetak "true", jika tidak, mencetak "false".
// Karena $b bernilai false, kondisi akan menghasilkan "false".
if ($a && $b) {
    echo "\$a && \$b: true<br>";
} else {
    echo "\$a && \$b: false<br>"; // Akan dieksekusi karena $b bernilai false
}

// OR (||)
// Mengembalikan true jika salah satu atau kedua operan bernilai true

// Struktur if memeriksa apakah $a || $b bernilai true.
// Jika ya, mencetak "true", jika tidak, mencetak "false".
// Karena $a bernilai true, kondisi akan menghasilkan "true".
if ($a || $b) {
    echo "\$a || \$b: true<br>"; // Akan dieksekusi karena $a bernilai true
} else {
    echo "\$a || \$b: false<br>";
}

// NOT (!)
// Mengembalikan kebalikan dari nilai boolean operan

// Struktur if memeriksa apakah !$a bernilai true.
// Jika ya, mencetak "true", jika tidak, mencetak "false".
// Karena $a bernilai true, !$a akan bernilai false, jadi kondisi menghasilkan "false".

if (!$a) {
    echo "!\$a: true<br>";
} else {
    echo "!\$a: false<br>"; // Akan dieksekusi karena $a bernilai true
}

// AND (and)
// Sama seperti &&, tetapi memiliki prioritas yang lebih rendah

// Struktur if memeriksa apakah $a and $b bernilai true.
// Jika ya, mencetak "true", jika tidak, mencetak "false".
// Karena $b bernilai false, kondisi akan menghasilkan "false".
if ($a and $b) {
    echo "\$a and \$b: true<br>";
} else {
    echo "\$a and \$b: false<br>"; // Akan dieksekusi karena $b bernilai false
}

// OR (or)
// Sama seperti ||, tetapi memiliki prioritas yang lebih rendah
// Struktur if memeriksa apakah $a or $b bernilai true.
// Jika ya, mencetak "true", jika tidak, mencetak "false".
// Karena $a bernilai true, kondisi akan menghasilkan "true".

if ($a or $b) {
    echo "\$a or \$b: true<br>"; // Akan dieksekusi karena $a bernilai true
} else {
    echo "\$a or \$b: false<br>";
}

// XOR (xor)
// Mengembalikan true jika salah satu dari operan bernilai true, tetapi tidak keduanya

// Struktur if memeriksa apakah $a xor $b bernilai true.
// Jika ya, mencetak "true", jika tidak, mencetak "false".
// Karena hanya salah satu dari $a atau $b yang bernilai true, kondisi menghasilkan "true".
if ($a xor $b) {
    echo "\$a xor \$b: true<br>"; // Akan dieksekusi karena hanya satu operan yang bernilai true
} else {
    echo "\$a xor \$b: false<br>";
}


echo '<p style="border-bottom: 2px solid black; display: inline-block; width: 100%;">perbandingan menggunakan angka</p>';
// Inisialisasi variabel
$x = 10;
$y = 5;
$z = 0;

// AND (&&)
// Mengembalikan true jika kedua operan bernilai true (non-nol)
if ($x && $y) {
    echo "\$x && \$y: true<br>"; // Akan dieksekusi karena $x dan $y keduanya non-nol
} else {
    echo "\$x && \$y: false<br>";
}

// OR (||)
// Mengembalikan true jika salah satu atau kedua operan bernilai true (non-nol)
if ($x || $z) {
    echo "\$x || \$z: true<br>"; // Akan dieksekusi karena $x bernilai non-nol
} else {
    echo "\$x || \$z: false<br>";
}

// NOT (!)
// Mengembalikan kebalikan dari nilai boolean operan
if (!$z) {
    echo "!\$z: true<br>"; // Akan dieksekusi karena $z bernilai nol
} else {
    echo "!\$z: false<br>";
}

// AND (and)
// Sama seperti &&, tetapi memiliki prioritas yang lebih rendah
if ($x and $y) {
    echo "\$x and \$y: true<br>"; // Akan dieksekusi karena $x dan $y keduanya non-nol
} else {
    echo "\$x and \$y: false<br>";
}

// OR (or)
// Sama seperti ||, tetapi memiliki prioritas yang lebih rendah
if ($x or $z) {
    echo "\$x or \$z: true<br>"; // Akan dieksekusi karena $x bernilai non-nol
} else {
    echo "\$x or \$z: false<br>";
}

// XOR (xor)
// Mengembalikan true jika salah satu dari operan bernilai true (non-nol), tetapi tidak keduanya
if ($x xor $y) {
    echo "\$x xor \$y: true<br>";
} else {
    echo "\$x xor \$y: false<br>"; // Akan dieksekusi karena kedua variabel bernilai non-nol
}

// XOR (xor) dengan satu operan nol
if ($x xor $z) {
    echo "\$x xor \$z: true<br>"; // Akan dieksekusi karena hanya satu variabel yang bernilai non-nol
} else {
    echo "\$x xor \$z: false<br>";
}
?>
