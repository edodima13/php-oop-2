<?php

class Product{

    public $name;
    public $image;
    public $price;
    public $description;

    public function __construct(string $_name ,string $_image ,float $_price ,string $_description){
        $this->name = $_name;
        $this->image = $_image;
        $this->price = $_price;
        $this->description = $_description;
    }

}
