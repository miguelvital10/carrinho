<?php

require '../vendor/autoload.php';

$products = require '../app/helpers/products.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
</head>

<body>
    <div id="container">
        <ul>
                <?php foreach ($products as $index => $product): ?>
                    <li>
                        <?php 
                            echo $product['name'];
                        ?> | 
                        R$ <?php
                             echo number_format($product['price'], 2, ',', '.');
                        ?>
                    </li>
                    <a href="add.php?id=<?php echo $index ?>">Add to Cart</a>
                <?php endforeach; ?>
        </ul>
    </div>
</body>

</html>