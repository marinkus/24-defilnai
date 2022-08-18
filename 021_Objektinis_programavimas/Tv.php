<?php

class Tv {

    public $color = 'magenta';
    public $size = '65"';

    public function showColor() {
        return '<h1>'.$this->color.'</h1>';
    }
}