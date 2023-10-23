<?php

$debug = true; // cambiate in true e false in base se volete o meno vedere gli errori
if ($debug == true) {
    ini_set('display_errors', 1); // imposta il file php.ini a mostrare gli errori
    error_reporting(E_ALL); // imposta il livello di errori da mostrare E_ALL tutti
}

require __DIR__ . '/../models/products.php';
require __DIR__ . '/../models/categories.php';
require __DIR__ . '/../models/food.php';
require __DIR__ . '/../models/game.php';


#try-catch
try {
    $product = new Product(1, '', '19.99', 'Categoria 1', 'Descrizione', 'immagine.jpg');
} catch (InvalidArgumentException $e) {
    echo "Errore: " . $e->getMessage();
    #die;
}



$shop = [
    new Product(1, 'Product Food Name', '25,00€', new Category('dog', '🐶'), 'Lorem ipsum dolor sit amet.', 'https://picsum.photos/500/600?random=1'),
    new Food(2, 'Food Name', '39,90 €', new Category('cat', '🐈'), 'biscuits', 'Meat', 'Lorem ipsum dolor sit amet.', 'https://picsum.photos/500/600?random=2'),
    new Game(3, 'Small Ball', 20, '4,99 €', new Category('For little pet', '🐈🐶'), 'Play in the park!', 'Plastic Free', 'Lorem ipsum dolor sit amet', 'https://picsum.photos/500/600?random=3')
];
