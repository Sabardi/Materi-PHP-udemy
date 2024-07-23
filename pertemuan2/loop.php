<!-- for (inisialisasi; kondisi; increment) {
    // kode yang akan dijalankan
} -->

<?php
echo '<p style="border-bottom: 2px solid black; display: inline-block; width: 100%;">1. for Loop</p>';
echo '<i style="border-bottom: 2px solid black; display: inline-block; width: 100%;">for loop adalah salah satu loop yang paling umum digunakan. Ini sangat berguna ketika Anda mengetahui jumlah iterasi yang diinginkan sebelumnya.</i>';

// Inisialisasi: $i = 0 - Menetapkan nilai awal variabel.
// Kondisi: $i < 5 - Loop terus berlanjut selama kondisi ini true.
// Increment: $i++ - Menambahkan 1 ke variabel $i setelah setiap iterasi.
for ($i = 0; $i < 5; $i++) {
    echo "Iteration: $i<br>";
}

echo '<p style="border-bottom: 2px solid black; display: inline-block; width: 100%;">2. while Loop</p>';
echo '<i style="border-bottom: 2px solid black; display: inline-block; width: 100%;">while loop akan terus menjalankan blok kode selama kondisi yang diberikan adalah true.</i>';

$i = 0;
// Kondisi: $i < 5 - Loop akan berlanjut selama $i kurang dari 5.
while ($i < 5) {
    // Increment: $i++ - Menambahkan 1 ke variabel $i di dalam loop.
    echo "Iteration: $i<br>";
    $i++;
}

echo '<p style="border-bottom: 2px solid black; display: inline-block; width: 100%;">3. do-while Loop</p>';
echo '<i style="border-bottom: 2px solid black; display: inline-block; width: 100%;">do-while loop mirip dengan while, tetapi memastikan bahwa blok kode dijalankan setidaknya sekali, karena kondisi diperiksa setelah eksekusi.</i>';

$i = 0;
// Blok kode: Selalu dijalankan sekali sebelum kondisi diperiksa.
do {
    echo "Iteration: $i<br>";
    $i++;
// Kondisi: $i < 5 - Loop berlanjut selama kondisi ini true.
} while ($i < 5);



echo '<p style="border-bottom: 2px solid black; display: inline-block; width: 100%;">4. foreach Loop</p>';
echo '<i style="border-bottom: 2px solid black; display: inline-block; width: 100%;">foreach loop digunakan khusus untuk iterasi melalui elemen-elemen dalam array. Ini lebih sederhana dan lebih bersih daripada menggunakan for loop untuk array.</i>';

// Array: $fruits - Array yang ingin Anda iterasi.
$fruits = array("Apple", "Banana", "Cherry");

// Variabel: $fruit - Menyimpan nilai setiap elemen array pada iterasi saat ini.
foreach ($fruits as $fruit) {
    echo "Fruit: $fruit<br>";
}


echo '<p style="border-bottom: 2px solid black; display: inline-block; width: 100%;">5. Looping dengan Indeks pada foreach</p>';
echo '<i style="border-bottom: 2px solid black; display: inline-block; width: 100%;">Jika Anda juga perlu mengakses indeks dalam foreach</i>';

$fruits = array("A" => "Apple", "B" => "Banana", "C" => "Cherry");

// Indeks: $key - Menyimpan kunci dari elemen array.
// Nilai: $value - Menyimpan nilai dari elemen array
foreach ($fruits as $key => $value) {
    echo "Key: $key, Fruit: $value<br>";
}

echo '<p style="border-bottom: 2px solid black; display: inline-block; width: 100%;">6. break dan continue dalam Loop</p>';
echo '<i style="border-bottom: 2px solid black; display: inline-block; width: 100%;"><li>break: Menghentikan loop sepenuhnya dan melanjutkan eksekusi setelah loop.</li>
<li>continue: Melewati iterasi saat ini dan melanjutkan dengan iterasi berikutnya.</li></i>';

echo '<i style="border-bottom: 2px solid black; display: inline-block; width: 100%;">contoh break</i>';
for ($i = 0; $i < 10; $i++) {
    if ($i == 5) {
        // break: Menghentikan eksekusi loop ketika nilai $i sama dengan 5.
        break; // Menghentikan loop ketika $i mencapai 5
    }
    echo "Iteration: $i<br>";
}

echo '<i style="border-bottom: 2px solid black; display: inline-block; width: 100%;">contoh continus</i>';
for ($i = 0; $i < 10; $i++) {
    if ($i % 2 == 0) {
        // continue: Melewati iterasi jika $i adalah angka genap dan melanjutkan dengan iterasi berikutnya.
        continue; // Melewati iterasi saat ini jika $i genap
    }
    echo "Odd number: $i<br>";
}

echo '<p style="border-bottom: 2px solid black; display: inline-block; width: 100%;">catatatn</p>';
echo '<i style="border-bottom: 2px solid black; display: inline-block; width: 100%;">

<li>
for loop: Ketika jumlah iterasi diketahui.
</li>

<li>
while loop: Ketika iterasi berdasarkan kondisi yang perlu diperiksa sebelum setiap eksekusi.
</li>

<li>
do-while loop: Ketika Anda ingin memastikan blok kode dijalankan setidaknya sekali.
</li>

<li>
foreach loop: Ketika iterasi melalui array atau objek.
</li>
</i>';


echo '<p style="border-bottom: 2px solid black; display: inline-block; width: 100%;">contoh advance nya</p>';

echo '<p style="border-bottom: 2px solid black; display: inline-block; width: 100%;">1. for Loop dengan Penghentian Dini dan Penanganan Kesalahan</p>';
echo '<i style="border-bottom: 2px solid black; display: inline-block; width: 100%;">Contoh ini menunjukkan bagaimana menggunakan for loop untuk menghitung nilai dalam array, serta bagaimana menghentikan eksekusi jika kondisi tertentu terpenuhi, dan bagaimana menangani kesalahan dengan try-catch.</i>';

