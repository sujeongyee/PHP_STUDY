<?php 

function my_callback($item) {
  return strlen($item);
}

$strings = ["apple","orange","pear","pineapple"];

$lengths = array_map("my_callback" , $strings);

print_r($lengths);

?>