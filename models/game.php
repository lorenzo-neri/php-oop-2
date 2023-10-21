<?php

class Game extends Product
{
    public $type;
    public $materials;


    public function __construct($name, $price, $category, $type, $materials, $description, $image)
    {
        parent::__construct($name, $price, $category, $description, $image);
        $this->type = $type;
        $this->materials = $materials;
    }
}
