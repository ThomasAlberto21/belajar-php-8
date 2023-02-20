<?php


// Todo Nullsafe Operator
// * PHP sekarang memiliki nullsafe operator seperti di bahasa pemrograman Kotlin atau TypeScript
// * Biasanya ketika kita ingin mengakses sesuatu dari sebuah object yang bisa memungkinan nilai null, maka kita akan melakukan pengecekan apakah object tersebut null atau tidak, jika tidak baru kita akses object tersebut
// * Dengan nullsafe operator, kita tidak perlu melakukan itu, kita hanya perlu menggunakan karakter ? (tanda tanya), secara otomatis PHP akan melakukan pengecekan null tersebut 
// * https://wiki.php.net/rfc/nullsafe_operator 



class Address
{
    public ?string $country;
}



class User
{
    public ?Address $address;
}



function getCountry(?User $user): ?string
{
    return $user?->address?->country;
}


echo getCountry(null) . PHP_EOL;
