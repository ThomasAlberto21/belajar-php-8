<?php

// Todo Stingable Interface
// * Di PHP 8, sekarang diperkenalkan interface baru bernama Stringable
// * Jika kita melakukan override magic function __toString, maka secara otomatis class kita akan implement interface Stringable
// * Kita tidak perlu melakukannya secara manual, ini sudah dilakukan secara otomatis oleh PHP 8
// * https://wiki.php.net/rfc/stringable 


function sayHello(Stringable $stringable)
{
    echo "Hello {$stringable->__toString()}" . PHP_EOL;
}


class Person
{
    public function __toString()
    {
        return "Person";
    }
}


sayHello(new Person());
