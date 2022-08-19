<?php

class Account {
    public $name;
    public $surname;
    public $id;
    public $iban;


public function __construct($name, $surname, $id, $iban) {
    $this->name = $name;
    $this->surname = $surname;
    $this->id = $id;
    $this->iban = $iban;
}
public function __get($x) {
    return $this->$x;
}
public function __set($whom, $what) {
    $this->$whom = $what;
}


}