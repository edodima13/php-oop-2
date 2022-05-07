<?php

class PaymentMethod{

    private $number;
    public $owner;
    private $cvv;
    private $expirationDate;

    public function __construct(string $_number ,string $_owner ,float $_cvv ,string $_expirationDate){

        if(strlen($_number) === 16){
            echo 'the credit card number is valid';
        } else {
            echo'the credit card number is not valid';
        }

        if(strlen($_cvv) === 3){
            echo 'the credit card cvv is valid';
        } else {
            echo'the credit card cvv is not valid';
        }

        $this->number = $_number;
        $this->owner = $_owner;
        $this->cvv = $_cvv;
        $this->expirationDate = $_expirationDate;
    }

}