<?php require 'inc/head.php'; ?>
<?php require 'inc/data/products.php'; ?>
<section class="cookies container-fluid">
    <div class="row">
    </div>

    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <title>Panier</title>
    </head>

    <body>
        <h1>Panier</h1>
        <ul>
            <?php
            foreach (array_count_values($_SESSION['cart']) as $cartKey => $qte) : ?>
                <li><?= $catalog[$cartKey]['name'] ?> = <?= $qte ?></li>
            <?php endforeach ?>
        </ul>
        <div>
            <p>total: <?= count($_SESSION['cart']) ?></p>
        </div>
    </body>

    </html>
</section>
<?php require 'inc/foot.php'; ?>