// Array: $values - Daftar nilai yang akan diproses.
$values = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$sum = 0;

        // Penanganan Kesalahan: try-catch menangani dan menangkap pengecualian jika terjadi kesalahan.
for ($i = 0; $i < count($values); $i++) {
    try {
        if ($values[$i] % 2 == 0) {
            $sum += $values[$i];
        }
        if ($sum > 20) {
            // Penghentian Dini: throw new Exception("Sum exceeds 20."); digunakan untuk menghentikan loop jika jumlah melebihi 20.
            throw new Exception("Sum exceeds 20.");
        }
    } catch (Exception $e) {
        echo "Caught exception: ", $e->getMessage(), "<br>";
        break; // Menghentikan loop jika terjadi kesalahan
    }
    echo "Current sum: $sum<br>";
}
echo '<p style="border-bottom: 2px solid black; display: inline-block; width: 100%;">2. while Loop dengan Penundaan dan Penggunaan sleep</p>';
echo '<i style="border-bottom: 2px solid black; display: inline-block; width: 100%;">Contoh ini menunjukkan bagaimana menggunakan while loop untuk menunggu beberapa detik antara setiap iterasi, berguna untuk polling atau pembuatan delay.</i>';

$counter = 0;
while ($counter < 5) {
    echo "Counter: $counter<br>";
    $counter++;
    // Penundaan: sleep(2); menyebabkan eksekusi berhenti selama 2 detik sebelum melanjutkan ke iterasi berikutnya.
    sleep(0.2); // Menunggu selama 2 detik sebelum iterasi berikutnya
}

echo '<p style="border-bottom: 2px solid black; display: inline-block; width: 100%;">3. do-while Loop dengan Validasi Input Pengguna
</p>';
echo '<i style="border-bottom: 2px solid black; display: inline-block; width: 100%;">Contoh ini menunjukkan penggunaan do-while loop untuk meminta pengguna memasukkan nilai sampai mereka memasukkan nilai yang valid.</i>';

// $valid = 10;
// do {
//     $input = readline("Enter a number between 1 and 10: ");
//     // Validasi Input: Loop akan terus meminta input sampai pengguna memasukkan angka yang valid antara 1 dan 10.
//     if (is_numeric($input) && $input >= 1 && $input <= 10) {
//         $valid = true;
//         echo "You entered a valid number: $input<br>";
//     } else {
//         echo "Invalid input. Please try again.<br>";
//     }
// } while (!$valid);

echo '<p style="border-bottom: 2px solid black; display: inline-block; width: 100%;">4. foreach Loop dengan Nested Array dan Penanganan Data</p>';
echo '<i style="border-bottom: 2px solid black; display: inline-block; width: 100%;">Contoh ini menunjukkan cara menggunakan foreach untuk mengiterasi melalui nested array (array di dalam array) dan menangani data secara lebih mendalam.</i>';

// Nested Array: Array $employees berisi array asosiatif yang menyimpan informasi tentang karyawan.
$employees = [
    ["name" => "Alice", "department" => "HR", "salary" => 5000],
    ["name" => "Bob", "department" => "IT", "salary" => 6000],
    ["name" => "Charlie", "department" => "Marketing", "salary" => 5500]
];

foreach ($employees as $employee) {
    echo "Name: " . $employee["name"] . "<br>";
    echo "Department: " . $employee["department"] . "<br>";
    // Formatting: number_format digunakan untuk format gaji dengan dua tempat desimal.
    echo "Salary: $" . number_format($employee["salary"], 2) . "<br><br>";
}



echo '<p style="border-bottom: 2px solid black; display: inline-block; width: 100%;">5. Penggunaan foreach dengan Array Asosiatif dan Kunci/Value</p>';
echo '<i style="border-bottom: 2px solid black; display: inline-block; width: 100%;">Contoh ini menunjukkan bagaimana menggunakan foreach untuk iterasi melalui array asosiatif dan mengakses kunci serta nilai dari elemen array.</i>';

// Array Asosiatif: $settings berisi pengaturan konfigurasi dengan kunci dan nilai.
$settings = [
    "site_name" => "My Website",
    "admin_email" => "admin@example.com",
    "maintenance_mode" => true
];
// Kunci dan Nilai: $key dan $value digunakan untuk menampilkan pengaturan dan status.
foreach ($settings as $key => $value) {
    echo "Setting: $key - ";
    echo is_bool($value) ? ($value ? "Enabled" : "Disabled") : $value;
    echo "<br>";
}

echo '<p style="border-bottom: 2px solid black; display: inline-block; width: 100%;">6. foreach Loop dengan Referensi untuk Mengubah Data Array</p>';
echo '<i style="border-bottom: 2px solid black; display: inline-block; width: 100%;">Contoh ini menunjukkan bagaimana menggunakan foreach dengan referensi untuk memodifikasi nilai di dalam array.</i>';

// Referensi: &$number digunakan untuk mengubah nilai di array secara langsung.
$numbers = [1, 2, 3, 4, 5];
foreach ($numbers as &$number) {
    $number *= 2; // Menggandakan setiap angka di array
}
// Unset: unset($number); untuk menghapus referensi setelah loop selesai.
unset($number); // Menghapus referensi untuk menghindari efek samping

print_r($numbers); // Menampilkan array yang sudah dimodifikasi


echo '<p style="border-bottom: 2px solid black; display: inline-block; width: 100%;"></p>';
echo '<i style="border-bottom: 2px solid black; display: inline-block; width: 100%;"></i>';
?>