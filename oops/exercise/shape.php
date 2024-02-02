<?php
phpinfo();
class Shape {
    public $color;
    public $filled;

    public function __construct($color = 'black', $filled = false) {
        $this->color = $color;
        $this->filled = $filled;
    }

    // Getter methods
    public function getColor() {
        return $this->color;
    }

    public function isFilled() {
        return $this->filled;
    }

    // Setter methods
    public function setColor($color) {
        $this->color = $color;
    }

    public function setFilled($filled) {
        $this->filled = $filled;
    }
}

class Circle extends Shape {
    public $radius;

    public function calculateArea() {
        return pi() * pow($this->radius, 2);
    }

    public function calculatePerimeter() {
        return 2 * pi() * $this->radius;
    }
}

class Rectangle extends Shape {
    public $length;
    public $width;

    public function calculateArea() {
        return $this->length * $this->width;
    }

    public function calculatePerimeter() {
        return 2 * ($this->length + $this->width);
    }
}

// Example Usage:
$circle = new Circle();
$circle->radius = 5;

$rectangle = new Rectangle();
$rectangle->length = 4;
$rectangle->width = 6;

echo "Circle Area: " . $circle->calculateArea() . "<br>";
echo "Rectangle Perimeter: " . $rectangle->calculatePerimeter();

?>