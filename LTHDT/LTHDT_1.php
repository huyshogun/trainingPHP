<!DOCTYPE html>
<html>
<head>
    <title>Rectangle</title>
</head>
<body>
<form method="post">
    <label>Nhập chiều dài: </label>
    <input type="number" name="length"><br><br>
    <label>Nhập chiều rộng: </label>
    <input type="number" name="width"><br><br>
    <input type="submit" name="submit" value="Submit">
</form>
<br>
<?php
class Rectangle {
    private $length;
    private $width;

    public function __construct($length, $width) {
        $this->length = $length;
        $this->width = $width;
    }

    public function getLength() {
        return $this->length;
    }

    public function getWidth() {
        return $this->width;
    }

    public function getArea() {
        return $this->length * $this->width;
    }

    public function getPerimeter() {
        return 2 * ($this->length + $this->width);
    }
}

if(isset($_POST['submit'])) {
    $length = $_POST['length'];
    $width = $_POST['width'];
    $rectangle = new Rectangle($length, $width);
    echo "Length: " . $rectangle->getLength() . "<br>";
    echo "Width: " . $rectangle->getWidth() . "<br>";
    echo "Area: " . $rectangle->getArea() . "<br>";
    echo "Perimeter: " . $rectangle->getPerimeter() . "<br>";
}