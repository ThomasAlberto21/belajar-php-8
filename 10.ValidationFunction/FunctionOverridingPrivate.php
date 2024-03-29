<?php


// Todo Function Overriding Private
// * Di PHP 7, saat kita membuat function, tapi ternyata di parent nya terdapat function dengan nama yang sama, walaupun private, hal itu dianggap overriding
// * Padahal sudah jelas bahwa private function tidak bisa diakses oleh turunannya
// * Di PHP 8, sekarang private function tidak ada hubungannya lagi dengan child class nya, sehingga kita bebas membuat function dengan nama yang sama walaupun di parent ada function private dengan nama yang sama
// * https://wiki.php.net/rfc/inheritance_private_methods 


class Manager
{
    private function test(): void
    {
    }
}


class Secretary extends Manager
{
    public function test(string $name): string
    {
        return "Hello Secretary" . PHP_EOL;
    }
}
