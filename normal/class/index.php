<?php 

class Fruit {

  // Properties
  public $name;
  public $color;
  
  // Methods
  function set_name($name1) {
    $this -> name = $name1;
  }

  function get_name () {
    return $this -> name ; 
  }

  function set_color($color) {
    $this -> color = $color;
  }

  function get_color() {
    return $this -> color;
  }


}

$apple = new Fruit();
$banana = new Fruit();

$apple -> set_name ('사과');
$banana -> set_name ('바나나');

echo $apple->get_name(); // 사과
echo "<br>";
echo $banana->get_name(); // 바나나

$apple -> set_color ('빨간색');
$banana -> set_color ('노란색');

echo $apple -> color . '입니다'; // public 이라 접근 가능
echo $banana -> color . '입니다'; // public 이라 접근 가능

?>