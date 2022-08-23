<?php

class Pinigine {

    public $popieriniaiPinigai;
    public $metaliniaiPinigai;


    public function __construct() {
        $this->popieriniaiPinigai = 0;
        $this->metaliniaiPinigai = 0;
    }
    public function ideti($val) {
        if ($val > 2) {
            $this->popieriniaiPinigai += $val;
        } else if ($val <= 2 && $val > 0) {
            $this->metaliniaiPinigai += $val;
        } else {
            echo "Error! Value cannot be negative!";
        }
    }
    public function skaiciuoti() {
        return "Kupiuros: $this->popieriniaiPinigai\nMonetos: $this->metaliniaiPinigai\n";
    }
}