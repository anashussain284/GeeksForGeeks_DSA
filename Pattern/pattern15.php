<?php

function pattern($n) {
  $alpha = range('A', 'Z');
  for ($i = $n; $i > 0; $i--) {
    for ($j = 0; $j < $i; $j++) echo $alpha[$j];
    echo "\n";
  }
}

pattern(5);

/**
ABCDE
ABCD
ABC
AB
A
*/