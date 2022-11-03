<?php

function pattern($n) {
  $alpha = range('A', 'Z');
  for ($i = 0; $i < $n
  ; $i++) {
    for ($j = 0; $j <= $i; $j++) echo $alpha[$j];
    echo "\n";
  } 
}

pattern(5);
/**
A
AB
ABC
ABCD
ABCDE
*/