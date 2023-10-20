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

<div class="container">
    <div class="row">
        <?php foreach ($shop as $product) : ?>
            <div class="col">
                <div class="card">
                    <img src="<?= $product->image; ?>" class="card-img-top" alt="<?= $product->name; ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= $product->name; ?></h5>
                        <h5 class="card-title"><?= $product->category->name; ?></h5>
                        <h6 class="card-subtitle mb-2 text-muted "><?= $product->price; ?></h6>
                        <p class="card-text"><?= $product->description; ?></p>
                    </div>
                </div>
            </div>
            <!-- /.col -->
        <?php endforeach; ?>
    </div>
    <!-- /.row -->
</div>
<!-- /.container -->

<?php
#FOOTER
include __DIR__ . '/assets/layout/footer.php'
?>