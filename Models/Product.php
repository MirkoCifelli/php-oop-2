<?php
class Product{
    
    public $name;
    public $price;
    public $img;
    public $category;


    function __construct($name, $price, $img, $category){
        $this->name = $name;
        $this->price = $price;
        $this->img = $img;
        $this->category = $category;
        if (is_numeric($price)) {
            $this->price = $price;
        }
        else {
            // Dì al programmatore che sta sbagliando (e cosa)
            throw new Exception('Valore prezzo frisbee non valido, is not a number');
        }
    }
    
}