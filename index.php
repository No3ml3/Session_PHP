<?php require 'inc/data/products.php'; ?>
<?php require 'inc/head.php'; ?>
<?php

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {

    if (!empty($_GET)) {
        $myGet = array_map('trim', $_GET);
    }

    if (!empty($myGet['add_to_cart'])) {
        array_push($_SESSION['cart'], $myGet['add_to_cart']);
        header('location: index.php');
    }
}

?>
<section class="cookies container-fluid">
    <div class="row">
        <?php foreach ($catalog as $id => $cookie) : ?>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <figure class="thumbnail text-center">
                    <img src="assets/img/product-<?= $id; ?>.jpg" alt="<?= $cookie['name']; ?>" class="img-responsive">
                    <figcaption class="caption">
                        <h3><?= $cookie['name']; ?></h3>
                        <p><?= $cookie['description']; ?></p>
                        <a href="?add_to_cart=<?= $id; ?>" class="btn btn-primary">
                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                        </a>
                    </figcaption>
                </figure>
            </div>
        <?php endforeach ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>