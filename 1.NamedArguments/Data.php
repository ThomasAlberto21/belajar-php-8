<?php


// Todo Named Arguments
// * Biasanya saat kita memanggil function, maka kita harus memasukkan argument atau parameter sesuai dengan posisinya
// * Dengan kemampuan named argument, kita bisa memasukkan argument atau parameter tanpa harus mengikuti posisi nya
// * Namun penggunaan named argument harus disebutkan nama argument atau parameter nya
// * Named argument juga menjadikan kode program mudah dibaca ketika memanggil function yang memiliki argument yang sangat banyak
// * https://wiki.php.net/rfc/named_params 


function sayHello(string $firstName, string $middleName, string $lastName): void
{
    echo "Hello $firstName $middleName $lastName" . PHP_EOL;
}


// ! Tanpa Named Arguments
sayHello("Thomas", "Alberto", "Keren");


// ! Menggunakan Named Arguments
sayHello(firstName: "Thomas", lastName: "Keren", middleName: "Alberto");
