<?php

class Category{
    public $race;
    public $icon;

    function __construct( $race, $icon ){
        $this->race = $race;
        $this->icon = $icon;
    }
}