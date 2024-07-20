<style>
  span {
    color: white;
    background-color: red;
  }
  * {
    line-height: 1;
    margin: 0;
  }
  h3 {
    color: lightgray;
  }
</style>
<?php

// 해당 문자열 찾기

$string = "ABCDEFGHIJKLMNOPQRSTUVWXYZ
abcdefghijklmnopqrstuvwxyz 0123456789";
$pattern = '/[A-Ca-f]/';
$replacement = "!";

echo "<h3>before:</h3>";
echo $string;
echo "<p> &nbsp; </p>";
echo "<h3>after:</h3>";
echo preg_replace($pattern, $replacement,$string);







?>