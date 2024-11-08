<?php

namespace app\classes;

use app\interfaces\CartInterface;

class CartProducts
{
    public function products(CartInterface $cartInterface)
    {
        $productsInCart = $cartInterface->cart();
        $productsInDatabase = require __DIR__ . '/../helpers/products.php';

        $products = [];
        $total = 0;

        foreach ($productsInCart as $productId => $quantity)
        {
            $product = $productsInDatabase[$productId];
            $products[] = [
                'id' => $productId,
                'product' => $product['name'],
                'price' => $product['price'],
                'quantity' => $quantity,
                'subtotal' => $quantity * $product['price'],
            ];

            $total += $quantity * $product['price'];

        }

        return [
            'products' => $products,
            'total'=> $total,
        ];
    }
}