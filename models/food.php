<?php

class Food extends Product
{
    public $type;
    public $mainIngredient;


    public function __construct($type, $mainIngredient)
    {
        $this->type = $type;
        $this->mainIngredient = $mainIngredient;
    }
}
