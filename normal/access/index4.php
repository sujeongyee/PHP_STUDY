<?php 

class Car2 {
  
  private static $count = 0;
  private static $carList = [];
  private $name;

  function __construct($name){
    $this->name = $name;
    //$this->count++;
    self::$count = self::$count +1;
    array_push(self::$carList,$name);
  }

  function message() {
    echo "<p> $this->name"."가 생산되었습니다.</p>";
    echo "<p>[생산번호: ".self::$count ."]</p>";
  }

  static function getCarList(){
    return self::$carList;
  }

}

$p1  = new Car2("볼보");
$p1->message();
$p2 = new Car2("아우디");
$p2->message();
$p3 = new Car2("벤츠");
$p3->message();
$a = implode(',' , Car2::getCarList());

echo "<p>".$a."</p>";

?>