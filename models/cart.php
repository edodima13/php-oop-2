<?php

class Cart{

    public $products = [];

    public function addItem($product, $quantity){

        $this->$products[] = [

            'products' => $product,
            'quantity' => $quantity

        ];
    }

}