<?php


class Tenisininkas {

    private $vardas, $kamuoliukas;
    private static $zaidejas1, $zaidejas2;

    public static function zaidimoPradzia() {
        if (self::$zaidejas1 === null || self::$zaidejas1 === null) {
            echo '<h2>A gde zaidejasi?</h2>';
            return;
        }
        if (rand(0, 1)) {
            self::$zaidejas1->kamuoliukas = false;
            self::$zaidejas2->kamuoliukas = true;
        } else {
            self::$zaidejas2->kamuoliukas = false;
            self::$zaidejas1->kamuoliukas = true;
        }
    }
    public function __construct($vardas) {
        $this->vardas = $vardas;
        if (self::$zaidejas1 === null) {
            self::$zaidejas1 = $this;
        } else if (self::$zaidejas2 === null) {
            self::$zaidejas2 = $this;
        }
    }
    public function  arTuriKamuoliuka() {
        return $this->kamuoliukas;
    }

    public function  perduotiKamuoliuka() {
        if ($this->kamuoliukas) {
            if (self::$zaidejas1->vardas == $this->vardas) {
                self::$zaidejas1->kamuoliukas = false;
                self::$zaidejas2->kamuoliukas = true;
                echo "<h2> " . self::$zaidejas1->vardas . ' perdave ' . self::$zaidejas2->vardas . "</h2>";
            } else if (self::$zaidejas2->vardas == $this->vardas) {
                self::$zaidejas2->kamuoliukas = false;
                self::$zaidejas1->kamuoliukas = true;
                echo "<h2> " . self::$zaidejas2->vardas . ' perdave ' . self::$zaidejas1->vardas . "</h2>";
            } else {
                echo '<h2>Ziurovas</h2>';
            }
        } else {
            echo '<h2>Neturi kamuoliuko</h2>'; 
        }
    }
}