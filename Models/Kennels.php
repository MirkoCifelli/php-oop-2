<?php

class Kennels extends Product{
    public $material;
    
    function __construct($name,$img,$price,$category,$material)
    {
        parent::__construct($name,$img,$price,$category);
        $this->material = $material;
    }
}