<?php

class Account {
    public $name;
    public $surname;
    public $id;
    public $iban;
    public $funds;


public function __construct($name, $surname, $id, $iban, $funds) {
    $this->name = $name;
    $this->surname = $surname;
    $this->id = $id;
    $this->iban = $iban;
    $this->funds = 0;
}
public function __get($x) {
    return $this->$x;
}
public function __set($whom, $what) {
    $this->$whom = $what;
}


}