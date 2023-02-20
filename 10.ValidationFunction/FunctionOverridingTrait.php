<?php


// Todo Function Overriding Trait
// * Di PHP 8, sekarang terdapat validasi ketika mengimplementasikan abstract function di class dari trait
// * Di PHP 7, saat kita mengubah seperti parameter dan return value nya, hal itu tidak menjadi masalah
// * Namun di PHP 8, jika kita mengubah implementasinya dari abstract function nya, maka otomatis akan error
// * https://wiki.php.net/rfc/abstract_trait_method_validation 


trait SampleTrait
{
    public abstract function sampleFunction(string $name);
}


class SampleClass
{
    use SampleTrait;

    public function sampleFunction(string $name)
    {
    }
}
