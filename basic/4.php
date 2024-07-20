<?php

// if문

// $a = 4;

// if ( $a > 5) {
//   echo $a ."는 5보다 큽니다.";
// } else {
//   echo $a. "는 5보다 작습니다.";
// }

// echo "<br>";

// $a = rand(1,4);

// switch($a) {
//   case 1 : 
//     echo "가위입니다.";
//     break;
//   case 2 : 
//     echo "바위입니다.";
//     break;
//   case 3 : 
//     echo "보입니다.";
//     break;
//   default : 
//     echo "범위를 벗어났습니다.";
// }

// echo "<br>";

// while($a < 10) {
//   echo "<h2> $a 출력</h2>";
//   $a++;
// }

// do while문은 조건에 안 맞아도 한번은 출력함
// $a = 20;
// do {
//   echo "<h2>$a 출력</h2>";
//   $a++;
// }while ($a < 10);

// echo "<br><br>";


// for($i = 1; $i < 10 ; $i++) {
//   echo "<h2>저는 $i 살 입니다</h2>"; // 문자열 안에 변수 쓸 때 뒤에 바로 붙여서 쓰면 오류남
// }

// foreach문
// 배열
// for of, for in

// $arr = array('사과','바나나','딸기','오렌지');
// $arr2 = ['사과','바나나','딸기','오렌지'];
// $arr3 = array (
//   1 => "사과",
//   2 => "배",
//   3 => "딸기"
// );

// foreach($arr AS $fruit) {
//   echo "<h2>먹고싶다 $fruit </h2>";
// }

// foreach($arr3 AS $key => $val) {
//   echo "<h3>$key 번째 과일  : $val</h3>";
//   echo "<h3>$arr3[$key]</h3>";
// }

// for ($i = 0 ; $i < 10 ; $i++) {
//   if($i == 4) {
//     continue;
//   }

//   echo "이 숫자는 $i <br>";
// }



// 내장함수
// 사용자 정의 함수

// $money = 3000;

// echo number_format($money); // 3,000

// function getString() {
//   echo "<br>구문!!<br>";
//   return 3;
// }

// $a = getString();
// echo $a;


// function addNumber ($a, $b) {
//   return $a + $b ;
// }

// echo "<h2>" . addNumber(3,5) . "</h2>"


// 엄격한 타입 체크 모드를 활성화
// declare(strict_types=1);

// function addNumber(int $a , int $b) : int { // return int
//   return $a + $b;
// }

// $c = addNumber(4,14);


// $cars = array("자동차","비행기","요트");
// $car2 = $cars; // 분리된 각자의 배열

// $car2[0] = "비행선";

// print_r($cars); //Array ( [0] => 자동차 [1] => 비행기 [2] => 요트 ) 

// print_r($car2); //Array ( [0] => 비행선 [1] => 비행기 [2] => 요트 )

// echo "<br> $cars[0] <br>";

// foreach($cars AS $car) {
//   echo $car . " ";
// }

// $age = array(
//   "아빠" => "40",
//   "엄마" => "38",
//   "나" => "12",
//   "동생" => "8",
// );

// foreach($age AS $key => $val) {
//   echo "<h3>".$key."는 ".$val. "살 입니다.</h3>";
// }

// $fruits = array();
// $fruits["사과"] = "브라질산";
// $fruits["배"] = "한국산";
// $fruits["포도"] = "칠레산";

// print_r($fruits);

// $cars = array (
//   array("볼보",22,10),
//   array("산타페",25,4),
//   array("아우디",12,11),
// );

// print_r($cars);

// echo "<br><h3>". $cars[1][0]. "의 재고는 ". $cars[1][1]. "개여 </h3><br>";

// foreach($cars AS $car){
//   foreach($car AS $carDetail) {
//     echo "$carDetail <br>";
//   }
// }

// echo '<table border="1">
// <tr>
// <th>차종</th>
// <th>재고량</th>
// <th>판매량</th>
// </tr>';

// for($i = 0 ; $i < sizeof($cars) ; $i++){
//   echo "<tr>";
//   for($j = 0 ; $j < sizeof($cars[$i]) ; $j++) {
//     echo "<td>". $cars[$i][$j] ."</td>";
//   }
//   echo "</tr>";
// }
// echo "</table>";

// $fruits = array("사과","배","귤","수박","토마토");

// rsort($fruits);

// print_r($fruits);

$age = array(
  "박수정" => 28,
  "박준명" => 30,
  "최주영" => 31,
  "박민정" => 27,
);

krsort($age);

print_r($age);

?>