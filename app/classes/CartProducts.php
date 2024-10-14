<?php

namespace app\classes;

use app\interfaces\CartInterface;


class CartProducts
{

    public function __construct(private CartInterface $cartInterface)
    {
    }

    public function products()
    {
        $productsInCart = $this->cartInterface->cart();
        $productsInDatabase = require '../helpers/products.php';

        $products = [];
        $total = 0;

        foreach ($productsInCart as $productId => $quantity)
        {
            $products[] = [
                'id' => $productId,
                'product' => $name,
                'quantity' => $quantity,
            ];
        }
    }
}