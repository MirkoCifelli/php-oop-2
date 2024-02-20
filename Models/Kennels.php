<?php

require_once __DIR__.'/../traits/HasMaterial.php';

class Kennels extends Product{
    use HasMaterial;
    
    function __construct($name,$img,$price,$category,$material)
    {
        parent::__construct($name,$img,$price,$category);
        $this->material = $material;
    }
}