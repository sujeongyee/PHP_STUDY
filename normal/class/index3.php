
<?php

class Car {
  
  public $name ;
  public $color ;

  function __construct($name, $color){
    $this -> name = $name;
    $this -> color = $color;

    echo "<p>자동차가 생산되었습니다.</p>";
    echo "<p>이름 : $this->name ";
    echo "색상 : $this->color </p>";
  }

  function __destruct(){ // 소멸자는 이 php가 끝나는 시점에 자동 실행됨
    echo "<p>자동차 폐차가 되었습니다.</p>";
    echo "<p>차량등록말소사중명서가 발급되었습니다.</p>";
  }


}

$volvo = new Car("볼보", "빨강");



echo "<p>프로그램 실행중</p>";



?>