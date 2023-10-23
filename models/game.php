<?php

require __DIR__ . '/../traits/discount.php';
class Game extends Product
{

    use Discount;


    public $type;
    public $materials;


    public function __construct(int $id, $name, $discount, $price, $category, $type, $materials, $description, $image)
    {
        parent::__construct($id, $name, $price, $category, $description, $image);

        $this->discount = $discount;

        $this->type = $type;
        $this->materials = $materials;
    }
}
