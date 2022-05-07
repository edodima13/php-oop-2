<?php

require_once __DIR__.'/guest.php';

class User extends Guest {

    
    public $password;
    public $sale = 20;

    public function __construct( $_name,  $_surname,  $_email,  $_password){
        parent::__construct( $_name,  $_surname,  $_email );
        $this->password = $_password;
    }

}