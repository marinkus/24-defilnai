<?php


class Kibiras {

    protected $akmenuKiekis;
    private static $akmenuKiekisVisuoseKibiruose = 0;

    public static function kiekYraAkmenu() : int {
        return self::$akmenuKiekisVisuoseKibiruose;
    }

    public function __construct() {
        $this->akmenuKiekis = 0;
    }

    public function prideti1Akmeni() : void {
        $this->akmenuKiekis++;
        self::$akmenuKiekisVisuoseKibiruose++;
    }
    public function pridetiDaugAkmenu(int $kiekis) : void {
        $this->akmenuKiekis += $kiekis;
        self::$akmenuKiekisVisuoseKibiruose += $kiekis;
    }
    public function kiekPririnktaAkmenu() : int {
        return $this->akmenuKiekis;
    }
    public function isVisoAkmenu() : int {
        return self::$akmenuKiekisVisuoseKibiruose;
    }
}