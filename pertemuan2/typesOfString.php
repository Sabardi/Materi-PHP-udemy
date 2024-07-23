<?php
echo '<p style="border-bottom: 2px solid black; display: inline-block; width: 100%;">Di PHP, string adalah tipe data yang digunakan untuk menyimpan teks. PHP mendukung beberapa jenis string dan cara untuk memanipulasinya. </p>';
echo '<i style="border-bottom: 2px solid black; display: inline-block; width: 100%;"></i>';

echo '<p style="border-bottom: 2px solid black; display: inline-block; width: 100%;">1. String Biasa</p>';
echo '<i style="border-bottom: 2px solid black; display: inline-block; width: 100%;">String biasa adalah string yang dikelilingi oleh tanda kutip ganda (") atau tanda kutip tunggal.</i>';

// Tanda Kutip Tunggal ('): String di dalam tanda kutip tunggal tidak mendukung interpolasi variabel atau escape sequence khusus (kecuali untuk single quote itu sendiri dan backslash).
// Tanda Kutip Ganda ("): String di dalam tanda kutip ganda mendukung interpolasi variabel dan escape sequence seperti \n (new line), \t (tab), dll.

$singleQuoteString = 'Hello, World!';
$doubleQuoteString = "Hello, World!";

echo $singleQuoteString . "<br>"; // Output: Hello, World!
echo $doubleQuoteString . "<br>"; // Output: Hello, World!

echo '<p style="border-bottom: 2px solid black; display: inline-block; width: 100%;">2. Interpolasi Variabel dalam String</p>';
echo '<i style="border-bottom: 2px solid black; display: inline-block; width: 100%;">Interpolasi variabel hanya berlaku dalam string yang dikelilingi tanda kutip ganda (").</i>';
// Variabel $name di dalam string dengan tanda kutip ganda secara otomatis diinterpolasi.
$name = "Alice";
$greeting = "Hello, $name!";

echo $greeting . "<br>"; // Output: Hello, Alice!


echo '<p style="border-bottom: 2px solid black; display: inline-block; width: 100%;">3. Heredoc dan Nowdoc</p>';
echo '<i style="border-bottom: 2px solid black; display: inline-block; width: 100%;">Heredoc dan Nowdoc adalah dua cara untuk mendefinisikan string panjang yang mencakup beberapa baris.</i>';

// <<<'EOD' menunjukkan awal string Nowdoc.
// Variabel di dalam string Nowdoc tidak diinterpolasi.
$heredocString = <<<EOD
This is a heredoc string.
It can span multiple lines.
Variables like $name are interpolated.
EOD;

echo $heredocString . "<br>";

echo '<p style="border-bottom: 2px solid black; display: inline-block; width: 100%;">4. String Multibyte</p>';
echo '<i style="border-bottom: 2px solid black; display: inline-block; width: 100%;">Untuk mendukung karakter multibyte (misalnya, karakter dari bahasa non-Latin), PHP menyediakan fungsi multibyte string (mbstring).</i>';

$mbString = "こんにちは世界"; // Hello, World in Japanese

echo mb_strlen($mbString, 'UTF-8') . "<br>"; // Output: 7
// mb_strlen digunakan untuk menghitung panjang string multibyte dengan encoding UTF-8.


echo '<p style="border-bottom: 2px solid black; display: inline-block; width: 100%;">5. String dengan Escape Sequence</p>';
echo '<i style="border-bottom: 2px solid black; display: inline-block; width: 100%;">Escape sequence digunakan untuk menampilkan karakter khusus di dalam string.</i>';

// \n untuk new line.
// \t untuk tab.
// nl2br digunakan untuk mengonversi newline ke tag HTML <br> agar terlihat pada browser.
$escapedString = "Line 1\nLine 2\tTabbed";
echo nl2br($escapedString) . "<br>";

echo '<p style="border-bottom: 2px solid black; display: inline-block; width: 100%;">6. String Fungsi dan Manipulas</p>';
echo '<i style="border-bottom: 2px solid black; display: inline-block; width: 100%;">PHP menyediakan banyak fungsi untuk manipulasi string, seperti strlen(), str_replace(), substr(), dll.</i>';

// strlen mengembalikan panjang string.
// str_replace mengganti bagian dari string.
// substr mengambil bagian dari string.

$text = "Hello, World!";

// Menghitung panjang string
$length = strlen($text);

// Mengganti teks
$replacedText = str_replace("World", "PHP", $text);

// Mengambil substring
$substring = substr($text, 7, 5);

echo "Length: $length<br>"; // Output: Length: 13
echo "Replaced Text: $replacedText<br>"; // Output: Replaced Text: Hello, PHP!
echo "Substring: $substring<br>"; // Output: Substring: World


echo '<p style="border-bottom: 2px solid black; display: inline-block; width: 100%;">7. String dalam Array</p>';
echo '<i style="border-bottom: 2px solid black; display: inline-block; width: 100%;">String juga dapat digunakan dalam array, baik sebagai kunci maupun nilai.</i>';

// Array menggunakan string sebagai kunci untuk menyimpan data.
$array = [
    "name" => "Alice",
    "age" => 30,
    "city" => "New York"
];

echo "Name: " . $array["name"] . "<br>"; // Output: Name: Alice
echo "Age: " . $array["age"] . "<br>";  // Output: Age: 30
echo "City: " . $array["city"] . "<br>"; // Output: City: New York



echo '<p style="border-bottom: 2px solid black; display: inline-block; width: 100%;">8. String dengan Regular Expression</p>';
echo '<i style="border-bottom: 2px solid black; display: inline-block; width: 100%;">PHP menyediakan fungsi untuk melakukan pencarian dan manipulasi string menggunakan regular expression.</i>';

// preg_match digunakan untuk mencari pola dalam string dengan menggunakan regular expression.

$pattern = "/world/i"; // Case-insensitive search for 'world'
$text = "Hello, World!";

if (preg_match($pattern, $text)) {
    echo "Pattern found!<br>"; // Output: Pattern found!
} else {
    echo "Pattern not found!<br>";
}

echo '<p style="border-bottom: 2px solid black; display: inline-block; width: 100%;">9. String dengan Encoding dan Decoding</p>';
echo '<i style="border-bottom: 2px solid black; display: inline-block; width: 100%;">Fungsi untuk encoding dan decoding string, misalnya untuk encoding URL.</i>';
// urlencode dan urldecode digunakan untuk mengonversi string menjadi format yang aman untuk URL dan sebaliknya.
$url = "https://example.com/?name=John Doe&age=30";

$encodedUrl = urlencode($url);
$decodedUrl = urldecode($encodedUrl);

echo "Encoded URL: $encodedUrl<br>";
echo "Decoded URL: $decodedUrl<br>";

