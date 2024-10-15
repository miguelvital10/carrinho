<?php

use app\classes\Cart;
use app\classes\CartProducts;

session_start();

require '../vendor/autoload.php';

$cartProducts = new CartProducts(new Cart);

$products = $cartProducts->products();

// var_dump($cartProducts->products());

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cart</title>
</head>

<body>
    <h2> Cart | <a href="">Home</a></h2>

    <hr>

    <div id="container">
        <?php if (count($products['products']) <= 0): ?>
            <h3>Nenhum produto no carrinho de compras</h3>
        <?php else: ?>
            <ul>
                <?php foreach ($products['products'] as $product): ?>
                    <li class="cart-product">
                        <?php echo $product['product'] ?>
                        <form action="quantidade.php" method="get">
                            <input type="text" name="qty" value="<?php echo $product['quantity'];?>" id="cart-input-qty">
                            <input type="hidden" name="id" value="<?php echo $product['id']?>">
                        </form> X R$ <?php echo number_format($product['price'], 2, ',', '.')?> | R$ <?php echo number_format($product['subtotal'], 2, ',', '.')?>
                    </li>
                <?php endforeach ?>
            </ul>
        <?php endif ?>
    </div>
</body>

</html>