<?php
namespace Kosmosas;


class MarsoPalydovas {
    const PALYDOVAI = ['Fobas', 'Deimas'];
    private static $palydovai = [null, null];
    public $title;

    static function create() {
        if (self::$palydovai[0] === null) {
            return self::$palydovai[0] = new self(self::PALYDOVAI[0]);
        } else if (self::$palydovai[1] === null) {
            return self::$palydovai[1] = new self(self::PALYDOVAI[1]);
        } else {
            return self::$palydovai[rand(0, 1)];
        }
    }
    
    private function __construct($title) {
        $this->title = $title;
    }

}