<?php


// Todo Constructor Property Promotion
// * Kadang kita sering sekali membuat property sekaligus mengisi property tersebut menggunakan constructor
// * Sekarang kita bisa otomatis langsung membuat property dengan via constructor
// * Fitur ini mirip sekali di bahasa pemrograman seperti Kotlin dan TypeScript
// * https://wiki.php.net/rfc/constructor_promotion 


class ConstructorPropertyPromotion
{
    public function __construct(public string $id, public string $name, public int $price, public int $quantity)
    {
    }
}


$constructorPropertyPromotion = new ConstructorPropertyPromotion(id: "1", name: "samsung", price: 2000000, quantity: 2);
var_dump($constructorPropertyPromotion);


echo "Id \t : $constructorPropertyPromotion->id" . PHP_EOL;
echo "Name \t : $constructorPropertyPromotion->name"  . PHP_EOL;
echo "Price \t : $constructorPropertyPromotion->price"  . PHP_EOL;
echo "Quantity : $constructorPropertyPromotion->quantity"  . PHP_EOL;
