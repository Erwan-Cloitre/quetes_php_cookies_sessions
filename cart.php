<?php
require 'inc/head.php';
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}
// On teste si la variable de session existe et contient une valeur
if(@$_SESSION['login'] != @$_POST['username'])
{
    // Si inexistante ou nulle, on redirige vers le formulaire de login
    header('Location: login.php');
    exit();
}
?>
<section class="cookies container-fluid">
    <div class="row">
        <table class="table">
            <tr>
                <th>Product</th>
                <th>Quantity</th>
            </tr>
            <?php foreach (@$_COOKIE['cart'] as $product => $quantity):?>
                <tr>
                    <td><img src="assets/img/product-<?= $product ?>.jpg" alt="cookies choclate chips" class="img-responsive" style="height: 200px;"></td>
                    <td><?= $quantity ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
