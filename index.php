<?php
class Product {
    public $name;
    public $img;
    public $category;
    public $price;
    public $description;

    public function __construct($name, $price, $category)
    {
        $this->name = $name;
        $this->price = $price;
        $this->category = $category;
    }
    function get_name() {
    return $this->name;
    }
    function get_price() {
    return $this->price;
    }
    function get_category() {
    return $this->category;
    }
}

$croccantini = new Product("Croccantini Veg", "€12.90","dog");
$gioco = new Product("Pallina Giocattolo", "€13.75", "dog&cat");
$cuccia = new Product("Cuccia Rigida", "€44.75", "dog");
$cuccia2 = new Product("Cuccia Morbida ", "€64.75", "cat");
$pettorina = new Product("Julius K9 - Pettorina Taglia Baby 1 / XS (30-40 cm)", "€17.90", "dog");

var_dump($croccantini, $gioco, $cuccia, $cuccia2,$pettorina);
?>