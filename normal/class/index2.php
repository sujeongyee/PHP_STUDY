<?php 

class Fruit2 {

  // Properties
  public $name;
  public $color;
  
  // 생성자 constructor
  function __construct( $name , $color){
    $this -> name = $name;
    $this -> color = $color;
  }

  function get_name () {  
    return $this -> name ;
  }
  
  function get_color() {
    return $this -> color;
  }

}

$apple = new Fruit2("사과", "빨간색");

echo $apple->name. '는 ' . $apple -> color . '입니다'; // 사과는 빨간색입니다.

?>