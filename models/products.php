<?php

require __DIR__ . '/../traits/namable.php';

class Product
{
    use Namable;

    public $id;
    public $name;
    public $price;
    public $category;
    public $description;
    public $image;

    public function __construct(int $id, $name, $price, $category, $description, $image)
    {
        if (empty($name)) {
            throw new InvalidArgumentException("Il nome del prodotto non può essere una stringa vuota.");
        }

        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->category = $category;
        $this->description = $description;
        $this->image = $image;
    }
}
