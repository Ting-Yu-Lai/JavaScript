<?php
function dd($data) {
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}


class Car {
    public $name;
    public $color;

    function run() {
        $text = "$this->color 的 $this->name 在路上跑<br>";
        echo $text;
    }
}

$apple = new Car();
$mango = new Car();

$apple->name = "跑車";
$mango->name = "休旅車";
$apple->color = "紅色";
$mango->color = "黃色";

$apple->run();
$mango->run();
?>