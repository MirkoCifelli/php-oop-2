<?php

class Food extends Product{
    public $size;
    public $flavour;

    function __construct($name,$img,$price,$category,$size,$flavour){
        parent::__construct($name,$img,$price,$category);
        $this->flavour = $flavour;  
        $this->size = $size;
    }

}