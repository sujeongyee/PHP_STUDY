<?php

$GLOBALS['aaa'] = "안녕";


function aabb() {
  $GLOBALS['aab'] = "나오나요?";
  echo $GLOBALS['aaa']; // 안녕
}

echo $aaa;
aabb();
echo $GLOBALS['aab'];

?>