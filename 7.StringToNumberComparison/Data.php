<?php

// Todo String To Number Comparison
// * Salah satu yang membingungkan di PHP adalah ketika kita melakukan perbandingan number dan string
// * Misal saat kita bandingkan 0 == “eko”, maka hasilnya true
// * Kenapa true? Karena PHP akan melakukan type jugling dan mengubah “eko” menjadi 0, sehingga hasilnya true
// * Di PHP 8, khusus perbandingan String ke Number diubah, agar tidak membingungkan
// * https://wiki.php.net/rfc/string_to_number_comparison 


/*
 
Comparison      | Before    | After
========================================
0 == "0"         | True      | True
0 == "0.0"       | True      | True
0 == "foo"       | True      | False
0 == ""          | True      | False
42 == "   42"    | True      | True
42 == "42foo"    | True      | False

*/