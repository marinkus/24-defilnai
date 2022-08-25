<?php
class Abc extends C {
    use A;
    
    public $kas2 = 123;

    public function read() {
        return 'Abc';
    }
    
}