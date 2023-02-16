<?php

// Todo Union Types
// * PHP adalah bahasa pemrograman yang dynamic
// * Kita tahu sebenarnya saat membuat variabel, parameter, argument, return value, sebenarnya di PHP kita tidak wajib menyebutkan tipe datanya, dan PHP bisa berubah-ubah tipe data
// * Saat kita tambahkan tipe data, maka secara otomatis PHP akan memastikan tipe data tersebut harus sesuai dengan tipe data yang sudah kita definisikan
// * Di PHP 8, ada fitur Union Types, dimana kita bisa menambahkan lebih dari satu tipe data ke property, argument, parameter, atau return value
// * Penggunaan Union Types bisa menggunakan tanpa | diikuti dengan tipe data selanjutnya
// * https://wiki.php.net/rfc/union_types_v2 



// ! Union Types di Property
class Example
{
    public string|int|bool|array $data;
}


$example =  new Example();
$example->data = "Thomas";
$example->data = 10;
$example->data = TRUE;
$example->data = [];



// ! Union Type di Argument
function sampleFunction(string|int|array|bool $data): void
{
    if (is_string($data)) {
        echo "String" . PHP_EOL;
    } else if (is_int($data)) {
        echo "Integer" . PHP_EOL;
    } else if (is_array($data)) {
        echo "Array" . PHP_EOL;
    } else if (is_bool($data)) {
        echo "Bool" . PHP_EOL;
    }
}


sampleFunction("Thomas");
sampleFunction(10);
sampleFunction([]);
sampleFunction(true);



// ! Union Type di Return Value
function sampleFunction2(string|int|array|bool $data): string|int|array|bool
{
    if (is_string($data)) {
        return "String" ;
    } else if (is_int($data)) {
        return 10;
    } else if (is_array($data)) {
        return ["Thomas"];
    } else if (is_bool($data)) {
        return false;
    }
}

var_dump(sampleFunction2("Thomas"));
var_dump(sampleFunction2(10));
var_dump(sampleFunction2([]));
var_dump(sampleFunction2(false));
