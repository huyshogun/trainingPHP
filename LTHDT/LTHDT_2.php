<!DOCTYPE html>
<html>
<head>
    <title>QuadracticEquation</title>
</head>
<body>
<form method="post">
    <label>Nhập số 1 thứ 1:</label>
    <input type="number" name="a"><br>
    <label>Nhập số thứ 2: </label>
    <input type="number" name="b"><br>
    <label>Nhập số thứ 3: </label>
    <input type="number" name="c"><br>
    <input type="submit" name="submit" value="Submit"><br>

</form>
</body>
</html>
<br>
<?php
class QuandracticEquation {
    private $a;
    private $b;
    private $c;
    public function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }


    public function getDelta()
    {
        return $this->b*$this->b - 4*$this->a*$this->c;
    }
    public function getRoot1() {
        return ((-$this->b + sqrt($this->getDelta())) / (2 * $this->a));
    }


    public function getRoot2()
    {
        return ((-$this->b - sqrt($this->getDelta())) / (2 * $this->a));
    }

}
if(isset($_POST['submit'])) {
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];
    $equation = new QuandracticEquation($a, $b, $c);
    $delta = $equation->getDelta();
    $getRoot1 = $equation->getRoot1();
    $getRoot2 = $equation->getRoot2();
    if($delta >= 0) {
        echo "Nghiem 1: " . $getRoot1 . "<br>";
        echo "Nghiem 2: " . $getRoot2 . "<br>";
    } else {
        echo "Phương trình vô nghiệm";
    }


}
