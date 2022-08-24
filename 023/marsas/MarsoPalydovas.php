<?php
/* (STATIC) Sukurkite klasę MarsoPalydovas.  Kontroliuokite objekto kūrimą iš klasės naudodami statinį metodą. Padarykite taip, kad iš viso būtų galima sukurti tik du objektus iš šitos klasės. Pirmam sukuriamam objektui įrašykite privačią savybę title lygią stringui “Deimas”, o antram tokią pat savybę tik lygią stringui “Fobas”. Bandant sukurti trečią objektą, turėtų būti grąžinamas vienas iš anksčiau sukurtų objektų parinktas atsitiktine tvarka.
 */
class MarsoPalydovas {
    private static $palydovas;
    private $title;

    public static function naujasPalydovas() : MarsoPalydovas {
        return self::$palydovas ?? self::$palydovas = new self;
    }
    // private function __construct($title) {
    //     $this->title = $title;
    // }
}