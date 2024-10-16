<?php

session_start();

require '../vendor/autoload.php';

use app\classes\Cart;

$cart = new Cart;
$cart->clear();

header('Location:cart.php');