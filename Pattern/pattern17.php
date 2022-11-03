<?php

function pattern($n) {
  $alpha = range('A', 'Z');
  $space = $n - 2;
  for ($i = 1; $i < $n; $i++) {
    for ($j = 0; $j < $space; $j++) echo ".";
    for ($k = 0; $k < $i; $k++) echo $alpha[$k];
    $k = $k - 2; //echo "\n".$k."\n"; 
    for ($l = $k; $l > 0; $l++); echo ($l < 0) ? " " : $alpha[$l];
    echo "\n";
    $space--;
  }
}

pattern(5);

/**
   A
  ABA
 ABCBA
ABCDCBA
*/