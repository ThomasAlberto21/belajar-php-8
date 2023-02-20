<?php

// Todo New String Function
// * Di PHP 8, terdapat beberapa function untuk memanipulasi string
// * https://wiki.php.net/rfc/str_contains
// * https://wiki.php.net/rfc/add_str_starts_with_and_ends_with_functions



// Todo String Function
/* 

Function                                | Keterangan
=====================================================================================
str_contains($string, $contains) : bool | Mengecek apakah $string mengandung $contains
str_starts_with($string, $value) : bool | Mengecek apakah $string memiliki awal yang sama dng $value
str_ends_with($string, $value) : bool   | Mengececk apakah $string memiliki akhir yang sama dng $value

*/


var_dump(str_contains("Thomas Alberto"  ,"Thomas")); // True
var_dump(str_contains("Thomas Alberto"  ,"Alberto")); // True
var_dump(str_contains("Thomas Alberto"  ,"Keren")); // False



var_dump(str_starts_with("Thomas Alberto" , "Thomas")); // True
var_dump(str_starts_with("Thomas Alberto" , "Alberto"));  // False
var_dump(str_starts_with("Thomas Alberto" , "keren")); // False



var_dump(str_ends_with("Thomas Alberto" , "Thomas")); // False
var_dump(str_ends_with("Thomas Alberto" , "Alberto")); // True
var_dump(str_ends_with("Thomas Alberto" , "keren")); // False