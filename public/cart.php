<?php

use app\classes\Cart;
use app\classes\CartProducts;

session_start();

require '../vendor/autoload.php';

$cartProducts = new CartProducts(new Cart);

var_dump($cartProducts->products());

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

    </div>
</body>

</html>