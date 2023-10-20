<?php

class Food extends Product
{
    public $type;
    public $mainIngredient;


    public function __construct($name, $price, $category, $type, $mainIngredient, $description, $image)
    {
        parent::__construct($name, $price, $category, $description, $image);
        $this->type = $type;
        $this->mainIngredient = $mainIngredient;
    }
}
