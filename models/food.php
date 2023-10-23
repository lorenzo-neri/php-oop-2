<?php

class Food extends Product
{
    public $type;
    public $mainIngredient;


    public function __construct(int $id, $name, $price, $category, $type, $mainIngredient, $description, $image)
    {
        parent::__construct($id, $name, $price, $category, $description, $image);
        $this->type = $type;
        $this->mainIngredient = $mainIngredient;
    }
}
