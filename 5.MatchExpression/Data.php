<?php

// Todo Match Expression
// * PHP 8 menambahkan struktur kontrol baru bernama match expression
// * Match expression adalah struktur kontrol yang mirip dengan switch case, namun lebih baik
// * Match adalah expression, artinya dia bisa mengembalikan value
// * https://wiki.php.net/rfc/match_expression_v2
// * https://www.php.net/manual/en/control-structures.match.php 



// ! Menggunakan Switch Case
$value = "A";
$result = "";


switch ($value) {
    case "A":
    case "B":
    case "C":
        $result = "Selamat Anda Lulus" . PHP_EOL;
        break;
    case "D":
        $result = "Maaf Anda Tidak Lulus" . PHP_EOL;
        break;
    case "E":
        $result = "Mungkin Anda Salah Jurusan" . PHP_EOL;
        break;
    default:
        $result = "Nilai Tidak Ada Di Dalam Data" . PHP_EOL;
}


echo $result . PHP_EOL;




/* It's a match expression. It's a new control structure in PHP 8. It's similar to switch case, but
better. */
$result = match ($value) {
    "A", "B", "C" => "Selamat Anda Lulus",
    "D" => "Maaf Anda Tidak Lulus",
    "E" => "Mungkin Anda Salah Jurusan",
    default => "Nilai Tidak Ada Di Dalam Data"
};


echo $result . PHP_EOL;





// Todo Non Equals Check di Match Expression
// * Selain equals check, berbeda dengan switch case, di match expression, kita bisa melakukan pengecekan kondisi lainnya
// * Misal pengecekan menggunakan kondisi perbandingan, bahkan pengecekan kondisi berdasarkan boolean expression yang dihasilkan dari sebuah function



/* It's a match expression. It's a new control structure in PHP 8. It's similar to switch case, but
better. */
$value = 80;

$result = match (true) {
    $value >= 80 => "A",
    $value >= 70 => "B",
    $value >= 60 => "C",
    $value >= 50 => "D",
    default => "E"
};


echo "Nilai Anda : $result" . PHP_EOL;





// Todo Match Expression dengan Kondisi


$name = "Thomas";

$result = match (true) {
    str_contains($name, "Mr.") => "Hello Sir",
    str_contains($name, "Mrs.") => "Hello Mam",
    default => "Hello"
};


echo $result . PHP_EOL;
