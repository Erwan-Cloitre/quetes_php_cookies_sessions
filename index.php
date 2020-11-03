<?php require 'inc/head.php'; ?>
<?php
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}
if (!empty($_GET['add_to_cart'])) {
    $product = $_GET['add_to_cart'];
    setcookie("cart[$product]", 0);
    $cart = $_COOKIE['cart'];
    switch ($_GET['add_to_cart']) {
        case 32 :
            $cart[$product]++;
            setcookie("cart[$product]", $cart[$product]);
            break;
        case 36 :
            $cart[$product]++;
            setcookie("cart[$product]", $cart[$product]);
            break;
        case 46 :
            $cart[$product]++;
            setcookie("cart[$product]", $cart[$product]);
            break;
        case 58 :
            $cart[$product]++;
            setcookie("cart[$product]", $cart[$product]);
            break;
    }
    header('Location: index.php');
    exit();
}
?>
<?php require 'inc/data/products.php'; ?>
<section class="cookies container-fluid">
    <div class="row">
        <?php foreach ($catalog as $id => $cookie) { ?>
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
        <?php } ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
