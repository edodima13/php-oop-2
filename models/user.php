<?php

class User {

    public $name;
    public $surname;
    public $email;
    public $password;
    protected $sale = 0;
    public $paymentMethods = [];



    public function __construct(string $_name, string $_surname, string $_email, string $_password,string $_sale, string $_paymentMethods)
    {

        $this->name = $_name;
        $this->surname = $_surname;
        $this->email = $_email;
        $this->password = $_password;
        $this->sale = $_sale;

    }

    public function addPaymentMethod($creditCard){

        $this->$paymentMethods[] = $creditCard;

    }

    public function getSale($sale){

        return $this->sale;

    }

    public function setSale($sale){

        $this->sale = $sale;

    }

}