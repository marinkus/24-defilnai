<?php

class Tv {

    public $color;
    private $size;

    public function __construct($c, $s = '42"') {
        $this->color = $c;
        $this->size = $s;
    }

    public function __destruct() {
        echo '<h1>DEAD</h1>';
    }
    
    public function __get($x) {
        return $this->$x;
    }
    // public function __get($x) {
    //     if ($x == 'size') {
    //         return $this->size;
    //     }
    // }
    public function __set($kam, $ka) {
            $this->$kam = $ka;
    }
    // public function __set($kam, $ka) {
    //     //Validation lands here:
    //     if ($kam == 'size') {
    //         $this->size = $ka;
    //     }
    // }



    public function showParameters() {
        return '<h1>'.$this->color .' ' . $this->size.'</h1>';
    }
    
}