<?php

function exclaim($name,$str) {
  return $name." ".$str."!";
}

function ask($name,$str) {
  return $name." ".$str."?";
}

function printFormatted($name,$str, $format) {
  echo $format($name,$str);
}

echo printFormatted("박민정","안녕", "exclaim"); // 안녕!
echo printFormatted("최주영","안녕하세요", "ask"); // 안녕하세요?

?>