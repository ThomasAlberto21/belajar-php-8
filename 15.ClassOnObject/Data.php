<?php

// Todo Class On Object
// * Di PHP 7, untuk mendapatkan nama class sebuah object, kita perlu menggunakan NamaClass::class atau get_class($object)
// * Di PHP 8, sekarang kita bisa langsung mengambil nama class dari $object::class secara langsung
// * https://wiki.php.net/rfc/class_name_literal_on_object 


class Login
{

}

$login = new Login();

var_dump($login::class); // PHP 8
var_dump(get_class($login)); // PHP 7