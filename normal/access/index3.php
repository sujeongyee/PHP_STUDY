
<?php 

class Fruit4 {

  public $color;
  public $name;

  public function __construct($name, $color){
    $this->name = $name;
    $this->color = $color;
  }

  public function intro() {
    echo "이 과일 이름은 $this->name"."이고 색깔은 $this->color 입니다";
  }

}

class Mango extends Fruit4 {
  public function message() {
    echo "나는 망고입니다.";
  }
}

$mango = new Mango("망고","노란색"); // 상속 받아서 생성자도 같이 씀

$mango->intro(); //이 과일 이름은 망고이고 색깔은 노란색 입니다
echo "<br>";
$mango->message(); //나는 망고입니다.


?>