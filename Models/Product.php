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
    }
}