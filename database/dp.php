<?php

$debug = true; // cambiate in true e false in base se volete o meno vedere gli errori
if ($debug == true) {
    ini_set('display_errors', 1); // imposta il file php.ini a mostrare gli errori
    error_reporting(E_ALL); // imposta il livello di errori da mostrare E_ALL tutti
}

require __DIR__ . '/../models/products.php';
require __DIR__ . '/../models/categories.php';

$shop = [
    new Product('Product Food Name', '25,00€', new Category('dog', '🐶'), 'Lorem ipsum dolor sit amet.', 'https://picsum.photos/200/300'),
    new Food('Food Name', '39,90 €', new Category('dog', '🐶'),),
];
