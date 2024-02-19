<?php

class Game extends Product{
    public $material;
    public $description;

    function __construct($name,$img,$price,$category,$material,$description){
        parent::__construct($name,$img,$price,$category);
        $this->material=$material;
        $this->description=$description;
    }
}