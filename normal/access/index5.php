<?php 

class Base {
  const AGE = 22; // $ 생략 
  public $mustOlderThan = 21;

  public static function display() {
    //echo $this->mustOlderThan;
    echo self::AGE;
  }
}


echo Base::AGE; // 상수는 이렇게 , 상수는 값 변경 불가

$base = new Base();
echo $base->mustOlderThan;

?>