<?php 


$age = array("Peter"=>35,"Ben" => 37, "Joe" => 20);

// $age = [
//   "Peter"=>35,
//   "Ben" => 37, 
//   "Joe" => 20];

echo json_encode($age); //{"Peter":35,"Ben":37,"Joe":20}

$json = '{"Peter":35,"Ben":37,"Joe":20}';

var_dump(json_decode($json)); // object(stdClass)#1 (3) { ["Peter"]=> int(35) ["Ben"]=> int(37) ["Joe"]=> int(20) }

//$obj = json_decode($json);

$obj = json_decode($json);  // object 객체 형태
$arr = json_decode($json, true); // 배열 형태

echo $obj->Peter; // 35
echo $arr['Peter']; // 35
echo "<br>";
foreach($arr as $key=> $val) {
  echo "$key 님은 $val 세 입니다.<br>";
} 

?>