<?php
function dd($data) {
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}


class Fruit {
    public $name;
    public $color;

    function fall() {
        $text = "$this->color 的 $this->name 掉下來了<br>";
        echo $text;
    }
}

$apple = new Fruit();
$mango = new Fruit();

$apple->name = "蘋果";
$mango->name = "芒果";
$apple->color = "紅色";
$mango->color = "黃色";

$apple->fall();
$mango->fall();
?>