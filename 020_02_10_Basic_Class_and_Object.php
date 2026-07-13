<?php
class Rectangle {
    public $length;
    public $width;

    public function __construct($length, $width) {
        $this->length = $length;
        $this->width = $width;
    }

    public function area() {
        return $this->length * $this->width;
    }
}
$length = (float)readline("Enter length of the rectangle: ");
$width = (float)readline("Enter width of the rectangle: ");
$rect = new Rectangle($length, $width);
echo "Area of the rectangle: " . $rect->area() . "\n";
