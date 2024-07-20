<?php

$dir_name = "./upload";

$d = dir($dir_name); // 인스턴스를 만들어 준다.

// print_r($d);
// $file_name = $d->read();
// echo $file_name."<br>";
// $file_name = $d->read();
// echo $file_name."<br>";
// $file_name = $d->read();
// echo $file_name."<br>";

while($file_name = $d->read()) {
  if($file_name == '.' or $file_name =='..') continue;
  // echo "<img src = '$dir_name".'/'."$file_name' width='100px'>"."<br>";
  // echo "<img src='{$dir_name}/{$file_name}' width='100px'><br>";
  ?> <img src= '<?php echo $dir_name.'/'.$file_name ?> width="100px"> <?php
}


$d->close();




?>