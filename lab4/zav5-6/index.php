<?php

class Circle {
    private $x;
    private $y;
    private $radius;

    function __construct($x, $y, $radius) {
        $this->x = $x;
        $this->y = $y;
        $this->radius = $radius;
    }

    function __toString() {
        return "Коло з центром ($this->x, $this->y) і радіусом $this->radius";
    }

    function get_x() {
        return $this->x;
    }

    function get_y() {
        return $this->y;
    }

    function get_radius() {
        return $this->radius;
    }

    function set_x($x) {
        $this->x = $x;
    }

    function set_y($y) {
        $this->y = $y;
    }

    function set_radius($radius) {
        $this->radius = $radius;
    }

    function intersect(Circle $circle) : bool {
        $d = sqrt(pow($this->x - $circle->get_x(), 2) + pow($this->y - $circle->get_y(), 2));
        return $d < $circle->get_radius() + $this->radius;
    }
}

$circle = new Circle(4,4, 8);
echo $circle->__toString() . "<br>";
$circle->set_x(7);
$circle->set_y(7);
$circle->set_radius(14);

echo "<hr>";
echo $circle->__toString();
echo "<br>";
$circle2 = new Circle(12, 12, 36);
echo $circle2->__toString() . "<br>";
echo $circle->intersect($circle2) ? "Перетинаються" . PHP_EOL : "Не перетинаються" . PHP_EOL;