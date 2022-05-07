<?php

require_once __DIR__.'/models/product.php';
require_once __DIR__.'/models/cart.php';
require_once __DIR__.'/models/guest.php';
require_once __DIR__.'/models/user.php';
require_once __DIR__.'/models/paymentMethod.php';



$product = new Product ('croccantini','https://www.tigota.it/media/catalog/product/b/i/big_353358_842564_01_egfwomkyvyeqgciq.jpg?quality=60&fit=bounds&height=700&width=700&canvas=700:700',30,'croccantini al gusto di pollo');
//var_dump($product);

$cart = new Cart ();
//var_dump($cart);

$cart-> addItem($product,2);

$guest = new Guest ('maria','verdi','email@gmail.com');
//var_dump($guest);

$paymentMethod = new PaymentMethod ('1234567890987654','maria verdi','999','03/2027');
//var_dump($paymentMethod);

$user = new User ('pippo');
var_dump($user);



    