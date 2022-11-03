<?php

function pattern($n) {
  $alpha = range('A', 'Z');
  for ($i = 0; $i < $n; $i++) {
    for ($j = $n-1, $k = 0; $k <= $i; $j--, $k++) echo $alpha[$j] . " ";
    echo "\n";
  }
}

pattern(5);

/**
E
E D
E D C
E D C B
E D C B A
*/