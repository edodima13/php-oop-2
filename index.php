<?php

require_once __DIR__.'/models/product.php';
require_once __DIR__.'/models/cart.php';
require_once __DIR__.'/models/user.php';

$product = new Product ('croccantini','https://www.tigota.it/media/catalog/product/b/i/big_353358_842564_01_egfwomkyvyeqgciq.jpg?quality=60&fit=bounds&height=700&width=700&canvas=700:700',30,'croccantini al gusto di pollo');
var_dump($product);

$cart = new Cart ();
var_dump($cart);

$cart-> addItem($product,2);
var_dump($cart);

$guest = new User ('maria','verdi','email@gmail.com')