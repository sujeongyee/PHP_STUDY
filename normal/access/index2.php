<?php

class Fruit3 {
  public $name;
  protected $color;
  private $weight;

  function set_name($n) {
    $this -> name = $n;
  }

  protected function set_color($n) {
    $this -> color = $n;
  }

  private function set_weight($n) {
    $this -> weight = $n;
  }
}


$mango = new Fruit3();

$mango -> name = "Mango";
//$mango -> $color = "노란색"; // 접근 불가 Undefined variable $color
//$mango -> $weight = "300"; // 접근 불가 Undefined variable $weight

$mango->set_name("망고");
//$mango->set_color("노랑"); //Call to protected method Fruit3::set_color() from global scope
//$mango->set_weight(300); //Call to private method Fruit3::set_weight() from global scope
?>