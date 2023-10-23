<?php
/* 
Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
- L'e-commerce vende prodotti per animali.
- I prodotti sono categorizzati, le categorie sono Cani o Gatti.
- I prodotti saranno oltre al cibo, anche giochi, cucce, etc.

Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia).

Bonus (non opzionale):
organizzate il progetto come visto stamattina a lezione usando varie sottocartelle per inserire classi, layout e dati.
*/

include __DIR__ . '/database/dp.php';

include __DIR__ . '/assets/layout/head.php';

?>
<main class="bg-success">
    <div class="container p-5">
        <h1 class="text-warning text-center">
            World Animals
        </h1>
        <div class="row p-5">
            <?php foreach ($shop as $product) : ?>
                <div class="col-4">
                    <div class="card">
                        <img src="<?= $product->image; ?>" class="card-img-top" alt="<?= $product->name; ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?= $product->name; ?></h5>
                            <h5 class="card-title"><?= $product->category->name; ?></h5>
                            <h5 class="card-subtitle"><?= $product->category->icon; ?></h5>
                            <h6 class="card-subtitle mb-2 text-muted "><?= $product->price; ?></h6>
                            <p class="card-text"><?= $product->description; ?></p>
                            <?php if ($product instanceof Food) : ?>
                                <p class="card-text">Type: <?= $product->type; ?></p>
                                <p class="card-text">Ingredient: <?= $product->mainIngredient; ?></p>
                            <?php endif; ?>
                            <?php if ($product instanceof Game) : ?>
                                <p class="card-text">SUPER OFFERTA: <?= $product->discount; ?></p>
                            <?php endif; ?>

                        </div>
                    </div>
                </div>
                <!-- /.col -->
            <?php endforeach; ?>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->

</main>
<?php
#FOOTER
include __DIR__ . '/assets/layout/footer.php'
?>