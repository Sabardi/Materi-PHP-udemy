<?php

echo '<p style="border-bottom: 2px solid black; display: inline-block; width: 100%;">Apa itu function</p>';
echo '<i style="border-bottom: 2px solid black; display: inline-block; width: 100%;">Di PHP, fungsi adalah blok kode yang dapat dipanggil dan dijalankan kapan saja dalam skrip. Fungsi memungkinkan Anda untuk mengorganisasi kode Anda, menghindari pengulangan, dan mempermudah pemeliharaan. </i>';

echo '<p style="border-bottom: 2px solid black; display: inline-block; width: 100%;">1. Mendefinisikan Fungsi</p>';
echo '<i style="border-bottom: 2px solid black; display: inline-block; width: 100%;">Untuk mendefinisikan fungsi, gunakan kata kunci function diikuti dengan nama fungsi, tanda kurung, dan blok kode.</i>';

function namaFungsi($parameter1, $parameter2) {
    // kode yang akan dijalankan
}

// Definisi Fungsi: function greet($name) mendefinisikan fungsi dengan satu parameter $name.
function greet($name) {
    echo "Hello, $name!<br>";
}

// Pemanggilan Fungsi: greet("Alice") dan greet("Bob") memanggil fungsi dengan argumen yang berbeda.
greet("Alice");
greet("Bob");


echo '<p style="border-bottom: 2px solid black; display: inline-block; width: 100%;">2. Fungsi dengan Nilai Kembali</p>';
echo '<i style="border-bottom: 2px solid black; display: inline-block; width: 100%;">Fungsi dapat mengembalikan nilai menggunakan kata kunci return.</i>';

function namaFungsi1($parameter) {
    return   $parameter ."<br>";
}

echo namaFungsi1(7);
// Fungsi add: Mengembalikan hasil penjumlahan dari dua parameter.
function add($a, $b) {
    return $a + $b;
}

// Variabel $sum: Menyimpan hasil dari pemanggilan fungsi add.
$sum = add(10, 5);
echo "Sum: $sum<br>";

echo '<p style="border-bottom: 2px solid black; display: inline-block; width: 100%;">3. Fungsi dengan Parameter Default</p>';
echo '<i style="border-bottom: 2px solid black; display: inline-block; width: 100%;">Fungsi dapat memiliki parameter dengan nilai default.</i>';

// Parameter Default: Jika tidak ada argumen yang diberikan saat pemanggilan fungsi, parameter $name akan default ke "Guest".
function ucapan($name = "Guest") {
    echo "Hello, $name!<br>";
}

ucapan(); // Menggunakan nilai default
ucapan("Alice"); // Menggunakan argumen yang diberikan

echo '<p style="border-bottom: 2px solid black; display: inline-block; width: 100%;">4. Fungsi dengan Parameter Referensi</p>';
echo '<i style="border-bottom: 2px solid black; display: inline-block; width: 100%;">Anda bisa mengubah nilai parameter dalam fungsi dengan menggunakan referensi.</i>';

// Referensi: Dengan &$value, fungsi increment mengubah nilai dari variabel $number di luar fungsi.
function increment(&$value) {
    $value++;
}

$number = 10;
increment($number);
echo "Incremented number: $number<br>";

echo '<p style="border-bottom: 2px solid black; display: inline-block; width: 100%;">5. Fungsi Anonim (Closure)</p>';
echo '<i style="border-bottom: 2px solid black; display: inline-block; width: 100%;">Fungsi anonim (atau closure) tidak memiliki nama dan bisa digunakan sebagai variabel atau argumen.
</i>';
// Fungsi Anonim: Ditetapkan ke variabel $square dan dipanggil dengan argumen 4.
$square = function($n) {
    return $n * $n;
};

echo "Square of 4: " . $square(4) . "<br>";

echo '<p style="border-bottom: 2px solid black; display: inline-block; width: 100%;">6. Fungsi dengan Parameter Variabel (Argument Unpacking)</p>';
echo '<i style="border-bottom: 2px solid black; display: inline-block; width: 100%;">Fungsi dapat menerima jumlah parameter yang tidak tetap dengan menggunakan ... (variadic function).</i>';

function sumAll(...$numbers) {
    return array_sum($numbers);
}
// Fungsi Variadic: sumAll menerima sejumlah argumen dan menggunakan array_sum untuk menjumlahkan semuanya.
echo "Sum: " . sumAll(1, 2, 3, 4, 5) . "<br>";

echo '<p style="border-bottom: 2px solid black; display: inline-block; width: 100%;">7. Fungsi dengan Return Type Declaration</p>';
echo '<i style="border-bottom: 2px solid black; display: inline-block; width: 100%;">PHP mendukung deklarasi tipe untuk nilai yang dikembalikan dari fungsi.</i>';

function getLength(string $text): int {
    return strlen($text);
}

// Return Type Declaration: : int menunjukkan bahwa fungsi getLength akan mengembalikan nilai bertipe integer.
echo "Length: " . getLength("Hello World") . "<br>";

echo '<p style="border-bottom: 2px solid black; display: inline-block; width: 100%;">8. Fungsi Rekursif</p>';
echo '<i style="border-bottom: 2px solid black; display: inline-block; width: 100%;">Fungsi rekursif adalah fungsi yang memanggil dirinya sendiri.</i>';

function factorial($n) {
    if ($n <= 1) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}

// Fungsi Rekursif: factorial memanggil dirinya sendiri untuk menghitung faktorial dari angka.
echo "Factorial of 5: " . factorial(5) . "<br>"; // Output: Factorial of 5: 120

echo '<p style="border-bottom: 2px solid black; display: inline-block; width: 100%;">9. Menggunakan Fungsi dengan call_user_func dan call_user_func_array</p>';
echo '<i style="border-bottom: 2px solid black; display: inline-block; width: 100%;">call_user_func dan call_user_func_array memungkinkan pemanggilan fungsi dengan nama string dan parameter array.</i>';

function sayHello($name) {
    echo "Hello, $name!<br>";
}

// call_user_func: Memanggil fungsi dengan nama string dan parameter individual.
// call_user_func_array: Memanggil fungsi dengan nama string dan array parameter.

call_user_func('sayHello', 'Alice');
call_user_func_array('sayHello', ['Bob']);


echo '<p style="border-bottom: 2px solid black; display: inline-block; width: 100%;">10. Fungsi dengan Default Parameter dan Overloading</p>';
echo '<i style="border-bottom: 2px solid black; display: inline-block; width: 100%;">PHP tidak mendukung overloading fungsi secara langsung, tetapi Anda bisa menggunakan default parameter untuk mencapai hasil serupa.</i>';

function multiply($a, $b = 1) {
    return $a * $b;
}

echo "Multiply 5 by 3: " . multiply(5, 3) . "<br>";

// Parameter Default: Jika parameter kedua tidak diberikan, fungsi multiply akan menggunakan nilai default 1.
echo "Multiply 5 by default value: " . multiply(5) . "<br>";


echo '<p style="border-bottom: 2px solid black; display: inline-block; width: 100%;"></p>';
echo '<i style="border-bottom: 2px solid black; display: inline-block; width: 100%;"></i>';

echo '<p style="border-bottom: 2px solid black; display: inline-block; width: 100%;"></p>';
echo '<i style="border-bottom: 2px solid black; display: inline-block; width: 100%;"></i>';


?>
