<?php

class Ponto {

    private $x;
    private $y;
    public static $counter;

    function __construct($x, $y) {
        $this->setX($x);
        $this->setY($y);
        ponto::$counter++;
    }

    function getX() {
        return $this->x;
    }

    function setX($x) {
        $this->x = $x;
    }

    function getY() {
        return $this->y;
    }

    function setY($y) {
        $this->y = $y;
    }

    function getCounter() {
        return ponto::$counter;
    }

    function calculateDistanceWithObject($point) {
        return sqrt(pow($point->x - $this->x, 2) + pow($point->y - $this->y, 2));
    }

    function calculateDistanceWithValues($x, $y) {
        return sqrt(pow($x - $this->x, 2) + pow($y - $this->y, 2));
    }

    static function calculeDistanceWithSeveralValues($x1, $y1, $x2, $y2) {
        return sqrt(pow($x2 - $x1, 2) + pow($y2 - $y1, 2));
    }
}